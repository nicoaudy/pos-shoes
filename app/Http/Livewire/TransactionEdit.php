<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Customer;
use App\Models\Transaction;
use App\Models\TransactionDetail;
use Livewire\Component;

class TransactionEdit extends Component
{
    public $customers;
    public $categories;
    public $discount;
    public $customer_id;
    public $paid;
    public $transactionCategory;
    public $transactionDescription;
    public $sub_total;

    public $updateMode = false;
    public $inputs = [];
    public $i = 1;

    public function mount()
    {
        $id = request()->segment(2);

        $transaction = Transaction::find($id);

        $this->discount = $transaction->discount;
        $this->customer_id = $transaction->customer_id;
        $this->paid = $transaction->paid;

        $details = $transaction->transaction_details()->get();

        foreach ($details as $index => $d) {
            $this->add($index);
            $this->transactionCategory[$index] = $d->category->id;
            $this->transactionDescription[$index] = $d->description;
        }
    }

    public function add($i)
    {
        $i = $i + 1;
        $this->i = $i;
        array_push($this->inputs, $i);
    }

    public function remove($i)
    {
        unset($this->inputs[$i]);
    }

    private function resetInputFields()
    {
        $this->discount = '';
        $this->customer_id = '';
        $this->paid = '';

        $this->sub_total = '';

        $this->transactionCategory[0] = '';
        $this->transactionDescription[0] = '';
    }

    public function handleSubmit()
    {
        $this->validate([
            'customer_id'     => 'required',
            'paid'     => 'required',
            'transactionCategory.0'     => 'required',
            'transactionDescription.0'     => 'required',
            'transactionDescription.*'     => 'required',
            'transactionCategory.*'     => 'required',
        ]);

        $last = Transaction::latest()->first()->id ?? 0;
        $transaction = Transaction::create([
            'customer_id' => $this->customer_id,
            'code_number' => generate_code_sequence('INV', $last, 6),
            'paid' => $this->paid,
            'discount' => $this->discount,
            'sub_total' => $this->sub_total,
            'total' => $this->sub_total - $this->discount,
        ]);

        foreach ($this->transactionCategory as $key => $value) {
            TransactionDetail::create([
                'transaction_id' => $transaction->id,
                'category_id' => $this->transactionCategory[$key],
                'description' => $this->transactionDescription[$key] ?? null
            ]);
        }

        $this->inputs = [];
        $this->resetInputFields();

        return redirect('transaction');
    }

    public function render()
    {
        $this->customers = Customer::all();
        $this->categories = Category::all();

        $transaction_categories = Category::whereIn('id', $this->transactionCategory ?? [])->get();

        $this->sub_total = collect($transaction_categories)->reduce(function ($carry, $item) {
            return $carry + $item->price;
        }, 0);

        return view('livewire.transaction-edit');
    }
}

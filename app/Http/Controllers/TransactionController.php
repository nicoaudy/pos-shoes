<?php

namespace App\Http\Controllers;

use PDF;
use App\Http\Controllers\Controller;
use App\Models\Transaction;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        $transaction = Transaction::when($keyword, function ($query) use ($keyword) {
            $query->where('customer_id', 'LIKE', "%$keyword%")
                ->orWhere('code_number', 'LIKE', "%$keyword%")
                ->orWhere('discount', 'LIKE', "%$keyword%")
                ->orWhere('sub_total', 'LIKE', "%$keyword%")
                ->orWhere('total', 'LIKE', "%$keyword%")
                ->orWhere('paid', 'LIKE', "%$keyword%");
        })->paginate($perPage);

        return view('transaction.index', compact('transaction'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('transaction.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'customer_id' => 'required',
            'discount' => 'numeric',
            'sub_total' => 'numeric',
            'total' => 'numeric',
            'paid' => 'required'
        ]);
        $requestData = $request->all();

        Transaction::create($requestData);

        $notification = ['message' => 'Your data has been added successfully', 'alert-type' => 'success'];
        return redirect('transaction')->with($notification);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $transaction = Transaction::findOrFail($id);
        $pdf = PDF::loadView('transaction.pdf', compact('transaction'));
        return $pdf->download('transaction.pdf');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $transaction = Transaction::findOrFail($id);
        return view('transaction.edit', compact('transaction'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update($id, Request $request)
    {
        $this->validate($request, [
            'customer_id' => 'required',
            'discount' => 'numeric',
            'sub_total' => 'numeric',
            'total' => 'numeric',
            'paid' => 'required'
        ]);
        $requestData = $request->all();

        $transaction = Transaction::findOrFail($id);
        $transaction->update($requestData);

        $notification = ['message' => 'Your data has been updated successfully', 'alert-type' => 'success'];
        return redirect('transaction')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        $transaction = Transaction::find($id);
        $transaction->transaction_details()->delete();
        $transaction->delete();

        $notification = ['message' => 'Your data has been deleted successfully', 'alert-type' => 'error'];
        return redirect('transaction')->with($notification);
    }
}

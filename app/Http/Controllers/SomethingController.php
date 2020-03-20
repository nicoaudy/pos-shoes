<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Something;
use Illuminate\Http\Request;

class SomethingController extends Controller
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

        $something = Something::when($keyword, function($query) use($keyword) {
            $query->where('name', 'LIKE', "%$keyword%")
				->orWhere('queue', 'LIKE', "%$keyword%");
        })->paginate($perPage);

        return view('something.index', compact('something'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('something.create');
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
			'name' => 'required'
		]);
        $requestData = $request->all();
        
        Something::create($requestData);

        $notification = ['message' => 'Your data has been added successfully', 'alert-type' => 'success'];
        return redirect('something')->with($notification);
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
        $something = Something::findOrFail($id);
        return view('something.show', compact('something'));
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
        $something = Something::findOrFail($id);
        return view('something.edit', compact('something'));
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
			'name' => 'required'
		]);
        $requestData = $request->all();
        
        $something = Something::findOrFail($id);
        $something->update($requestData);

        $notification = ['message' => 'Your data has been updated successfully', 'alert-type' => 'success'];
        return redirect('something')->with($notification);
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
        Something::destroy($id);

        $notification = ['message' => 'Your data has been deleted successfully', 'alert-type' => 'error'];
        return redirect('something')->with($notification);
    }
}

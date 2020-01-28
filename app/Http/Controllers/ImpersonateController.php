<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use App\DataTables\ImpersonateDataTable;

class ImpersonateController extends Controller
{
    public function index(ImpersonateDataTable $datatable)
    {
        return $datatable->render('impersonate.index');
    }

    public function impersonate($id)
    {
        $user = User::find($id);
        if ($user->role <> 'Super User') {
            auth()->user()->setImpersonating($user->id);
        } else {
            flash('Impersonate disabled for this role')->error();
        }
        return redirect()->route('home');
    }

    public function stopImpersonating()
    {
        auth()->user()->stopImpersonating();
        flash('Welcome Back')->success();
        return redirect()->route('home');
    }
}

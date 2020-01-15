<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    public function index()
    {
        return view('profile.index');
    }

    public function store()
    {
        if (request()->hasFile('avatar')) {
            $file = request()->file('avatar');
            $fileExtension = $file->getClientOriginalExtension();
            $mimeType = $file->getClientMimeType();
            $fileSize = $file->getClientSize();
            $name = uniqid().'.'.$fileExtension;

            $this->uploadAndRemove($file, $name, auth()->user()->avatar, '/');

            auth()->user()->update([
                'avatar' => $name
            ]);
        }
    }
}

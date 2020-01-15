<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /**
     * Upload and remove the existing file
     *
     * Dropbox :
     * $this->dropbox = Storage::disk('dropbox')->getDriver()->getAdapter()->getClient(); (add this as construct)
     * $this->dropbox->createSharedLinkWithSettings('folder/'.$filename);
     */
    public function uploadAndRemove($file, $filename, $oldname, $folder = '/')
    {
        $path = $folder . $oldname;
        $exists = Storage::disk('dropbox')->exists($path);
        if ($exists) {
            Storage::disk('dropbox')->delete($path);
        }
        Storage::disk('dropbox')->putFileAs($folder, $file, $filename);
    }
}

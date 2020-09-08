<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

function set_active($uri, $output = 'active')
{
    if (is_array($uri)) {
        foreach ($uri as $u) {
            if (Route::is($u)) {
                return $output;
            }
        }
    } else {
        if (Route::is($uri)) {
            return $output;
        }
    }
}

function get_file_from_storage($folder, $filename)
{
    $path = $folder . $filename;
    return Storage::url($path);
}

if (!function_exists('userCan')) {
    function userCan($permission)
    {
        return auth()->user()->can($permission);
    }
}

function generate_code_sequence($identifier, $latestOrder, $digit)
{
    $last = $latestOrder + 1;
    return $identifier . "-" . date('m') . date('Y') . '-' . str_pad($last, $digit, "0", STR_PAD_LEFT);
}

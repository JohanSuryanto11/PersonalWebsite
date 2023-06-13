<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DownloadController extends Controller
{
    public function downloadFile($namefile)
{
    $file = 'download/' . $namefile;

    $filePath = public_path($file);

    if (file_exists($filePath)) {
        return response()->download($filePath);
    } else {
        abort(404);
    }
}
}

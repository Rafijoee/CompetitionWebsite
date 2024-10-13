<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FileController extends Controller
{
    public function download($filename)
    {
        // Decode the filename back to its original form
        $decodedFilename = urldecode($filename);
        
        // Create the full path to the file in the public directory
        $filePath = public_path($decodedFilename);
    
        if (file_exists($filePath)) {
            return response()->download($filePath);
        } else {
            Log::warning("File not found: " . $filePath);
            return redirect()->back()->with('error', 'File not found!');
        }
    }
}

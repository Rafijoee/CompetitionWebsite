<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function download($name)
    {
        $filePath = public_path('rulebook/' . $name);
        if (!file_exists($filePath)) {
            return redirect()->back()->with('error', 'File not found.');
        }

        return response()->download($filePath, $name);
    }
    public function download2($filename)
    {
        // ddd($filename);
        $filePath = public_path('proposal/' . $filename);

        if (!file_exists($filePath)) {
            return redirect()->back()->with('error', 'File not found.');
        }

        return response()->download($filePath, $filename);
    }
}

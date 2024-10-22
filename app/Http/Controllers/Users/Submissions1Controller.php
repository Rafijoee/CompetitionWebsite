<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\Models\TeamSubmissions;
use App\Models\Teams;
use App\Models\TeamSubmissionsDetails;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use Illuminate\Http\Request as HttpRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;


class Submissions1Controller extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $can = $user->teams->stage_id;
        // if ($can != 1) {
        //     return redirect()->route('dashboard')->with('error', 'Anda tidak bisa mengakses halaman tersebut!');
        // }
        $fileOnUpload = Auth::user()->teams?->team_submission?->first()->path_1;
        $categorys_id = $user->teams->team_submission;

        return view('users.submisson1.index', compact('categorys_id', 'fileOnUpload'));
    }

    public function store(Request $request)
    {
        // Membuat direktori jika belum ada
        $directory = public_path('submission1');
        if (!File::isDirectory($directory)) {
            File::makeDirectory($directory, 0777, true, true);
        }

        try {
            $validator = Validator::make($request->all(), [
                'submission1' => 'required|mimes:zip|max:5120',
            ], [
                'submission1.required' => 'The submission file is required.',
                'submission1.mimes' => 'The submission file must be a ZIP file.',
                'submission1.max' => 'The submission file size must not exceed 5MB.',
            ]);

            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }
            

            if ($request->hasFile('submission1')) {
                $team_id = Auth::user()->teams->id;
                $fileOnUpload = Auth::user()->teams?->team_submission?->first()->path_1;

                if (isset($fileOnUpload) && Auth::user()->teams?->team_submission->first()->path_3 != "") {
                    if (file_exists($fileOnUpload)) {
                        unlink($fileOnUpload);
                    }
                }
                $file = $request->file('submission1');
                $teamName = Auth::user()->teams->team_name;
                $fileName = $teamName . '_' . $file->getClientOriginalName();
                $fileLocation = 'submission1/' . Auth::user()->teams?->category?->category_name . '/';
                $path = $fileLocation . $fileName;
                $file->move(public_path($fileLocation), $fileName);
                

                TeamSubmissions::where('team_id', $team_id)->update(['path_1' => $path]);

                return redirect()->route('dashboard')->with('success', 'Anda terhasil mengupload proposal');
            } else {
                return response()->json(['error' => 'File tidak ditemukan'], 400);
            }
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->with('error', 'Gagal mengupload proposal');
        }
    }
}

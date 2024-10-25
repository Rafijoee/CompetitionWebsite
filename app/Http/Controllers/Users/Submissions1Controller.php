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
        $team_id = Auth::user()->teams->id;
        $stage_id = Auth::user()->teams->stage_id;
        $category = Auth::user()->teams->category_id;
        $fileOnUpload = TeamSubmissions::where('team_id', $team_id)->where('stage_id', $stage_id)->pluck('path')->first();
        $mimes = Auth::user()->teams->stage->file_type;
        
        return view('users.submisson1.index', compact('category', 'fileOnUpload'));
    }
    
    public function store(Request $request)
    {
        
        $mimes = Auth::user()->teams->stage->file_type;
        $stage_id = Auth::user()->teams->stage_id;
        $team_id = Auth::user()->teams->id;
        $fileOnUpload = TeamSubmissions::where ('team_id', $team_id)->where('stage_id', $stage_id)->pluck('path')->first();
        // Membuat direktori jika belum ada
        $directory = public_path('submission1');
        if (!File::isDirectory($directory)) {
            File::makeDirectory($directory, 0777, true, true);
        }

        try {
            if ($mimes = 'pdf') {
                $validator = Validator::make($request->all(), [
                    'submission' => 'required|mimes:pdf|max:5120',
                ], [
                    'submission.required' => 'The submission file is required.',
                    'submission.mimes' => 'The submission file must be a PDF file.',
                    'submission.max' => 'The submission file size must not exceed 5MB.',
                ]);
            } else if ($mimes = 'zip') {
                $validator = Validator::make($request->all(), [
                    'submission' => 'required|mimes:zip|max:5120',
                ], [
                    'submission.required' => 'The submission file is required.',
                    'submission.mimes' => 'The submission file must be a ZIP file.',
                    'submission.max' => 'The submission file size must not exceed 5MB.',
                ]);
            } else if ($mimes = 'txt'){
                $validator = Validator::make($request->all(), [
                    'submission' => 'required|mimes:txt|max:5120',
                ], [
                    'submission.required' => 'The submission file is required.',
                    'submission.mimes' => 'The submission file must be a TXT file.',
                    'submission.max' => 'The submission file size must not exceed 5MB.',
                ]);
            } else if ($mimes = 'img') {
                $validator = Validator::make($request->all(), [
                    'submission' => 'required|mimes:img|max:5120',
                ], [
                    'submission.required' => 'The submission file is required.',
                    'submission.mimes' => 'The submission file must be a IMG file.',
                    'submission.max' => 'The submission file size must not exceed 5MB.',
                ]);
            }

            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }
            

            if ($fileOnUpload) {
                // lanjut disini
            }

            if ($request->hasFile('submission')) {
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

    public function update(Request $request, string $id)
    {
        //abisini ngubah disini yaa`
    }   
}

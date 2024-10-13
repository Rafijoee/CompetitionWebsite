<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\Models\TeamSubmissionsDetails;
use App\Models\TeamSubmissions;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use Illuminate\Http\Request as HttpRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;


class FinalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();
        $can = $user->teams->stage_id;
        // if ($can != 3) {
        //     return redirect()->route('dashboard')->with('error', 'Anda tidak bisa mengakses halaman tersebut!');
        // }
        $fileOnUpload = Auth::user()->teams?->team_submission?->first()->path_3;
        $categorys_id = $user->teams->team_submission;

        return view('users.final.index', compact('categorys_id', 'fileOnUpload'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Membuat direktori jika belum ada
        $directory = public_path('final');
        if (!File::isDirectory($directory)) {
            File::makeDirectory($directory, 0777, true, true);
        }

        try {
            // Validasi input dengan pesan khusus
            $validator = Validator::make($request->all(), [
                'final' => 'required|mimes:zip|max:5120',
            ], [
                'final.required' => 'The submission file is required.',
                'final.mimes' => 'The submission file must be a ZIP file.',
                'final.max' => 'The submission file size must not exceed 5MB.',
            ]);

            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }

            if ($request->hasFile('final')) {
                $team_id = Auth::user()->teams->id;
                $fileOnUpload = Auth::user()->teams?->team_submission?->first()->path_3;

                if (isset($fileOnUpload) && Auth::user()->teams?->team_submission->first()->path_3 != "") {
                    if (file_exists($fileOnUpload)) {
                        unlink($fileOnUpload);
                    }
                }

                $file = $request->file('final');
                $teamName = Auth::user()->teams->team_name;
                $fileName = $teamName . '_' . $file->getClientOriginalName();
                $fileLocation = 'final/' . Auth::user()->teams?->category?->category_name . '/';
                $file->move(public_path($fileLocation), $fileName);

                $path = $fileLocation . $fileName;
                TeamSubmissions::where('team_id', $team_id)->update(['path_3' => $path]);

                return redirect()->route('dashboard')->with('success', 'Anda terhasil mengupload proposal');
            } else {
                return response()->json(['error' => 'File tidak ditemukan'], 400);
            }
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->with('error', 'Gagal mengupload proposal');
        }
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

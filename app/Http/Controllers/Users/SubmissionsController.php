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
use Illuminate\Support\Facades\Log;

class SubmissionsController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $team_id = Auth::user()->teams->id;
        $stage = Auth::user()->teams->stage->name;
        $stage_id = Auth::user()->teams->stage_id;
        $category = Auth::user()->teams->category_id;
        $fileOnUpload = TeamSubmissions::where('team_id', $team_id)->where('stage_id', $stage_id)->pluck('path')->first();
        $mimes = Auth::user()->teams->stage->file_type;

        return view('users.submisson1.index', compact('category', 'fileOnUpload'));
    }

    public function store(Request $request)
    {
        $mimes = Auth::user()->teams->stage->file_type;
        $stage = Auth::user()->teams->stage->name;
        $stage_id = Auth::user()->teams->stage_id;
        $category = Auth::user()->teams->category->category_name;
        $team_id = Auth::user()->teams->id;
        $fileOnUpload = TeamSubmissions::where('team_id', $team_id)->where('stage_id', $stage_id)->pluck('path')->first();
    
        try {
            // Validasi file berdasarkan tipe
            if ($mimes == 'pdf') {
                $validator = Validator::make($request->all(), [
                    'submission' => 'required|mimes:pdf|max:5120',
                ]);
            } else if ($mimes == 'zip') {
                $validator = Validator::make($request->all(), [
                    'submission' => 'required|mimes:zip|max:5120',
                ]);
            } else if ($mimes == 'txt') {
                $validator = Validator::make($request->all(), [
                    'submission' => 'required|mimes:txt|max:5120',
                ]);
            } else if (in_array($mimes, ['jpeg', 'png', 'jpg'])) {
                $validator = Validator::make($request->all(), [
                    'submission' => 'required|mimes:jpeg,png,jpg|max:5120',
                ]);
            }
    
            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }
    
            if ($request->hasFile('submission')) {
                // Pindahkan file terlebih dahulu
                $file = $request->file('submission');
                $fileName = $file->getClientOriginalName();
                $fileLocation = "$category/$stage/";  // Buat path berdasarkan kategori dan stage
                $path = $fileLocation . $fileName;
    
                // Pindahkan file ke direktori yang diinginkan
                $file->move(public_path($fileLocation), $fileName);
    
                Log::info('File moved to: ' . $path);  // Debug log
    
                // Jika file belum diupload sebelumnya, buat entri baru di database
                if (!$fileOnUpload) {
                    TeamSubmissions::create([
                        'team_id' => $team_id,
                        'stage_id' => $stage_id,
                        'path' => $path,  // Simpan path ke database
                    ]);
                    Log::info('New file record created in the database.');
                } else {
                    // Jika file sudah ada, lakukan update
                    $submission = TeamSubmissions::where('team_id', $team_id)->where('stage_id', $stage_id)->first();
                    $submission->update([
                        'path' => $path,  // Update path yang benar di database
                    ]);
                    Log::info('File record updated in the database.');
                }
    
                return redirect()->route('dashboard')->with('success', 'Anda berhasil mengupload proposal');
            } else {
                return response()->json(['error' => 'File tidak ditemukan'], 400);
            }
        } catch (\Exception $e) {
            // Kembali jika ada error
            Log::error('Error occurred: ' . $e->getMessage());  // Log error
            return redirect()->back()->with('error', 'Gagal mengupload proposal');
        }
    }
    



    public function update(Request $request, string $id)
    {
        //abisini ngubah disini yaa`
    }
}

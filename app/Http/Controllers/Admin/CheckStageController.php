<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Categories;
use App\Models\Members;
use App\Models\Payments;
use App\Models\Stages;
use App\Models\Teams;
use App\Models\TeamSubmissions;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;

class CheckStageController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {   
        $stages1 = Teams::whereIn('stage_id', [1, 4, 7, 10])->get();
        $stages2 = Teams::whereIn('stage_id', [2, 5, 8, 11])->get();
        $stages3 = Teams::whereIn('stage_id', [3, 6, 9, 12])->get();
        
        return view('admin.checkstage.index', compact('stages1', 'stages2', 'stages3'));
    }

    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     */
    public function show(Teams $teams, $id)
    {
        
    }
    
    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        try {
            // Dekripsi ID
            $decryptedID = Crypt::decryptString($id);
        } catch (\Illuminate\Contracts\Encryption\DecryptException $e) {
            // Tangani kesalahan jika ID tidak dapat didekripsi
            return redirect()->back()->with('error', 'ID tidak valid.');
        }
        
        $team = Teams::find($decryptedID);
        
        $name = $team->team_name;
        
        $path1 = $team?->team_submission?->first()?->path_1;
        $path1 = urlencode($path1);
        $path2 = $team?->team_submission?->first()?->path_2;
        $path2 = urlencode($path2);
        $path3 = $team?->team_submission?->first()?->path_3;
        $path3 = urlencode($path3);

        $members = $team->members;

        

        if (!$team) {
            return redirect()->back()->with('error', 'Tim tidak ditemukan.');
        }
        $members = $team->members;
        $filePath = storage_path("app {$members?->first()?->active_certificate}");
        
        // Ambil anggota terkait
        return view('admin.checkstage.update', compact('team', 'members', 'path1', 'name', 'path2', 'path3'));
    }
    
    public function downloadCertificate($memberId)
    {
        $member = Members::find($memberId);

        if (!$member || !$member->active_certificate) {
            return redirect()->back()->with('error', 'Anggota atau sertifikat aktif tidak ditemukan.');
        }

        $filePath = storage_path("app\{$member->active_certificate}");

        if (file_exists($filePath)) {
            // Jika file ditemukan, download file tersebut
            return response()->download($filePath);
        } else {
            // Jika file tidak ditemukan, kembalikan pesan error
            return redirect()->back()->with('error', 'Sertifikat aktif tidak ditemukan.');
        }
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $team = Teams::findOrFail($id); // Muat data tim sekali
    
        // Sesuaikan nilai tahap jika kategori tim adalah 2
        if ($team->category_id == 2) {
            if ($request->stage == 1) {
                $request->merge(['stage' => 4]);
            } elseif ($request->stage == 2) {
                $request->merge(['stage' => 5]);
            } elseif ($request->stage == 3) {
                $request->merge(['stage' => 6]);
            }
        } else if ($team->category_id == 3){
            if ($request->stage == 1) {
                $request->merge(['stage' => 7]);
            } elseif ($request->stage == 2) {
                $request->merge(['stage' => 8]);
            } elseif ($request->stage == 3) {
                $request->merge(['stage' => 9]);
            }
        } else if ($team->category_id == 4){
            if ($request->stage == 1) {
                $request->merge(['stage' => 10]);
            } elseif ($request->stage == 2) {
                $request->merge(['stage' => 11]);
            } elseif ($request->stage == 3) {
                $request->merge(['stage' => 12]);
            }
        }
    
        Teams::where('id', $id)->update([
            'stage_id' => $request->stage,
            'verified_status' => $request->verification,
        ]);
    
        TeamSubmissions::where('id', $id)->update([
            'stage_id' => $request->stage,
        ]);
    
        return redirect('checkstage')->with('success', 'Data tim ' . $team->team_name . ' telah diubah.');
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function kti()
    {
        $stages1 = Teams::Where('stage_id', 1)->filter()->category()->get();
        $stages2 = Teams::Where('stage_id', 2)->filter()->category()->get();
        $stages3 = Teams::Where('stage_id', 3)->filter()->category()->get();
        return view('admin.checkstage.kti', compact('stages1', 'stages2', 'stages3'));
    }

    public function busplan()
    {
        $stages1 = Teams::Where('stage_id', 4)->get();
        $stages2 = Teams::Where('stage_id', 5)->get();
        $stages3 = Teams::Where('stage_id', 6)->get();
        return view('admin.checkstage.busplan', compact('stages1', 'stages2', 'stages3'));
    }
    public function ppl()
    {
        $stages1 = Teams::Where('stage_id', 7)->get();
        $stages2 = Teams::Where('stage_id', 8)->get();
        $stages3 = Teams::Where('stage_id', 9)->get();
        return view('admin.checkstage.ppl', compact('stages1', 'stages2', 'stages3'));
    }

    public function ux()
    {
        $stages1 = Teams::Where('stage_id', 10)->get();
        $stages2 = Teams::Where('stage_id', 11)->get();
        $stages3 = Teams::Where('stage_id', 12)->get();
        return view('admin.checkstage.ux', compact('stages1', 'stages2', 'stages3'));
    }


    public function search(Request $request){
        $query = Teams::query();
    
        if ($request->has('search')) {
            $teams = Teams::where('team_name', 'like', "%".$request->search."%")->get();
        } else {
            $teams = Teams::all();
        }
    
        if($request->has('category') && $request->category != ''){
            $query->where('category', $request->category);
        }
        
        $stages1 = Teams::Where('stage_id', [1, 4, 7, 10])->get();
        $stages2 = Teams::Where('stage_id', [2, 5, 8, 11])->get();
        $stages3 = Teams::Where('stage_id', [3, 6, 9, 12])->get();

        $teams = $query->get();
    
        return view('admin.checkstage.index', compact('teams', 'stages1', 'stages2', 'stages3'));
    }
    
}

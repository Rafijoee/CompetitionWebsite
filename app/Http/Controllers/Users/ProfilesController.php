<?php

namespace App\Http\Controllers\Users;

use App\Models\Teams;
use App\Models\Stages;
use App\Models\Members;
use App\Models\Categories;
use App\Models\Universities;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Contracts\Cache\Store;
use App\Models\TeamSubmissionsDetails;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StoreProfileRequest;
use App\Models\Payments;
use App\Models\TeamSubmissions;
use Illuminate\Support\Facades\Crypt;


class ProfilesController extends Controller
{
    public function __construct()
    {
        $this->middleware('editteams')->only('edit');
    }

    public function dashboard()
    {

        $user = Auth::user()->id;
        $team = Teams::where('user_id', $user)->first();
        $team_id = $team?->id;
        $verif = $team?->verified_status;
        $payment = Payments::where('team_id', $team_id)
            ->whereIn('stage_id', [2, 5, 8, 11])
            ->first();
        $payment2 = Payments::where('team_id', $team_id)
            ->whereIn('stage_id', [3, 6, 9, 12])
            ->first();
        $member = Members::where('team_id', $team?->id)->get();
        $orang = Members::where('team_id', $team?->id)->first();
        $university = $orang?->universitas;
        $category = $team?->category?->category_name;
        $status = Auth()->user()?->teams?->verified_status;
        $team_name = $team?->team_name;
        $captain = $member->where('member_role', 'ketua')->first();
        $anggotas = $member;
        if ($anggotas->count() == 0) {
            $anggotas = null;
        }
        if ($member->count() == 0) {
            $member = null;
        }
        $stage = Stages::where('id', $team?->stage_id)->first();
        return view('dashboard.index', compact('member', 'university', 'captain', 'team', 'anggotas', 'stage', 'status', 'category', 'verif', 'payment', 'payment2', 'team_name'));
    }

    public function index()
    {
        $user_id = Auth::id();
        $team = Teams::where('user_id', $user_id)->first();
        if (!$team) {
            return redirect()->route('profile.create');
        }
        $members = $team->members;

        return view('users.profile.index', compact('team', 'members'));
    }

    public function create()
    {
        $categories = Categories::all();
        $universities = Universities::all()->sortByDesc('name');
        $team = null;
        $members = null;
        return view('users.profile.form', compact('categories', 'universities', 'team', 'members'));
    }

    public function show($id)
    {
        $team = Teams::find($id);
        $members = Members::where('team_id', $team->id)->get();
        $univ = $members->first()?->universitas;
        $categories = Categories::all();
        $universities = Universities::all();
        return view('users.profile.form', compact('team', 'categories', 'universities', 'members', 'univ'));
    }

    public function store(StoreProfileRequest $request)
    {
        $total_members = $request->name_anggota_3 ? 3 : 2;

        $category_stage_map = [
            1 => 1,
            2 => 4,
            3 => 7,
            4 => 10
        ];
        $stage_id = isset($category_stage_map[$request->category_id]) ? $category_stage_map[$request->category_id] : null;

        DB::beginTransaction();
        try {
            $team = Teams::create([
                'team_name' => $request->team_name,
                'phone' => $request->phone,
                'category_id' => $request->category_id,
                'verified_status' => 'unverified', // 'pending', 'verified', 'rejected
                'user_id' => Auth::id(),
                'total_members' => $total_members,
                'stage_id' => $stage_id,
            ]);

            for ($i = 1; $i <= $total_members; $i++) {
                $univ = $request->univ;
                $name = $request['name_anggota_' . $i];
                $active_path = $request->file('active_anggota_' . $i)->store($request->team_name . '/active');
                Members::create([
                    'team_id' => $team->id,
                    'full_name' => $name,
                    'universitas' => $request->univ,
                    'active_certificate' => $active_path,
                    'member_role' => $i == 1 ? 'ketua' : 'anggota',
                ]);
            }
            $team_submission = TeamSubmissions::create([
                'team_id' => $team->id,
                'stage_id' => $stage_id,
            ]);
            DB::commit();
            return redirect('dashboard')->with('success', 'Tim berhasil dibuat!');
        } catch (\Exception $e) {
            DB::rollBack();
            dd($e->getMessage());
            return redirect()->back()->with('error', 'Gagal membuat tim');
        }
    }
    public function downloadFile($path)
    {
        dd($path);
        try {
            return Storage::download($path);
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Gagal mengunduh file');
        }
    }


    public function edit($id)
    {
        try {
            // Dekripsi ID
            $decryptedID = Crypt::decryptString($id);
        } catch (\Illuminate\Contracts\Encryption\DecryptException $e) {
            // Tangani kesalahan jika ID tidak dapat didekripsi
            return redirect()->back()->with('error', 'ID tidak valid.');
        }

        // Mencari tim berdasarkan ID yang didekripsi
        $team = Teams::find($decryptedID);

        $team_id = $team->id;
        $members = Members::where('team_id', $team_id)->get();
        $stage_id = $team->stage_id;
        $path1 = TeamSubmissions::where('team_id', $team_id)?->pluck('path_1')?->first();
        $univ = $members->first()?->universitas;
        $categories = Categories::all();
        $universities = Universities::all();
        $members = $team->members;

        return view('users.profile.edit', compact('team', 'categories', 'universities', 'members', 'univ', 'path1', 'stage_id', 'members'));
    }


        public function update(StoreProfileRequest $request, string $id)
    {
        $team = Teams::findOrFail($id);
        $total_members = $request->name_anggota_3 ? 3 : 2;
        $category_stage_map = [
            1 => 1,
            2 => 4,
            3 => 7,
            4 => 10
        ];
        $stage_id = isset($category_stage_map[$request->category_id]) ? $category_stage_map[$request->category_id] : null;
    
        DB::beginTransaction();
        try {
            $team->update([
                'team_name' => $request->team_name,
                'phone' => $request->phone,
                'category_id' => $request->category_id,
                'verified_status' => 'unverified',
                'total_members' => $total_members,
                'stage_id' => $stage_id,
            ]);
    
            for ($i = 1; $i <= $total_members; $i++) {
                $member = Members::where('team_id', $team->id)->skip($i - 1)->first();
    
                if (!$member) {
                    $active_path = $request->hasFile('active_anggota_' . $i) ? $request->file('active_anggota_' . $i)->store($request->team_name . '/active') : null;
    
                    Members::create([
                        'team_id' => $team->id,
                        'full_name' => $request['name_anggota_' . $i],
                        'universitas' => $request['univ'],
                        'active_certificate' => $active_path,
                    ]);
                } else {
                    $active_path = $member->active_certificate;
                    if ($request->hasFile('active_anggota_' . $i)) {
                        $active_path = $request->file('active_anggota_' . $i)->store($request->team_name . '/active');
                    }
    
                    $member->update([
                        'full_name' => $request['name_anggota_' . $i],
                        'universitas' => $request['univ'],
                        'active_certificate' => $active_path,
                    ]);
                }
            }
    
            DB::commit();
            return redirect('/dashboard')->with('success', 'Tim berhasil diperbarui!');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->with('error', 'Gagal memperbarui tim');
        }
    }
    
    public function submission ()
    {
        $user = Auth::user()->id;
        $team = Teams::where('user_id', $user)->first();
        $team_id = $team?->id;
        $category = $team?->category?->category_name;

        return view('dashboard.submission', compact('category'));
    }
}

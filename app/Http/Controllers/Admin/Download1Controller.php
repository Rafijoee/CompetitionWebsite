<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Teams;
use Illuminate\Http\Request;

class Download1Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index2(){
        return view('dashboard.download');
    }

    public function index3(){
        return view('dashboard.downloadpembayaran');
    }

    public function index()
    {
        $timktis = Teams::whereIn('stage_id',[1,2,3] ) // Filter berdasarkan stage_id
        ->whereHas('team_submission', function($query) {
            $query->whereNotNull('path_1')
                  ->where('path_1', '!=', '');
        })
        ->with('team_submission')
        ->orderBy('updated_at', 'asc')
        ->get();


        $ktis = $timktis->map(function($team) {
            return [
                'team_name' => $team->team_name,
                'path_1' => urlencode($team->team_submission->first()->path_1),
            ];
        });

        $timbusplans = Teams::whereIn('stage_id',[4,5,6] ) // Filter berdasarkan stage_id
        ->whereHas('team_submission', function($query) {
            $query->whereNotNull('path_1')
                  ->where('path_1', '!=', '');
        })
        ->with('team_submission')
        ->orderBy('updated_at', 'asc')
        ->get();
        

        $busplans = $timbusplans->map(function($team) {
            return [
                'team_name' => $team->team_name,
                'path_1' => urlencode($team->team_submission->first()->path_1),
            ];
        });

        $timppls = Teams::whereIn('stage_id',[7,8,9] ) // Filter berdasarkan stage_id
        ->whereHas('team_submission', function($query) {
            $query->whereNotNull('path_1')
                  ->where('path_1', '!=', '');
        })
        ->with('team_submission')
        ->orderBy('updated_at', 'asc')
        ->get();
        

        $ppls = $timppls->map(function($team) {
            return [
                'team_name' => $team->team_name,
                'path_1' => urlencode($team->team_submission->first()->path_1),
            ];
        });

        $timuxs = Teams::whereIn('stage_id',[10,11,12] ) // Filter berdasarkan stage_id
        ->whereHas('team_submission', function($query) {
            $query->whereNotNull('path_1')
                  ->where('path_1', '!=', '');
        })
        ->with('team_submission')
        ->orderBy('updated_at', 'asc')
        ->get();
        
        $uxs = $timuxs->map(function($team) {
            return [
                'team_name' => $team->team_name,
                'path_1' => urlencode($team->team_submission->first()->path_1),
            ];
        });


        return view('admin.download1.index', compact('ktis', 'busplans', 'ppls', 'uxs'));
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

<?php

namespace App\Http\Controllers\Admin;

use App\Models\Payments;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DownloadBuktiFinalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kti = Payments::where('stage_id', 3)->get();
        $ktis = $kti->map(function($payment) {
            return [
                'team_name' => $payment->team->team_name,
                'path_2' => urlencode($payment->payment_path),
            ];
        });

        $busplan = Payments::where('stage_id', 6)->get();
        $busplans = $busplan->map(function($payment) {
            return [
                'team_name' => $payment->team->team_name,
                'path_2' => urlencode($payment->payment_path),
            ];
        });

        $ppl = Payments::where('stage_id', 9)->get();
        $ppls = $ppl->map(function($payment) {
            return [
                'team_name' => $payment->team->team_name,
                'path_2' => urlencode($payment->payment_path),
            ];
        });

        $ux = Payments::where('stage_id', 12)->get();
        $uxs = $ux->map(function($payment) {
            return [
                'team_name' => $payment->team->team_name,
                'path_2' => urlencode($payment->payment_path),
            ];
        });

        return view('admin.downloadbuktifinal.index', compact('ktis', 'busplans', 'ppls', 'uxs'));
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

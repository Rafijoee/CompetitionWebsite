<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Payments;
use App\Models\Teams;
use Illuminate\Http\Request;

class CheckPayment2Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ktis = Payments::where('stage_id', 2)->with('team')->get();
        $kti_bayars = $ktis->pluck('team.team_name');

        $busplans = Payments::where('stage_id', 5)->get();
        $busplan_bayars = [];
        foreach ($busplans as $busplan) {
            $busplan_bayars[] = Teams::where('id', $busplan->team_id)->value('team_name');
        }

        $ppls = Payments::where('stage_id', 8)->get();
        $ppl_bayars = [];
        foreach ($ppls as $ppl) {
            $ppl_bayars[] = Teams::where('id', $ppl->team_id)->value('team_name');
        }

        $uxs = Payments::where('stage_id', 11)->get();
        $ux_bayars = [];
        foreach ($uxs as $ux) {
            $ux_bayars[] = Teams::where('id', $ux->team_id)->value('team_name');
        }

        return view('admin.checkpayment2.index', compact('ktis', 'busplans', 'ppls', 'uxs', 'kti_bayars', 'busplan_bayars', 'ppl_bayars', 'ux_bayars'));
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
        $payments = Payments::findOrFail($id);
        $teams = Teams::where('id', $payments->team_id)->first();
        return view ('admin.checkpayment2.update', compact('payments', 'teams'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'status' => 'required|in:verified,unverified'
        ]);
    
        // Update status pembayaran
        $payment = Payments::findOrFail($id);
        $payment->update([
            'status' => $request->status,
        ]);
    
        // Dapatkan data tim tanpa query tambahan
        $team = $payment->team;
    
        return redirect()->route('checkpayment2.index')->with('success', 'Data Pembayaran  ' . $team->team_name . ' telah diubah.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

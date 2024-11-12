<?php

namespace App\Http\Controllers\Admin;

use App\Models\Categories;
use Illuminate\Http\Request;
use App\Models\Stages;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;

use function Laravel\Prompts\error;

class MakeStageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
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

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $category = Categories::findOrFail($id);
        
        return view('admin.makestage.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        DB::beginTransaction();
        try{
            $request->validate([
                'name' => 'required|string|max:255',
                'description' => 'required|string|max:255',
                'closed_at' => 'required|date',
                'file_type' => 'required|in:pdf,zip,txt,img',
            ]);
            $stage = Stages::findorFail($id);
            $stage->update([
                'name' => $request->name,
                'description' => $request->description,
                'closed_at' => $request->closed_at,
                'file_type' => $request->file_type,
            ]);
            DB::commit();
            return redirect()->route('makecompetition.index')->with('success', 'Stage updated successfully.');
        } catch (\Exception $e) {
            dd($e);
            DB::rollBack();
            return redirect()->back()->with('error', 'Failed to update stage: ' . $e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function newMakeStage(string $id)
    {
        $category = Categories::findOrFail($id);

        return view ('admin.makestage.create', compact('category'));

    }

    public function storeMakeStage ($id, Request $request)
    {

    }
}

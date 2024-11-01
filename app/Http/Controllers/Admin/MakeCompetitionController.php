<?php

namespace App\Http\Controllers\Admin;

use App\Models\Categories;
use Illuminate\Http\Request;
use App\Models\Stages;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;

class MakeCompetitionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Categories::all();
        return view ('admin.makecompetition.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.makecompetition.create');
    }
    public function store(Request $request)
    {
        DB::beginTransaction();
        try {
            // Validasi request
            $validated = $request->validate([
                'category_name' => 'required|string|max:255',
                'stage_count' => 'required|integer|min:1',
                'stages.*.name' => 'required|string|max:255',
                'stages.*.description' => 'nullable|string',
                'stages.*.closed_at' => 'required|date',
                'stages.*.file_type' => 'required|in:pdf,zip,txt,img',  // Validasi file_type
            ]);
    
            // Buat category
            $category = Categories::create([
                'category_name' => $validated['category_name'],
            ]);
    
            // Simpan stages yang terkait dengan category
            foreach ($validated['stages'] as $stage) {
                $category->stages()->create([
                    'name' => $stage['name'],
                    'description' => $stage['description'],
                    'closed_at' => $stage['closed_at'],
                    'file_type' => $stage['file_type'],  // Simpan file_type
                ]);
            }
    
            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->with('error', 'Failed to create category and stages: ' . $e->getMessage());
        }
    
        return redirect()->route('makecompetition.index')->with('success', 'Category and stages created successfully.');
    }
    
    
    
    

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('admin.makecompetition.show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        
        $category = Categories::findOrFail($id);
        
        return view('admin.makecompetition.edit', compact('category'));
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

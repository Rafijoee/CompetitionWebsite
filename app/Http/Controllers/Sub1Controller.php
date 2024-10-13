<?php

namespace App\Http\Controllers;

use App\Models\TeamSubmissionsDetails;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;


class Sub1Controller extends Controller
{
    public function store(Request $request)
    {
        $directory = public_path('submission1');
        if (!File::isDirectory($directory)) {
            File::makeDirectory($directory, 0777, true, true);
        }

        try {
            $validator = Validator::make($request->all(), [
                'submission1' => 'required|mimes:pdf|max:5120',
            ]);

            if ($validator->fails()) {
                return response()->json(['error' => $validator->errors()], 400);
            }

            if ($request->hasFile('submission1')) {
                $file = $request->file('submission1');
                $path = $request->file('submission1')->store('submission1');
                // dd(Auth::user()->teams->team_submissions->id);
                // dd(Auth::user()->teams?->team_submission->first()->id);
                // dd(teams::with('team_submissions'));
                // dd(TeamSubmissions::all());
                $submission = [
                    'team_submissions_id' => Auth::user()->teams?->team_submission->first()->id,
                    'submissions_type_id' => 1,
                    'path' => $path
                ];
                dd($submission);


                $create = TeamSubmissionsDetails::create($submission);

                // $submission = new TeamSubmissionsDetails;
                // $submission->path = 'submission1/' . $fileName;
                // $submission->team_submissions_id = Auth::user()->teams->team_submissions->id;
                // $submission->type = 1; 
                // $submission->save();

                return redirect()->route('dashboard');
            } else {
                return response()->json(['error' => 'File tidak ditemukan'], 400);
            }
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->with('error', 'Gagal mengupload proposal');
        }
    }
}

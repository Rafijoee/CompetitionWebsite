<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\Models\Payments;
use Illuminate\Support\Facades\File;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('users.payment.index');
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
        $request->validate([
            'paymentsub' => 'required|mimes:png,jpg|max:2048', // validasi untuk file png dan jpg dengan ukuran maksimal 2MB
        ]);

        // Tentukan direktori tujuan penyimpanan
        $directory = public_path('paymentsub2');

        // Cek apakah direktori ada, jika tidak buat direktori tersebut
        if (!File::isDirectory($directory)) {
            File::makeDirectory($directory, 0777, true, true);
        }

        // Cek apakah ada file yang diupload
        if ($request->hasFile('paymentsub')) {
            DB::beginTransaction();
            try {
                // Ambil nama tim dari user yang sedang login
                $team_name = Auth::user()->teams->team_name;
                $stage_id = Auth::user()->teams->stage_id; // Ambil stage_id dari user
                $file = $request->file('paymentsub');
                $fileExtension = $file->getClientOriginalExtension();
                $fileName = $team_name . '_' . $stage_id . '.' . $fileExtension; // Format nama file yang diinginkan

                // Simpan file ke direktori tujuan
                $file->move($directory, $fileName);

                // Buat path untuk penyimpanan di database
                $paymentsub_path = 'paymentsub2/' . $fileName;

                // Ambil data tambahan dari user yang sedang login
                $team_id = Auth::user()->teams->id;
                $status = 'unverified';

                // Simpan data pembayaran ke database dengan path yang benar
                $payments = Payments::create([
                    'team_id' => $team_id,
                    'stage_id' => $stage_id,
                    'payment_path' => $paymentsub_path, // Menggunakan path yang benar dari file yang di-upload
                    'status' => $status
                ]);

                // Commit transaksi ke database
                DB::commit();

                // Redirect ke halaman dashboard
                return redirect()->route('dashboard')->with('success', 'Berhasil upload file pembayaran');
            } catch (\Exception $e) {
                // Rollback transaksi jika terjadi kesalahan
                DB::rollBack();
                // Tampilkan pesan kesalahan untuk debugging
                return redirect()->back()->with('error', 'Gagal upload file pembayaran: ' . $e->getMessage());
            }
        } else {
            // Tampilkan pesan kesalahan jika file tidak ditemukan
            return redirect()->back()->with('error', 'File pembayaran tidak ditemukan');
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

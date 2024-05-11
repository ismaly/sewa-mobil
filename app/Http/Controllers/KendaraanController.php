<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kendaraan;

class KendaraanController extends Controller
{
    public function tambahview()
    {
        return view('tambahkendaraan');
    }

    public function tambahproses(Request $request)
    {  
        // dd($request->all());
        $request->validate([
            'merk' => 'required',
            'model' => 'required',
            'plat' => 'required|unique:kendaraan',
            'pinjam' => 'required|date',
            'pengembalian' => 'required|date',
            'tarif' => 'required|numeric',
        ]);
        
        Kendaraan::create([
            'merk' =>  $request->merk,
            'model' =>  $request->model,
            'plat' => $request->plat,
            'pinjam' => $request->pinjam,
            'tarif' => $request->tarif,
        ]);
        {
            // Redirect ke halaman login setelah pendaftaran berhasil
            return redirect()->route('dashboard')->with('success', 'Akun berhasil dibuat! Silakan masuk.');
            // Jika gagal menyimpan, berikan pesan kesalahan
            return redirect()->back()->withInput()->withErrors(['error' => 'Gagal menyimpan data. Silakan coba lagi.']);
        } 
    }
}

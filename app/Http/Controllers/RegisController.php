<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;


class RegisController extends Controller
{
    public function regisview()
    {
        return view('loginRegis.regis');
    }

    public function regisproses(Request $request)
    {
        // dd($request->all());
        User::create([
                'nama' => $request->nama,
                'alamat' => $request->alamat,
                'nohp' => $request->nohp,
                'nosim' => $request->nosim,
                'password' => Hash::make($request->password),
            ]);
        {
            // Redirect ke halaman login setelah pendaftaran berhasil
            return redirect()->route('loginview')->with('success', 'Akun berhasil dibuat! Silakan masuk.');
            // Jika gagal menyimpan, berikan pesan kesalahan
            return redirect()->back()->withInput()->withErrors(['error' => 'Gagal menyimpan data. Silakan coba lagi.']);
        } 
    }
}

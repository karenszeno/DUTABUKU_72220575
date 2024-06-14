<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewController extends Controller
{
    public function tampilkanString()
    {
        
        $makan = ['soto', 'kuah', 'mie', 'lalapan', 'mujaer'];

        
        return view('makanan', ['makan' => $makan]);
    }



    public function inputGaji()
    {
        return view('input_gaji');
    }

    public function hitungGaji(Request $request)
    {
        $id = $request->id;
        $nama = $request->nama;
        $golongan = $request->golongan;
        $gaji_pokok = $request->gaji_pokok;
        $jumlah_lembur = $request->jumlah_lembur;
        $tunjangan_anak = $request->tunjangan_anak;
        $jumlah_tidak_hadir = $request->jumlah_tidak_hadir;

        $lembur = $jumlah_lembur * (0.01 * $gaji_pokok);
        $tunjangan = ($tunjangan_anak == 'ada') ? (0.1 * $gaji_pokok) : 0;
        $potongan_tidak_hadir = $jumlah_tidak_hadir * (0.02 * $gaji_pokok);
        $total_gaji = $gaji_pokok + $lembur + $tunjangan - $potongan_tidak_hadir;

    
        return view('hasil_gaji', compact('id', 'nama', 'golongan', 'gaji_pokok', 'jumlah_lembur', 'tunjangan_anak', 'jumlah_tidak_hadir', 'total_gaji'));
    }
}



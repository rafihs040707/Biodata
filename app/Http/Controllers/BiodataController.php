<?php

namespace App\Http\Controllers;

use App\Models\Biodata;
use Illuminate\Http\Request;


class BiodataController extends Controller
{
    public function menampilkanBiodata()
    {
        $sekolah = Biodata::$sekolah;
        $nama = Biodata::$nama;
        $kelas = Biodata::$kelas;
        $ttgl = Biodata::$ttgl;
        $hobi = Biodata::$hobi;
        return view('Biodata', compact('sekolah','nama', 'kelas', 'ttgl', 'hobi'));
    }

}

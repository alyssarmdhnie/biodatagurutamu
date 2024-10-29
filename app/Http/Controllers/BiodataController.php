<?php

namespace App\Http\Controllers;
use App\Models\Biodata;
use Illuminate\Http\Request;

class BiodataController extends Controller
{
    public function menampilkanBiodata() 
    {
        $Nama = Biodata::$Nama;
        $Kelas = Biodata::$Kelas;
        $Sekolah = Biodata::$Sekolah;
        $Alamat = Biodata::$Alamat;
        $Hobi = Biodata::$Hobi;

        return view('biodata', compact('Nama','Kelas','Sekolah','Alamat','Hobi'));
    }
}

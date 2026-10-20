<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function profil()
    {
        //Variable
        $namaSiswa = "Arkhadia P. Y.";
        $namaSekolah = "Dinamika Pembanguna 2 Jakarta";
        $jurusan = "Rekayasa Perangkat Lunak";
        $nis = 250256;
        $kelas = "XI RPL 1";
        $mapel = "Praktek RPL";

        return view('pages.profil', [ //mengirim variable
            'namaSiswa' => $namaSiswa,
            'namaSekolah' => $namaSekolah,
            'jurusan' => $jurusan,
            'nis' => $nis,
            'kelas' => $kelas,
            'mapel' => $mapel
        ]);
    }
}

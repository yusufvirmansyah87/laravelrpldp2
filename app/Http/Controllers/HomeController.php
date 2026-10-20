<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        //Variable
        $judul1 = "Website Pratikum Laravel";
        $judul2 = "Rekrayasa Perangkat Lunak";

        return view('pages.home', [ //mengirim variable
            'judul1' => $judul1,
            'judul2' => $judul2
        ]);
    }
}
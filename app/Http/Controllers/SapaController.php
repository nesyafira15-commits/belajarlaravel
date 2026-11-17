<?php

namespace App\Http\Controllers;

class SapaController extends Controller
{
    public function index()
    {
        $nama = 'Shasha';

        return view('pages.sapa', [
            'nama' => $nama,
        ]);
    }
}

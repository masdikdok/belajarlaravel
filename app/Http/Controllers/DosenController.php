<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DosenController extends Controller
{
    public function index(){
        return view('dosen/biodata', [
            'nama' => 'Dicki Andrea',
            'matkul' => [
                'Algoritma dan Pemrograman',
                'Kalkulus',
                'Pemrograman Web'
            ]
        ]);
    }

}

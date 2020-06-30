<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class siswa extends Controller
{
    //
    public function index() {
        $tabel = DB::table('siswa')->get();
        return view('siswa', ['siswa' => $tabel]);
    }
}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;

class MahasiswaController extends Controller
{
    //
    function show(){
        $data = Mahasiswa::all();
        return view('mahasiswa',['mahasiswas'=>$data]);
    }
}

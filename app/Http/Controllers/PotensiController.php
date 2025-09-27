<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PotensiController extends Controller
{
    public function index()
    {
        return view('potensi'); // ini akan memanggil file resources/views/potensi.blade.php
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Potensi;
use App\Models\SaranaPrasarana;
use Illuminate\Http\Request;

class PotensiController extends Controller
{
    public function index()
    {
        // Data dari potensi
        $potensis = Potensi::all();

        // Data dari sarana_prasarana
        $saranas = SaranaPrasarana::all();

        return view('home', compact('potensis', 'saranas'));
    }
}

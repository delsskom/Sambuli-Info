<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SaranaPrasarana;

class SaranaPrasaranaController extends Controller
{
    public function index()
    {
        // Ambil semua data dari tabel sarana_prasarana
        $saranas = SaranaPrasarana::all();

        // Kirim ke view
        return view('sarana.index', compact('saranas'));
    }
}

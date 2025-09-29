<?php

namespace App\Http\Controllers;

use App\Models\Potensi;
use App\Models\Rt;
use Illuminate\Http\Request;

class PotensiController extends Controller
{
    public function index()
    {
        $rts = Rt::with('potensi')->get();
        return view('potensi.index', compact('rts'));
    }

    public function show($id)
    {
        $rt = Rt::with('potensi')->findOrFail($id);
        return view('potensi.show', compact('rt'));
    }

    public function create()
    {
        $rts = Rt::all(); // supaya bisa pilih RT
        return view('potensi.create', compact('rts'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_potensi' => 'required|string|max:255',
            'rt_id' => 'required|exists:rt,id',
        ]);

        Potensi::create([
            'nama_potensi' => $request->nama_potensi,
            'rt_id' => $request->rt_id,
        ]);

        return redirect()->route('potensi.index')->with('success', 'Potensi berhasil ditambahkan!');
    }
}

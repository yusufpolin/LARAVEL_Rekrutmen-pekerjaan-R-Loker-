<?php

namespace App\Http\Controllers;

use App\Models\Lowongan;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class LowonganController extends Controller
{
    public function cetak()
    {
        $lowongans = Lowongan::all();
        $pdf = Pdf::loadview('lowongan.transaction-cetak', compact('lowongans'));
        return $pdf->download('laporan-lowongans.pdf');
    }

    public function index()
    {
        $lowongans = Lowongan::all();
        return view('lowongan.index', compact('lowongans'));
    }

    public function create()
    {
        return view('lowongan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_pekerjaan' => 'required',
            'deskripsi' => 'required',
        ]);

        Lowongan::create($request->all());
        return redirect()->route('lowongan.index')->with('success', 'Lowongan berhasil ditambahkan');
    }

    public function show(Lowongan $lowongan)
    {
        return view('lowongan.show', compact('lowongan'));
    }

    public function edit(Lowongan $lowongan)
    {
        return view('lowongan.edit', compact('lowongan'));
    }

    public function update(Request $request, Lowongan $lowongan)
    {
        $request->validate([
            'nama_pekerjaan' => 'required',
            'deskripsi' => 'required',
        ]);

        $lowongan->update($request->all());
        return redirect()->route('lowongan.index')->with('success', 'Lowongan berhasil diperbarui');
    }

    public function destroy(Lowongan $lowongan)
    {
        $lowongan->delete();
        return redirect()->route('lowongan.index')->with('success', 'Lowongan berhasil dihapus');
    }
}


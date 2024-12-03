<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Presensi;
use App\Models\Murid;

class PresensiController extends Controller
{
    public function index()
    {
        $presensis = Presensi::with('murid')->get();
        return view('presensi.index', compact('presensis'));
    }

    public function create()
    {
        $murid = Murid::all();
        return view('presensi.create', compact('murid'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'murid_id' => 'required',
            'jadwal_id' => 'required',
            'tanggal' => 'required|date',
            'status' => 'required'
        ]);

        Presensi::create($request->all());
        return redirect()->route('presensi.index')->with('success', 'Presensi recorded successfully.');
    }

    public function edit(Presensi $presensi)
    {
        $murid = Murid::all();
        return view('presensi.edit', compact('presensi', 'murid'));
    }

    public function update(Request $request, Presensi $presensi)
    {
        $request->validate([
            'status' => 'required'
        ]);

        $presensi->update($request->all());
        return redirect()->route('presensi.index')->with('success', 'Presensi updated successfully.');
    }

    public function destroy(Presensi $presensi)
    {
        $presensi->delete();
        return redirect()->route('presensi.index')->with('success', 'Presensi deleted successfully.');
    }
}

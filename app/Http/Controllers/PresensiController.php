<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Presensi;
use App\Models\Murid;
use App\Models\Jadwal;
use App\Models\MataPelajaran;

class PresensiController extends Controller
{
    public function index()
    {
        $jadwals = Jadwal::with('pelajaran', 'guru', 'kelas')->get();

        return view('presensi.index', compact('jadwals'));
    }

    public function show($jadwalId)
    {
        $presensis = Presensi::with('murid')
            ->where('jadwal_id', $jadwalId)
            ->get();

        $jadwal = Jadwal::with('pelajaran', 'guru', 'kelas')->findOrFail($jadwalId);

        return view('presensi.show', compact('presensis', 'jadwal'));
    }

    public function create()
    {
        $jadwals = Jadwal::with(['kelas', 'pelajaran'])->get();
        $murids = Murid::all();
        $mataPelajarans = MataPelajaran::all();

        return view('presensi.create', compact('jadwals', 'murids', 'mataPelajarans'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'murid_id' => 'required',
            'jadwal_id' => 'required',
            'mata_pelajaran_id' => 'required',
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

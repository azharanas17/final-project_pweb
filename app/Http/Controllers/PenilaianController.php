<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Penilaian;
use App\Models\Murid;
use App\Models\MataPelajaran;
use App\Models\Guru;
use Illuminate\Support\Facades\DB;

class PenilaianController extends Controller
{
    public function index()
    {
        $penilaians = Penilaian::with(['murid', 'pelajaran', 'guru'])->paginate(10);
        return view('penilaian.index', compact('penilaians'));
    }

    public function create()
    {
        $murids = Murid::all();
        $mataPelajarans = MataPelajaran::all();
        $gurus = Guru::all();
        return view('penilaian.create', compact('murids', 'mataPelajarans', 'gurus'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'murid_id' => 'required',
            'mata_pelajaran_id' => 'required',
            'guru_id' => 'required',
            'nilai' => 'required|numeric|min:0|max:100',
            'deskripsi' => 'required',
            'tanggal' => 'required|date'
        ]);

        Penilaian::create($request->all());
        return redirect()->route('penilaian.index')->with('success', 'Penilaian recorded successfully.');
    }

    public function edit(Penilaian $penilaian)
    {
        $murid = Murid::all();
        return view('penilaian.edit', compact('penilaian', 'murid'));
    }

    public function update(Request $request, Penilaian $penilaian)
    {
        $request->validate([
            'murid_id' => 'required',
            'mata_pelajaran_id' => 'required',
            'guru_id' => 'required',
            'nilai' => 'required|numeric|min:0|max:100',
            'deskripsi' => 'required',
            'tanggal' => 'required|date'
        ]);

        $penilaian->update($request->all());
        return redirect()->route('penilaian.index')->with('success', 'Penilaian updated successfully.');
    }

    public function destroy(Penilaian $penilaian)
    {
        $penilaian->delete();
        return redirect()->route('penilaian.index')->with('success', 'Penilaian deleted successfully.');
    }
}

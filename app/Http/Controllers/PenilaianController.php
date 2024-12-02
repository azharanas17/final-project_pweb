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
        // $penilaians = DB::table('penilaian')
        // ->join('murid', 'penilaian.murid_id', '=', 'murid.id')
        // ->join('mata_pelajaran', 'penilaian.mata_pelajaran_id', '=', 'mata_pelajaran.id')
        // ->join('guru', 'penilaian.guru_id', '=', 'guru.id')
        // ->select('penilaian.*', 'murid.nama as murid_nama', 'mata_pelajaran.nama as mata_pelajaran_nama', 'guru.nama as guru_nama')
        // ->get();

        $penilaians = Penilaian::all();
        return view('penilaian.index', compact('penilaians'));
    }

    public function create()
    {
        $murid = Murid::all();
        return view('penilaian.create', compact('murid'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'murid_id' => 'required',
            'jadwal_id' => 'required',
            'nilai' => 'required|numeric|min:0|max:100'
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
            'jadwal_id' => 'required',
            'nilai' => 'required|numeric|min:0|max:100'
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

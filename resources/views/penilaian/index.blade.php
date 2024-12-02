@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="text-2xl font-semibold mb-4">Daftar Penilaian</h1>

        @if(session('success'))
            <div class="alert alert-success mb-4">
                {{ session('success') }}
            </div>
        @endif

        <table class="table-auto w-full border-collapse">
            <thead>
                <tr>
                    <th class="border-b px-4 py-2">Murid</th>
                    <th class="border-b px-4 py-2">Mata Pelajaran</th>
                    <th class="border-b px-4 py-2">Guru</th>
                    <th class="border-b px-4 py-2">Nilai</th>
                    <th class="border-b px-4 py-2">Deskripsi</th>
                    <th class="border-b px-4 py-2">Tanggal</th>
                    <th class="border-b px-4 py-2">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($penilaians as $penilaian)
                    <tr>
                        <td class="border-b px-4 py-2">{{ $penilaian->murid->nama }}</td>
                        <td class="border-b px-4 py-2">Mata Pelajaran</td>
                        {{-- <td class="border-b px-4 py-2">{{ $penilaian->pelajaran->nama }}</td> --}}
                        <td class="border-b px-4 py-2">{{ $penilaian->guru->nama }}</td>
                        <td class="border-b px-4 py-2">{{ $penilaian->nilai }}</td>
                        <td class="border-b px-4 py-2">{{ $penilaian->deskripsi }}</td>
                        <td class="border-b px-4 py-2">{{ $penilaian->tanggal }}</td>
                        <td class="border-b px-4 py-2">
                            <!-- Aksi seperti edit atau delete bisa ditambahkan di sini -->
                            <a href="#" class="text-blue-500">Edit</a> |
                            <a href="#" class="text-red-500">Hapus</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="mt-4">
            <a href="{{ route('penilaian.create') }}" class="px-4 py-2 bg-blue-500 text-white rounded">Tambah Penilaian</a>
        </div>
    </div>
@endsection

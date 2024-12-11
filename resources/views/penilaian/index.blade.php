<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Daftar Penilaian') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="mb-4 flex justify-between items-center">
                <h3 class="text-lg font-medium text-gray-900 dark:text-gray-200">Daftar Penilaian</h3>
                <a href="{{ route('penilaian.create') }}" 
                   class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    Tambah Penilaian
                </a>
            </div>
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white dark:bg-gray-800">
                    {{-- <div class="mb-6">
                        <!-- Tombol Tambah Penilaian -->
                        <a href="{{ route('penilaian.create') }}" 
                           class="bg-blue-500 text-white font-semibold py-2 px-4 rounded hover:bg-blue-600">
                            Tambah Penilaian
                        </a>
                    </div> --}}

                    <!-- Tabel Penilaian -->
                    <table class="min-w-full table-auto border-collapse border border-gray-300 dark:border-gray-700">
                        <thead>
                            <tr>
                                <th class="border border-gray-300 text-gray-500 dark:text-gray-300 px-4 py-2">Nama Murid</th>
                                <th class="border border-gray-300 text-gray-500 dark:text-gray-300 px-4 py-2">Mata Pelajaran</th>
                                <th class="border border-gray-300 text-gray-500 dark:text-gray-300 px-4 py-2">Nilai</th>
                                <th class="border border-gray-300 text-gray-500 dark:text-gray-300 px-4 py-2">Tanggal</th>
                                <th class="border border-gray-300 text-gray-500 dark:text-gray-300 px-4 py-2">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($penilaians as $penilaian)
                            <tr>
                                <td class="border border-gray-300 text-gray-500 dark:text-gray-300 px-4 py-2">{{ $penilaian->murid->nama }}</td>
                                <td class="border border-gray-300 text-gray-500 dark:text-gray-300 px-4 py-2">{{ $penilaian->pelajaran->nama }}</td>
                                <td class="border border-gray-300 text-gray-500 dark:text-gray-300 px-4 py-2">{{ $penilaian->nilai }}</td>
                                <td class="border border-gray-300 text-gray-500 dark:text-gray-300 px-4 py-2">{{ $penilaian->tanggal }}</td>
                                <td class="border border-gray-300 text-gray-500 dark:text-gray-300 px-4 py-2 text-center">
                                    <!-- Tombol Edit -->
                                    <a href="{{ route('penilaian.edit', $penilaian->id) }}" 
                                       class="text-gray-500 dark:text-gray-300 font-semibold hover:underline">
                                        Edit
                                    </a>

                                    <!-- Tombol Delete -->
                                    <form action="{{ route('penilaian.destroy', $penilaian->id) }}" method="POST" 
                                          class="inline-block" onsubmit="return confirm('Apakah Anda yakin ingin menghapus penilaian ini?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" 
                                                class="text-red-500 font-semibold hover:underline">
                                            Hapus
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

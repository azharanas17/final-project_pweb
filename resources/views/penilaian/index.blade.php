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
            
            <div class="mb-4 flex justify-between items-center">
                <h3 class="text-lg font-medium text-gray-900 dark:text-gray-200">Daftar Penilaian Berdasarkan Mata Pelajaran</h3>
            </div>
            <!-- Tabel Berdasarkan Mata Pelajaran -->
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg mb-6">
                <div class="p-6 bg-white dark:bg-gray-800">
                    <table class="min-w-full table-auto border-collapse border border-gray-300 dark:border-gray-700">
                        <thead class="bg-gray-50 dark:bg-gray-700">
                            <tr>
                                <th class="border border-gray-300 text-gray-500 dark:text-gray-300 px-4 py-2">Mata Pelajaran</th>
                                <th class="border border-gray-300 text-gray-500 dark:text-gray-300 px-4 py-2">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white dark:bg-gray-800 divide-y divide-gray-200 dark:divide-gray-700">
                            @foreach ($penilaiansByPelajaran as $mataPelajaranId => $penilaians)
                            <tr>
                                <td class="border border-gray-300 text-gray-500 dark:text-gray-300 px-4 py-2">{{ $penilaians->first()->pelajaran->nama }}</td>
                                <td class="border border-gray-300 text-gray-500 dark:text-gray-300 px-4 py-2 text-center">
                                    <a href="{{ route('penilaian.show', ['mata_pelajaran_id' => $penilaians->first()->pelajaran->id]) }}" 
                                       class="inline-block bg-blue-500 text-white font-semibold py-1 px-3 rounded hover:underline">
                                       Lihat Penilaian
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="mb-4 flex justify-between items-center">
                <h3 class="text-lg font-medium text-gray-900 dark:text-gray-200">Daftar Penilaian Berdasarkan Murid</h3>
            </div>
            <!-- Tabel Berdasarkan Murid -->
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white dark:bg-gray-800">
                    <table class="min-w-full table-auto border-collapse border border-gray-300 dark:border-gray-700">
                        <thead class="bg-gray-50 dark:bg-gray-700">
                            <tr>
                                <th class="border border-gray-300 text-gray-500 dark:text-gray-300 px-4 py-2">Nama Murid</th>
                                <th class="border border-gray-300 text-gray-500 dark:text-gray-300 px-4 py-2">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white dark:bg-gray-800 divide-y divide-gray-200 dark:divide-gray-700">
                            @foreach ($penilaiansByMurid as $muridId => $penilaians)
                            <tr>
                                <td class="border border-gray-300 text-gray-500 dark:text-gray-300 px-4 py-2">{{ $penilaians->first()->murid->nama }}</td>
                                <td class="border border-gray-300 text-gray-500 dark:text-gray-300 px-4 py-2 text-center">
                                    <a href="{{ route('penilaian.show', ['murid_id' => $penilaians->first()->murid->id]) }}" 
                                       class="inline-block bg-blue-500 text-white font-semibold py-1 px-3 rounded hover:underline">
                                       Lihat Penilaian
                                    </a>
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

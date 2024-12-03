<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Daftar Penilaian') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    @if(session('success'))
                        <div class="mb-4 p-4 bg-green-100 text-green-800 rounded">
                            {{ session('success') }}
                        </div>
                    @endif
                    <div class="flex justify-between items-center mb-4">
                        <h3 class="text-xl font-semibold">Penilaian Murid</h3>
                        <a href="{{ route('penilaian.create') }}" class="px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600">Tambah Penilaian</a>
                    </div>
                    

                    <table class="min-w-full bg-white border border-gray-200 dark:bg-gray-800 dark:border-gray-700 rounded-lg shadow-lg">
                        <thead class="bg-gray-50 dark:bg-gray-700 text-gray-600 dark:text-gray-200">
                            <tr>
                                <th class="px-6 py-3 text-left font-semibold">Nama Murid</th>
                                <th class="px-6 py-3 text-left font-semibold">Mata Pelajaran</th>
                                <th class="px-6 py-3 text-left font-semibold">Nama Guru</th>
                                <th class="px-6 py-3 text-left font-semibold">Nilai</th>
                                <th class="px-6 py-3 text-left font-semibold">Deskripsi</th>
                                <th class="px-6 py-3 text-left font-semibold">Tanggal</th>
                            </tr>
                        </thead>
                        <tbody class="text-sm text-gray-800 dark:text-gray-100">
                            @foreach ($penilaians as $penilaian)
                                <tr class="hover:bg-gray-100 dark:hover:bg-gray-700">
                                    <td class="px-6 py-4">{{ $penilaian->murid->nama ?? 'Murid Tidak Ditemukan' }}</td>
                                    <td class="px-6 py-4">{{ $penilaian->pelajaran->nama ?? 'Mata Pelajaran Tidak Ditemukan' }}</td>
                                    <td class="px-6 py-4">{{ $penilaian->guru->nama ?? 'Guru Tidak Ditemukan' }}</td>
                                    <td class="px-6 py-4">{{ $penilaian->nilai }}</td>
                                    <td class="px-6 py-4">{{ $penilaian->deskripsi ?? '-' }}</td>
                                    <td class="px-6 py-4">{{ $penilaian->tanggal }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- Pagination -->
                <div class="mt-4">
                    {{ $penilaians->links() }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

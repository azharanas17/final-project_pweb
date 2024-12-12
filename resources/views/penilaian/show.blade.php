<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Daftar Penilaian') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @if (request()->has('mata_pelajaran_id'))
                <h3 class="text-lg font-medium text-gray-900 dark:text-gray-200">Penilaian untuk Mata Pelajaran: 
                    {{ $penilaians->first()->pelajaran->nama }}
                </h3>
            @elseif (request()->has('murid_id'))
                <h3 class="text-lg font-medium text-gray-900 dark:text-gray-200">Penilaian untuk Murid: 
                    {{ $penilaians->first()->murid->nama }}
                </h3>
            @endif

            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg mt-6">
                <div class="p-6 bg-white dark:bg-gray-800">
                    <table class="min-w-full table-auto border-collapse border border-gray-300 dark:border-gray-700">
                        <thead class="bg-gray-50 dark:bg-gray-700">
                            <tr>
                                <th class="border border-gray-300 text-gray-500 dark:text-gray-300 px-4 py-2">Nama</th>
                                <th class="border border-gray-300 text-gray-500 dark:text-gray-300 px-4 py-2">Mata Pelajaran</th>
                                <th class="border border-gray-300 text-gray-500 dark:text-gray-300 px-4 py-2">Nilai</th>
                                <th class="border border-gray-300 text-gray-500 dark:text-gray-300 px-4 py-2">Tanggal</th>
                                <th class="border border-gray-300 text-gray-500 dark:text-gray-300 px-4 py-2">Action</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white dark:bg-gray-800 divide-y divide-gray-200 dark:divide-gray-700">
                            @foreach ($penilaians as $penilaian)
                                <tr>
                                    <td class="border border-gray-300 text-gray-500 dark:text-gray-300 px-4 py-2">
                                        {{ $penilaian->murid->nama }}
                                    </td>
                                    <td class="border border-gray-300 text-gray-500 dark:text-gray-300 px-4 py-2">
                                        {{ $penilaian->pelajaran->nama }}
                                    </td>
                                    <td class="border border-gray-300 text-gray-500 dark:text-gray-300 px-4 py-2">
                                        {{ $penilaian->nilai }}
                                    </td>
                                    <td class="border border-gray-300 text-gray-500 dark:text-gray-300 px-4 py-2">
                                        {{ $penilaian->tanggal }}
                                    </td>
                                    <td class="border border-gray-300 px-4 py-2 text-center">
                                        <a href="{{ route('penilaian.edit', $penilaian->id) }}" 
                                            class="inline-block bg-yellow-500 text-white font-semibold py-1 px-3 rounded hover:underline">
                                            Edit
                                        </a>
                                    
                                        <form action="{{ route('penilaian.destroy', $penilaian->id) }}" method="POST" 
                                              class="inline-block" onsubmit="return confirm('Apakah Anda yakin ingin menghapus penilaian ini?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" 
                                                    class="inline-block bg-red-500 text-white font-semibold py-1 px-3 rounded hover:underline">
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

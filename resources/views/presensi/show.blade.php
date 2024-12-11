<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Presensi Murid - ') . $jadwal->pelajaran->nama }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <table class="min-w-full border-collapse border border-gray-200">
                        <thead>
                            <tr class="bg-gray-50 dark:bg-gray-700">
                                <th class="border border-gray-300 px-4 py-2">Nama Murid</th>
                                <th class="border border-gray-300 px-4 py-2">Status</th>
                                <th class="border border-gray-300 px-4 py-2">Tanggal</th>
                                <th class="border border-gray-300 px-4 py-2">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($presensis as $presensi)
                            <tr>
                                <td class="border border-gray-300 px-4 py-2">{{ $presensi->murid->nama }}</td>
                                <td class="border border-gray-300 px-4 py-2">{{ $presensi->status }}</td>
                                <td class="border border-gray-300 px-4 py-2">{{ $presensi->tanggal }}</td>
                                <td class="border border-gray-300 px-4 py-2 text-center">
                                    <!-- Tombol Edit -->
                                    <a href="{{ route('presensi.edit', $presensi->id) }}" 
                                        class="inline-block bg-yellow-500 text-white font-semibold py-1 px-3 rounded hover:underline">
                                        Edit
                                    </a>
                                
                                    <!-- Tombol Delete -->
                                    <form action="{{ route('presensi.destroy', $presensi->id) }}" method="POST" 
                                          class="inline-block" onsubmit="return confirm('Apakah Anda yakin ingin menghapus presensi ini?')">
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

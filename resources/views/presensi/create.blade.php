<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Tambah Presensi') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white dark:bg-gray-800">
                    <form action="{{ route('presensi.store') }}" method="POST">
                        @csrf

                        <!-- Jadwal -->
                        <div class="mb-4">
                            <label for="jadwal_id" class="block text-sm font-medium text-gray-700 dark:text-gray-300">
                                Jadwal
                            </label>
                            <select name="jadwal_id" id="jadwal_id" required 
                                    class="mt-1 block w-full rounded-md border-gray-300 dark:bg-gray-700 dark:text-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                                <option value="" disabled selected>Pilih Jadwal</option>
                                @foreach ($jadwals as $jadwal)
                                    <option value="{{ $jadwal->id }}">
                                        {{ $jadwal->kelas->nama }} - {{ $jadwal->pelajaran->nama }} ({{ $jadwal->hari }} - {{ $jadwal->jam }})
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Mata Pelajaran -->
                        <div class="mb-4">
                            <label for="mata_pelajaran_id" class="block text-sm font-medium text-gray-700 dark:text-gray-300">
                                Mata Pelajaran
                            </label>
                            <select name="mata_pelajaran_id" id="mata_pelajaran_id" required 
                                    class="mt-1 block w-full rounded-md border-gray-300 dark:bg-gray-700 dark:text-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                                <option value="" disabled selected>Pilih Mata Pelajaran</option>
                                @foreach ($mataPelajarans as $mataPelajaran)
                                    <option value="{{ $mataPelajaran->id }}">
                                        {{ $mataPelajaran->nama }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Murid -->
                        <div class="mb-4">
                            <label for="murid_id" class="block text-sm font-medium text-gray-700 dark:text-gray-300">
                                Murid
                            </label>
                            <select name="murid_id" id="murid_id" required 
                                    class="mt-1 block w-full rounded-md border-gray-300 dark:bg-gray-700 dark:text-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                                <option value="" disabled selected>Pilih Murid</option>
                                @foreach ($murids as $murid)
                                    <option value="{{ $murid->id }}">
                                        {{ $murid->nama }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Tanggal -->
                        <div class="mb-4">
                            <label for="tanggal" class="block text-sm font-medium text-gray-700 dark:text-gray-300">
                                Tanggal Presensi
                            </label>
                            <input type="date" name="tanggal" id="tanggal" required 
                                   class="mt-1 block w-full rounded-md border-gray-300 dark:bg-gray-700 dark:text-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                        </div>

                        <!-- Status Kehadiran -->
                        <div class="mb-4">
                            <label for="status" class="block text-sm font-medium text-gray-700 dark:text-gray-300">
                                Status Kehadiran
                            </label>
                            <select name="status" id="status" required 
                                    class="mt-1 block w-full rounded-md border-gray-300 dark:bg-gray-700 dark:text-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                                <option value="" disabled selected>Pilih Status Kehadiran</option>
                                <option value="Hadir">Hadir</option>
                                <option value="Alpa">Alpa</option>
                                <option value="Sakit">Sakit</option>
                                <option value="Izin">Izin</option>
                            </select>
                        </div>

                        <!-- Tombol Submit -->
                        <div class="flex justify-end">
                            <button type="submit" 
                                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                Simpan
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Tambah Penilaian') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    @if ($errors->any())
                        <div class="mb-4 p-4 bg-red-100 text-red-800 rounded">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('penilaian.store') }}" method="POST">
                        @csrf

                        <!-- Pilih Murid -->
                        <div class="mb-4">
                            <label for="murid_id" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Murid</label>
                            <select name="murid_id" id="murid_id" class="block w-full mt-1 rounded-md border-gray-300 dark:border-gray-600 dark:bg-gray-700">
                                <option value="">-- Pilih Murid --</option>
                                @foreach($murids as $murid)
                                    <option value="{{ $murid->id }}">{{ $murid->nama }}</option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Pilih Mata Pelajaran -->
                        <div class="mb-4">
                            <label for="mata_pelajaran_id" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Mata Pelajaran</label>
                            <select name="mata_pelajaran_id" id="mata_pelajaran_id" class="block w-full mt-1 rounded-md border-gray-300 dark:border-gray-600 dark:bg-gray-700">
                                <option value="">-- Pilih Mata Pelajaran --</option>
                                @foreach($mataPelajarans as $mataPelajaran)
                                    <option value="{{ $mataPelajaran->id }}">{{ $mataPelajaran->nama }}</option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Pilih Guru -->
                        <div class="mb-4">
                            <label for="guru_id" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Guru</label>
                            <select name="guru_id" id="guru_id" class="block w-full mt-1 rounded-md border-gray-300 dark:border-gray-600 dark:bg-gray-700">
                                <option value="">-- Pilih Guru --</option>
                                @foreach($gurus as $guru)
                                    <option value="{{ $guru->id }}">{{ $guru->nama }}</option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Nilai -->
                        <div class="mb-4">
                            <label for="nilai" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Nilai</label>
                            <input type="number" name="nilai" id="nilai" class="block w-full mt-1 rounded-md border-gray-300 dark:border-gray-600 dark:bg-gray-700" value="{{ old('nilai') }}">
                        </div>

                        <!-- Deskripsi -->
                        <div class="mb-4">
                            <label for="deskripsi" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Deskripsi</label>
                            <textarea name="deskripsi" id="deskripsi" rows="4" class="block w-full mt-1 rounded-md border-gray-300 dark:border-gray-600 dark:bg-gray-700">{{ old('deskripsi') }}</textarea>
                        </div>

                        <!-- Tanggal -->
                        <div class="mb-4">
                            <label for="tanggal" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Tanggal</label>
                            <input type="date" name="tanggal" id="tanggal" class="block w-full mt-1 rounded-md border-gray-300 dark:border-gray-600 dark:bg-gray-700" value="{{ old('tanggal') }}">
                        </div>

                        <div class="flex justify-end">
                            <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">
                                Simpan
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

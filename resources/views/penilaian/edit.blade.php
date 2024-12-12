<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Edit Penilaian') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white dark:bg-gray-800">
                    <form action="{{ route('penilaian.update', $penilaian->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="space-y-4">
                            <div>
                                <label for="murid_id" class="block font-semibold text-gray-700">Nama Murid</label>
                                <input type="text" value="{{ $penilaian->murid->nama }}" 
                                       class="w-full px-4 py-2 mt-2 border border-gray-300 rounded-md bg-gray-200 text-gray-600" readonly>
                            </div>

                            <div>
                                <label for="mata_pelajaran_id" class="block font-semibold text-gray-700">Mata Pelajaran</label>
                                <input type="text" value="{{ $penilaian->pelajaran->nama }}" 
                                       class="w-full px-4 py-2 mt-2 border border-gray-300 rounded-md bg-gray-200 text-gray-600" readonly>
                            </div>

                            <div>
                                <label for="tanggal" class="block font-semibold text-gray-700">Tanggal</label>
                                <input type="text" value="{{ $penilaian->tanggal }}" 
                                       class="w-full px-4 py-2 mt-2 border border-gray-300 rounded-md bg-gray-200 text-gray-600" readonly>
                            </div>

                            <div>
                                <label for="nilai" class="block font-semibold text-gray-700">Nilai</label>
                                <input type="number" name="nilai" id="nilai" 
                                       value="{{ $penilaian->nilai }}" 
                                       class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500" required>
                            </div>

                            <div class="mt-6">
                                <button type="submit" 
                                        class="w-full bg-blue-500 text-white font-semibold py-2 px-4 rounded-md hover:bg-blue-600">
                                    Update Penilaian
                                </button>
                            </div>
                        </div>
                    </form>

                    <div class="mt-4">
                        <a href="{{ route('penilaian.index') }}" 
                           class="text-gray-600 hover:text-gray-800">
                            Kembali ke Daftar Penilaian
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

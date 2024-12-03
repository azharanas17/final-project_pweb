<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Edit Status Presensi') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form action="{{ route('presensi.update', $presensi->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <!-- Nama Murid -->
                            <div class="mb-4">
                                <label class="block text-sm font-semibold text-gray-700 dark:text-gray-200">{{ __('Nama Murid') }}</label>
                                <input type="text" value="{{ $presensi->murid->nama }}" class="w-full px-4 py-2 mt-2 border border-gray-300 rounded-md bg-gray-200 text-gray-600" readonly>
                            </div>

                            <!-- Tanggal Presensi -->
                            <div class="mb-4">
                                <label class="block text-sm font-semibold text-gray-700 dark:text-gray-200">{{ __('Tanggal Presensi') }}</label>
                                <input type="text" value="{{ $presensi->tanggal }}" class="w-full px-4 py-2 mt-2 border border-gray-300 rounded-md bg-gray-200 text-gray-600" readonly>
                            </div>

                            <!-- Status Presensi -->
                            <div class="mb-4">
                                <label for="status" class="block text-sm font-semibold text-gray-700 dark:text-gray-200">{{ __('Status Presensi') }}</label>
                                <select id="status" name="status" class="w-full px-4 py-2 mt-2 border border-gray-300 rounded-md focus:ring-indigo-500 focus:border-indigo-500 dark:bg-gray-800 dark:text-gray-100 dark:border-gray-700">
                                    <option value="hadir" {{ $presensi->status == 'hadir' ? 'selected' : '' }}>{{ __('Hadir') }}</option>
                                    <option value="alpa" {{ $presensi->status == 'alpa' ? 'selected' : '' }}>{{ __('Alpa') }}</option>
                                    <option value="sakit" {{ $presensi->status == 'sakit' ? 'selected' : '' }}>{{ __('Sakit') }}</option>
                                    <option value="izin" {{ $presensi->status == 'izin' ? 'selected' : '' }}>{{ __('Izin') }}</option>
                                </select>
                                @error('status')
                                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="mt-6 flex justify-end">
                            <a href="{{ route('presensi.index') }}" class="text-sm text-gray-500 hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-300 mr-4">{{ __('Batal') }}</a>
                            <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">{{ __('Simpan') }}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <p>{{ __("Selamat Datang di Sistem Manajemen Sekolah!") }}</p>
                </div>
            </div>

            <div class="mt-6 grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="bg-white dark:bg-gray-800 shadow-sm sm:rounded-lg">
                    <div class="p-6">
                        <h3 class="text-lg font-semibold text-gray-800 dark:text-gray-200">{{ __('Kehadiran') }}</h3>
                        <p class="text-gray-600 dark:text-gray-400">{{ __('Manajemen Presensi Murid.') }}</p>
                        <a href="{{ route('presensi.index') }}" class="mt-3 inline-block bg-blue-500 text-white px-4 py-2 rounded">
                            {{ __('Lihat Presensi') }}
                        </a>
                    </div>
                </div>

                <div class="bg-white dark:bg-gray-800 shadow-sm sm:rounded-lg">
                    <div class="p-6">
                        <h3 class="text-lg font-semibold text-gray-800 dark:text-gray-200">{{ __('Evaluasi') }}</h3>
                        <p class="text-gray-600 dark:text-gray-400">{{ __('Manajemen Penilaian Murid.') }}</p>
                        <a href="{{ route('penilaian.index') }}" class="mt-3 inline-block bg-green-500 text-white px-4 py-2 rounded">
                            {{ __('Lihat Penilaian') }}
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

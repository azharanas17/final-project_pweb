<x-app-layout>
    <x-slot name="header">
        <h2 class="font-bold text-2xl text-white leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- Card Selamat Datang -->
            <div class="bg-gradient-to-r from-purple-500 to-blue-500 overflow-hidden shadow-lg sm:rounded-lg">
                <div class="p-6 text-white">
                    <p class="text-lg font-semibold">{{ __("Selamat Datang di Sistem Manajemen Sekolah!") }}</p>
                    <p class="mt-2 text-sm">{{ __("Kelola semua aspek sekolah Anda dengan mudah.") }}</p>
                </div>
            </div>

            <!-- Menu Utama -->
            <div class="mt-6 grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Kehadiran -->
                <div class="bg-white dark:bg-gray-800 shadow-lg sm:rounded-lg hover:shadow-xl transition transform hover:-translate-y-1">
                    <div class="p-6">
                        <div class="flex items-center space-x-4">
                            <div class="flex items-center justify-center h-12 w-12 rounded-full bg-blue-100 text-blue-600">
                                <i class="fas fa-user-check fa-lg"></i>
                            </div>
                            <h3 class="text-lg font-semibold text-gray-800 dark:text-gray-200">{{ __('Kehadiran') }}</h3>
                        </div>
                        <p class="mt-2 text-gray-600 dark:text-gray-400">
                            {{ __('Manajemen Presensi Murid.') }}
                        </p>
                        <a href="{{ route('presensi.index') }}" class="mt-4 inline-block bg-blue-500 text-white px-4 py-2 rounded">
                            {{ __('Lihat Presensi') }}
                        </a>
                    </div>
                </div>

                <!-- Evaluasi -->
                <div class="bg-white dark:bg-gray-800 shadow-lg sm:rounded-lg hover:shadow-xl transition transform hover:-translate-y-1">
                    <div class="p-6">
                        <div class="flex items-center space-x-4">
                            <div class="flex items-center justify-center h-12 w-12 rounded-full bg-green-100 text-green-600">
                                <i class="fas fa-star fa-lg"></i>
                            </div>
                            <h3 class="text-lg font-semibold text-gray-800 dark:text-gray-200">{{ __('Evaluasi') }}</h3>
                        </div>
                        <p class="mt-2 text-gray-600 dark:text-gray-400">
                            {{ __('Manajemen Penilaian Murid.') }}
                        </p>
                        <a href="{{ route('penilaian.index') }}" class="mt-4 inline-block bg-green-500 text-white px-4 py-2 rounded">
                            {{ __('Lihat Penilaian') }}
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

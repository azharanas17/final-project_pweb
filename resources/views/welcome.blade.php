<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Sekolah Manfaati</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
</head>
<body class="bg-gradient-to-r from-blue-50 via-purple-50 to-pink-50">
    <header class="bg-gradient-to-r from-purple-500 to-blue-500 shadow-lg">
        <div class="container mx-auto flex items-center justify-between py-4 px-6 text-white">
            <h1 class="text-2xl font-bold"><i class="fas fa-school"></i> Sekolah Manfaati</h1>
            @if (Route::has('login'))
                <nav class="flex items-center space-x-4">
                    @auth
                        <a
                            href="{{ url('/dashboard') }}"
                            class="rounded-full bg-white px-4 py-2 text-purple-600 shadow hover:bg-purple-100 focus:outline-none"
                        >
                            Dashboard
                        </a>
                    @else
                        <a
                            href="{{ route('login') }}"
                            class="rounded-full bg-white px-4 py-2 text-purple-600 shadow hover:bg-purple-100 focus:outline-none"
                        >
                            Log in
                        </a>

                        @if (Route::has('register'))
                            <a
                                href="{{ route('register') }}"
                                class="rounded-full bg-white px-4 py-2 text-purple-600 shadow hover:bg-purple-100 focus:outline-none"
                            >
                                Register
                            </a>
                        @endif
                    @endauth
                </nav>
            @endif
        </div>
    </header>

    <main class="container mx-auto mt-12 px-6">
        <div class="text-center">
            <h2 class="text-4xl font-bold text-purple-700">Selamat Datang di Website Sekolah Manfaati</h2>
            <p class="mt-4 text-gray-700">
                Pendidikan adalah kunci masa depan. Kami berkomitmen memberikan yang terbaik!
            </p>
        </div>

        <section class="mt-12 grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-3">
            <div class="rounded-lg bg-white p-6 shadow-lg hover:shadow-xl transition transform hover:-translate-y-1">
                <div class="flex items-center justify-center h-16 w-16 mx-auto rounded-full bg-purple-100 text-purple-600">
                    <i class="fas fa-laptop-code fa-2x"></i>
                </div>
                <h3 class="mt-6 text-xl font-semibold text-purple-700 text-center">Fasilitas Modern</h3>
                <p class="mt-4 text-gray-600 text-center">
                    Dilengkapi dengan teknologi terkini untuk mendukung pembelajaran efektif.
                </p>
            </div>
            <div class="rounded-lg bg-white p-6 shadow-lg hover:shadow-xl transition transform hover:-translate-y-1">
                <div class="flex items-center justify-center h-16 w-16 mx-auto rounded-full bg-blue-100 text-blue-600">
                    <i class="fas fa-chalkboard-teacher fa-2x"></i>
                </div>
                <h3 class="mt-6 text-xl font-semibold text-blue-700 text-center">Guru Berkualitas</h3>
                <p class="mt-4 text-gray-600 text-center">
                    Guru profesional dengan pengalaman tinggi di bidangnya.
                </p>
            </div>
            <div class="rounded-lg bg-white p-6 shadow-lg hover:shadow-xl transition transform hover:-translate-y-1">
                <div class="flex items-center justify-center h-16 w-16 mx-auto rounded-full bg-pink-100 text-pink-600">
                    <i class="fas fa-tree fa-2x"></i>
                </div>
                <h3 class="mt-6 text-xl font-semibold text-pink-700 text-center">Lingkungan Nyaman</h3>
                <p class="mt-4 text-gray-600 text-center">
                    Lingkungan hijau dan nyaman untuk mendukung perkembangan siswa.
                </p>
            </div>
        </section>

        <section class="mt-12 text-center">
            <h2 class="text-3xl font-bold text-purple-700">Tentang Kami</h2>
            <p class="mt-4 text-gray-700 max-w-4xl mx-auto">
                Sekolah Manfaati berdiri sejak tahun 1990 dengan visi menjadi lembaga pendidikan terbaik di Indonesia.
                Kami memiliki komitmen untuk memberikan pendidikan berkualitas tinggi dengan memanfaatkan teknologi modern
                dan kurikulum yang adaptif terhadap kebutuhan zaman.
            </p>
        </section>

        <section class="mt-12">
            <h2 class="text-3xl font-bold text-purple-700 text-center">Berita dan Acara</h2>
            <div class="mt-8 grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-3">
                <div class="rounded-lg bg-white p-6 shadow-lg hover:shadow-xl transition">
                    <h3 class="text-xl font-semibold text-purple-700">Hari Ibu</h3>
                    <p class="mt-4 text-gray-600">
                        Perayaan Hari Ibu akan diadakan pada 22 Desember 2024 dengan tema "Ibu, Sekolah Pertama bagi anaknya".
                    </p>
                </div>
                <div class="rounded-lg bg-white p-6 shadow-lg hover:shadow-xl transition">
                    <h3 class="text-xl font-semibold text-purple-700">Lomba Sains Nasional</h3>
                    <p class="mt-4 text-gray-600">
                        Siswa kami berhasil meraih medali emas di ajang Lomba Sains Nasional 2024.
                    </p>
                </div>
                <div class="rounded-lg bg-white p-6 shadow-lg hover:shadow-xl transition">
                    <h3 class="text-xl font-semibold text-purple-700">Penerimaan Siswa Baru</h3>
                    <p class="mt-4 text-gray-600">
                        Pendaftaran siswa baru untuk tahun ajaran 2024/2025 telah dibuka. Daftarkan sekarang!
                    </p>
                </div>
            </div>
        </section>

        <section class="mt-12 bg-white p-8 rounded-lg shadow-lg">
            <h2 class="text-3xl font-bold text-purple-700 text-center">Hubungi Kami</h2>
            <p class="mt-4 text-gray-700 text-center">
                Untuk informasi lebih lanjut, hubungi kami melalui email atau telepon.
            </p>
            <div class="mt-6 flex flex-col md:flex-row items-center justify-center gap-6">
                <div class="flex items-center gap-4">
                    <i class="fas fa-envelope text-purple-700 text-2xl"></i>
                    <span>info@manfaati.sch.id</span>
                </div>
                <div class="flex items-center gap-4">
                    <i class="fas fa-phone text-purple-700 text-2xl"></i>
                    <span>+62 812 3456 7890</span>
                </div>
            </div>
        </section>
    </main>

    <footer class="bg-gradient-to-r from-purple-500 to-blue-500 mt-12 py-6 text-white">
        <div class="container mx-auto text-center">
            &copy; {{ date('Y') }} Sekolah Manfaati. All rights reserved.
        </div>
    </footer>
</body>
</html>

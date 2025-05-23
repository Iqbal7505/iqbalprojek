<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Volunteer Pendidikan</title>
    <!-- Load Tailwind CSS dari CDN (untuk demo) -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 font-sans">
    <!-- Navbar -->
    <nav class="bg-white shadow-md">
        <div class="max-w-6xl mx-auto px-4 py-3 flex justify-between items-center">
            <a href="/" class="text-xl font-bold text-blue-600">EduVolunteer</a>
            <div class="hidden md:flex space-x-6">
                <a href="/" class="hover:text-blue-500">Beranda</a>
                <a href="/volunteer" class="hover:text-blue-500">Daftar Relawan</a>
                <a href="/calendar" class="hover:text-blue-500">Kalender</a>
            </div>
            <button class="md:hidden">☰</button>
        </div>
    </nav>

    <!-- Konten -->
    <main class="min-h-screen">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-8 mt-12">
        <div class="max-w-6xl mx-auto px-4 text-center">
            <p>© 2024 Inovasi Sosial untuk Keberlanjutan</p>
        </div>
    </footer>
</body>
</html>
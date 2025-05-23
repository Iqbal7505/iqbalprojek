@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<div class="bg-gradient-to-r from-blue-500 to-teal-600 py-20 px-4">
    <div class="max-w-4xl mx-auto text-center text-white">
        <h1 class="text-4xl md:text-5xl font-bold mb-6">Bantu Pendidikan Indonesia</h1>
        <p class="text-xl mb-8">Gabung sebagai relawan pendidikan untuk menciptakan dampak berkelanjutan</p>
        <div class="flex flex-col sm:flex-row justify-center gap-4">
            <a href="/volunteer" class="bg-white text-blue-600 px-6 py-3 rounded-lg font-bold hover:bg-gray-100 transition">Daftar Sekarang</a>
            <a href="#about" class="bg-transparent border-2 border-white px-6 py-3 rounded-lg font-bold hover:bg-white hover:text-blue-600 transition">Pelajari Lebih Lanjut</a>
        </div>
    </div>
</div>

<!-- Fitur -->
<div class="max-w-6xl mx-auto px-4 py-16 grid md:grid-cols-3 gap-8">
    <div class="bg-white p-6 rounded-lg shadow-md text-center hover:shadow-lg transition">
        <div class="text-blue-500 text-4xl mb-4">📚</div>
        <h3 class="text-xl font-bold mb-2">Pendaftaran Relawan</h3>
        <p class="text-gray-600">Daftar sesuai keahlian dan ketersediaan waktu</p>
    </div>
    <div class="bg-white p-6 rounded-lg shadow-md text-center hover:shadow-lg transition">
        <div class="text-green-500 text-4xl mb-4">📅</div>
        <h3 class="text-xl font-bold mb-2">Kalender Kegiatan</h3>
        <p class="text-gray-600">Jadwal mengajar dan pelatihan</p>
    </div>
    <div class="bg-white p-6 rounded-lg shadow-md text-center hover:shadow-lg transition">
        <div class="text-yellow-500 text-4xl mb-4">🏆</div>
        <h3 class="text-xl font-bold mb-2">Sertifikasi Digital</h3>
        <p class="text-gray-600">Dapatkan penghargaan untuk kontribusi Anda</p>
    </div>
</div>
@endsection
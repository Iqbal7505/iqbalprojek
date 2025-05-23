@extends('layouts.app')

@section('content')
<div class="max-w-6xl mx-auto px-4 py-12">
    <h2 class="text-3xl font-bold text-center mb-8">Kalender Kegiatan</h2>
    
    <div class="bg-white rounded-lg shadow-md overflow-hidden">
        <!-- Header Kalender -->
        <div class="flex justify-between items-center p-4 border-b">
            <button class="p-2 rounded-full hover:bg-gray-100">←</button>
            <h3 class="text-xl font-bold">Maret 2024</h3>
            <button class="p-2 rounded-full hover:bg-gray-100">→</button>
        </div>

        <!-- Grid Kalender -->
        <div class="grid grid-cols-7 gap-px bg-gray-200">
            <!-- Hari -->
            <div class="bg-gray-100 p-2 text-center font-bold">Sen</div>
            <div class="bg-gray-100 p-2 text-center font-bold">Sel</div>
            <!-- ... -->

            <!-- Tanggal Kosong -->
            <div class="bg-white p-2 h-24"></div>
            
            <!-- Tanggal dengan Acara -->
            <div class="bg-white p-2 h-24 relative">
                <span class="font-bold">5</span>
                <div class="absolute bottom-1 left-1 right-1 bg-blue-100 text-blue-800 text-xs p-1 rounded">
                    Pelatihan Matematika
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 
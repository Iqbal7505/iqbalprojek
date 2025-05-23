@extends('layouts.app')

@section('content')
<div class="max-w-4xl mx-auto px-4 py-12">
    <h2 class="text-3xl font-bold text-center mb-8">Daftar Sebagai Relawan</h2>
    
    <div class="bg-white rounded-lg shadow-md p-8">
        <form class="grid md:grid-cols-2 gap-6">
            <!-- Input Nama -->
            <div class="md:col-span-2">
                <label class="block text-gray-700 mb-2">Nama Lengkap</label>
                <input type="text" class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500">
            </div>

            <!-- Keahlian -->
            <div>
                <label class="block text-gray-700 mb-2">Keahlian</label>
                <select class="w-full px-4 py-2 border rounded-lg">
                    <option>Matematika</option>
                    <option>Bahasa Inggris</option>
                    <option>Sains</option>
                </select>
            </div>

            <!-- Ketersediaan -->
            <div>
                <label class="block text-gray-700 mb-2">Ketersediaan</label>
                <div class="space-y-2">
                    <label class="flex items-center">
                        <input type="radio" name="availability" class="mr-2"> Weekdays
                    </label>
                    <label class="flex items-center">
                        <input type="radio" name="availability" class="mr-2"> Weekends
                    </label>
                </div>
            </div>

            <!-- Submit -->
            <div class="md:col-span-2">
                <button type="submit" class="w-full bg-blue-600 text-white py-3 px-4 rounded-lg hover:bg-blue-700 transition font-bold">Kirim Pendaftaran</button>
            </div>
        </form>
    </div>
</div>
@endsection
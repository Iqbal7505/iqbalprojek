<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        // Pastikan file ini ada: resources/views/contact/index.blade.php
        return view('contact.index'); // Mengarahkan ke tampilan yang benar
    }

    public function store(Request $request)
{
    // Validasi input
    $request->validate([
        'name' => 'required|min:3',
        'email' => 'required|email',
        'phone' => 'required|digits_between:10,13', 
        'message' => 'required|min:10',
    ]);

    // Simpan data atau kirim email dsb
    return redirect()->back()->with('succes', 'Pesan berhasil dikirim!');
}
}

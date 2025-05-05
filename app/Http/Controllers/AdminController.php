<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function create()
    {
        return view('admin.admin');
    }


    public function store(Request $request)
{   $request->validate([
    'nama' => 'required',
    'email' => 'required|email',
    'no_hp' => 'required',
    'alamat' => 'required',
    'role' => 'required|in:Super Admin,Kasir'
]);
    return redirect('/admin')->with(['success' => 'Data berhasil divalidasi dan dikirim!']);
}    
}

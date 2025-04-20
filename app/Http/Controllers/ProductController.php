<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class ProductController extends Controller
{
    protected $products = [
        1 => ['name' => 'Kaos Laravel', 'price' => 150000],
        2 => ['name' => 'Stiker Coding', 'price' => 25000],
        3 => ['name' => 'Notebook Dev', 'price' => 50000],
    ];

    // Menampilkan daftar produk
    public function index(): View
    {
        $products = $this->products;
        return view('products.index', compact('products'));
    }
    public function show($id): View
    {
    $product = $this->products[$id] ?? null; // Ambil produk berdasarkan ID
    if (!$product) {
        abort(404); // Jika produk tidak ditemukan, tampilkan halaman 404
    }
    return view('products.show', compact('product'));
    }
}
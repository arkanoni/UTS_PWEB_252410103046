<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    // Menampilkan halaman login
    public function index()
    {
        return view('login');
    }

    // Memproses input login dan mengarahkan ke dashboard dengan membawa username
    public function login(Request $request)
    {
        $username = $request->input('username', 'Tamu');
        return redirect()->route('dashboard', ['username' => $username]);
    }

    // Menampilkan halaman dashboard
    public function dashboard(Request $request)
    {
        $username = $request->query('username', 'Tamu');
        return view('dashboard', compact('username'));
    }

    // Menampilkan halaman profil
    public function profile(Request $request)
    {
        $username = $request->query('username', 'Tamu');
        return view('profile', compact('username'));
    }

    // Menampilkan halaman pengelolaan
    public function pengelolaan(Request $request)
    {
        $username = $request->query('username', 'Tamu');
        
        // data array dinamis
        $items = [
            ['id' => 1, 'nama' => 'Kopi Robusta Lokal', 'kategori' => 'Minuman', 'stok' => 45, 'harga' => 15000],
            ['id' => 2, 'nama' => 'Roti Bakar Keju', 'kategori' => 'Makanan', 'stok' => 20, 'harga' => 12000],
            ['id' => 3, 'nama' => 'Teh Manis Hangat', 'kategori' => 'Minuman', 'stok' => 60, 'harga' => 5000],
            ['id' => 4, 'nama' => 'Nasi Goreng Spesial', 'kategori' => 'Makanan', 'stok' => 15, 'harga' => 20000],
        ];

        return view('pengelolaan', compact('username', 'items'));
    }
}

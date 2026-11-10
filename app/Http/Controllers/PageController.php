<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function prosesLogin(Request $request)
    {
        $request->validate([
            'username' => 'required'
        ]);

        return redirect()->route('dashboard', [
            'username' => $request->username
        ]);
    }

    public function dashboard(Request $request)
    {
        $username = $request->query('username', 'Mahasiswa');

        $transaksi = [
            [
                'nama' => 'Uang Saku Bulanan',
                'jenis' => 'Pemasukan',
                'jumlah' => 1500000
            ],
            [
                'nama' => 'Makan dan Minum',
                'jenis' => 'Pengeluaran',
                'jumlah' => 250000
            ],
            [
                'nama' => 'Tabungan',
                'jenis' => 'Tabungan',
                'jumlah' => 300000
            ]
        ];

        return view('dashboard', compact('username', 'transaksi'));
    }

    public function pengelolaan(Request $request)
    {
        $username = $request->query('username', 'Mahasiswa');

        $transaksi = [
            [
                'nama' => 'Uang Saku Bulanan',
                'jenis' => 'Pemasukan',
                'jumlah' => 1500000
            ],
            [
                'nama' => 'Makan dan Minum',
                'jenis' => 'Pengeluaran',
                'jumlah' => 250000
            ]
        ];

        return view('pengelolaan', compact('username', 'transaksi'));
    }

    public function profile(Request $request)
    {
        $username = $request->query('username', 'Mahasiswa');

        $profil = [
            'nama' => 'Sabrina Ayu Lintang Kirana',
            'username' => $username,
            'email' => '252410102104@mail.unej.ac.id',
            'pekerjaan' => 'Mahasiswa'
        ];

        return view('profile', compact('username', 'profil'));
    }
}

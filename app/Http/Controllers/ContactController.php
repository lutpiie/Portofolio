<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    // Tampilkan halaman contact
    public function index()
    {
        return view('contact');
    }

    // Proses form contact
    public function send(Request $request)
    {
        $request->validate([
            'name'    => 'required|string|max:100',
            'email'   => 'required|email|max:100',
            'message' => 'required|string|max:500',
        ]);

        // Di sini nanti bisa ditambah: kirim email / simpan ke database
        // Untuk sekarang, cuma tampilkan pesan sukses

        return redirect()->route('contact')->with('success', 'Pesan berhasil dikirim! Terima kasih.');
    }
}
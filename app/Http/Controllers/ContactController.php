<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        // 1. Validasi data yang masuk dari form
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'message' => 'required|string|min:10',
        ]);

        // 2. Logika Pemrosesan (tanpa database)
        // Di aplikasi nyata, di sinilah Anda akan meletakkan kode
        // untuk mengirim email notifikasi ke admin.
        // Contoh: Mail::to('admin@luarsekolah.com')->send(new ContactFormMail($validatedData));
        // Tapi untuk sekarang, kita lewati bagian ini sesuai permintaan.

        // 3. Siapkan notifikasi sukses dan redirect kembali
        return redirect()->back()->with('success', 'Terima kasih! Pertanyaan Anda telah berhasil terkirim.');
    }
}

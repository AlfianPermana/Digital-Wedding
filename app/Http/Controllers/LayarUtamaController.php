<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\wishes;
use App\Models\tamu;

class LayarUtamaController extends Controller
{

    public function show($name, $id)
    {
        $name = str_replace(' ', '', $name); // Bersihkan spasi dari name
        $tamu = Tamu::find($id); // Ambil data tamu berdasarkan id

        if (!$tamu) {
            return abort(404, 'Tamu not found'); // Tampilkan error jika data tidak ditemukan
        }

        $wish = wishes::all();


        // Kirim data tamu dan nama ke view
        return view('undangan.coba', compact('tamu', 'name', 'wish'));
    }

}

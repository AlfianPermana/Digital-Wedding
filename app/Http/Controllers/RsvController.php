<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\rsv;
use App\Models\tamu;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\ReservasiRequest;

class RsvController extends Controller
{
    public function index()
    {
        $rsv = rsv::all();
        $tamu = tamu::all();
        $totaltamu = tamu::count();

        $tamuhadir = rsv::where('status', 'hadir')->count();
        $tamuabsen = rsv::where('status', 'tidak hadir')->count();
        $tamubelumtahu = rsv::where('status', 'belum tahu')->count();

        return view('content.datareservasi', compact('rsv', 'totaltamu', 'tamuhadir', 'tamuabsen', 'tamubelumtahu'));
    }

    public function store()
    {
        return view('content.inputrsv');
    }

    public function tambah(ReservasiRequest $request)
    {
        rsv::create($request->all());
        return redirect()->back()->with('success', 'Data Kehadiran Tersimpan');
    }


    public function destroy($id)
    {
        $tamu = rsv::find($id);
        $tamu->delete();

        return redirect()->route('rsv.index')->with('success', 'Data Tamu Berhasil Dihapus');
    }
}

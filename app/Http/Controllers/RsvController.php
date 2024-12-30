<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\rsv;
use App\Models\tamu;
use Illuminate\Support\Facades\Validator;

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

    public function tambah(Request $request)
    {
        Validator::make($request->all(), [
            'nama' => 'required',
            'email' => 'required',
            'phone' => 'required|numeric|min:10|max:13',
            'status' => 'required',
        ]);

        rsv::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'status' => $request->status,
        ]);

        return redirect()->back()->with('success', 'Data Kehadiran Tersimpan');
    }


    public function destroy($id)
    {
        $tamu = rsv::find($id);
        $tamu->delete();

        return redirect()->route('rsv.index')->with('success', 'Data Tamu Berhasil Dihapus');
    }
}

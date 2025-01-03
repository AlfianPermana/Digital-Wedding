<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tamu;
use Illuminate\Support\Facades\Validator;

class TamuController extends Controller
{
    public function index()
    {
        $tamu = tamu::all();

        return view('content.datatamu', compact('tamu'));
    }

    public function store()
    {
        return view('content.inputtamu');
    }

    public function tambah(Request $request)
    {
        Validator::make($request->all(), [
            'nama' => 'required',
            'email' => 'required',
            'phone' => 'required|numeric|min:10|max:13',
            'link' => 'required',
        ]);

        $id = uniqid();

        Tamu::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'id_link' => $id,
        ]);

        return redirect()->back()->with('success', 'Data Tamu Tersimpan');
    }


    public function show($id)
    {
        $tamu = Tamu::find($id);
        return view('content.updatetamu', compact('tamu'));
    }

    public function update(Request $request, $id)
    {
        Validator::make($request->all(), [
            'nama' => 'required',
            'email' => 'required',
            'phone' => 'required|numeric|min:10|max:13',
        ]);

        $tamu = Tamu::findOrFail($id);
        $tamu->update($request->all());

        return redirect()->route('tamu.index')->with('success', 'Data Tamu Berhasil Diupdate');
    }

    public function destroy($id)
    {
        $tamu = tamu::find($id);
        $tamu->delete();

        return redirect()->route('tamu.index')->with('success', 'Data Tamu Berhasil Dihapus');
    }



}

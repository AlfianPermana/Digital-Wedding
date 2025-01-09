<?php

namespace App\Http\Controllers;

use App\Http\Requests\TamuRequest;
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

    public function tambah(TamuRequest $request)
    {
        Tamu::create($request->all());
        return redirect()->back()->with('success', 'Data Tamu Tersimpan');
    }


    public function show($id)
    {
        $tamu = Tamu::find($id);
        return view('content.updatetamu', compact('tamu'));
    }

    public function update(TamuRequest $request, $id)
    {
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

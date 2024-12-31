<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\wishes;
use Illuminate\Support\Facades\Validator;

class WishesController extends Controller
{
    public function index()
    {
        $wish = wishes::all();

        return view('content.datawishes', compact('wish'));
    }

    public function store()
    {
        return view('content.inputwish');
    }

    public function tambah(Request $request)
    {
        Validator::make($request->all(), [
            'nama' => 'required',
            'wish' => 'required',
        ]);

        $id = uniqid();

        wishes::create([
            'name' => $request->name,
            'wish' => $request->wish,
        ]);

        return redirect()->back()->with('success', 'Data Tamu Tersimpan');
    }

    public function destroy($id)
    {
        $wish = wishes::find($id);
        $wish->delete();

        return redirect()->route('wish.index')->with('success', 'Data Tamu Berhasil Dihapus');
    }
}

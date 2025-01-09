<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tamu;
use Illuminate\Support\Facades\Http;
use App\Http\Resources\TamuResource;
use Illuminate\Support\Facades\Validator;

class APIController extends Controller
{
    public function index()
    {
        $tamu = tamu::all();

        //  return response()->json(['tamu' => $tamu], 200);
        return TamuResource::collection($tamu);
    }


    /*
    public function ambildataapi()
    {
        $response = Http::get('http://127.0.0.1:8000/api/tamu');
        $tamu = $response->json(); // Asumsikan API mengembalikan data dalam format JSON

        return view('content.datatamu', compact('tamu'));
    }
     */

    public function show($id)
    {
        $tamu = Tamu::findOrFail($id);
        return TamuResource::make($tamu);
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

        $tamu = Tamu::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'id_link' => $id,
        ]);

        return response()->json([
            'success' => true,
            'message' => 'User created successfully',
            'data' => $tamu
        ], 201);
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

        return response()->json([
            'success' => true,
            'message' => 'User updated successfully',
            'data' => $tamu
        ]);
    }

    public function destroy($id)
    {
        $tamu = tamu::find($id);
        $tamu->delete();

        return response()->json([
            'success' => true,
            'message' => 'User deleted successfully',
            'data' => $tamu
        ]);
    }
}

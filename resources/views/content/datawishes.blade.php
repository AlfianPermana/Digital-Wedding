@extends('layout.app')

@section('content')
<div class="container px-10 py-6">
    <div class="text-gray-800 text-3xl font-semibold text-center mb-5">Data Wishes</div>
    <table class="min-w-full table-auto bg-white border-separate border-spacing-0 shadow-md rounded-lg">
        <thead class="bg-gray-800 text-white">
            <tr>
                <th class="px-6 py-3 text-left font-medium text-sm uppercase">Nama</th>
                <th class="px-6 py-3 text-left font-medium text-sm uppercase">Wishes</th>
                <th class="px-6 py-3 text-left font-medium text-sm uppercase">Action</th>
            </tr>
        </thead>
        <tbody class="text-gray-700">
            @foreach ($wish as $data)
                <tr class="border-b hover:bg-gray-50 transition-colors duration-200">
                    <td class="px-6 py-4">{{{$data->name}}}</td>
                    <td class="px-6 py-4 w-1/2">{{$data->wish}}</td>
                    <td class="px-6 py-4 flex ">
                        <form action="{{ route('wish.destroy', $data->id) }}" method="POST" class="w-full">
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                                class="w-full bg-transparent hover:bg-red-800 text-red-800 hover:text-white border border-red-800 font-bold p-2 rounded-full">
                                Delete
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>
</div>

@endsection
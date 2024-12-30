@extends('layout.app')

@section('content')
<div class="container px-10 py-6">

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 mb-10">

        <div class="p-6 bg-white shadow rounded text-center">
            <h2 class="text-3xl font-bold mb-3">{{$totaltamu}}</h2>
            <p class="text-gray-600">Jumlah Tamu Ter-Data</p>
        </div>

        <!-- Card 2 -->
        <div class="p-6 bg-white shadow rounded text-center">
            <h2 class="text-3xl font-bold mb-3">{{$tamuhadir}}</h2>
            <p class="text-gray-600">Jumlah Tamu Terkonfirmasi <span class="text-green-500 font-bold">Hadir</span></p>
        </div>

        <!-- Card 3 -->
        <div class="p-6 bg-white shadow rounded text-center">
            <h2 class="text-3xl font-bold mb-3">{{$tamuabsen}}</h2>
            <p class="text-gray-600">Jumlah Tamu Terkonfirmasi <span class="text-red-500 font-bold">Tidak Hadir</span>
        </div>

        <div class="p-6 bg-white shadow rounded text-center">
            <h2 class="text-3xl font-bold mb-3">{{$tamubelumtahu}}</h2>
            <p class="text-gray-600">Jumlah Tamu Terkonfirmasi <span class="text-yellow-500 font-bold">Belum Tahu</span>
            </p>
        </div>


    </div>

    <div class="text-gray-800 text-3xl font-semibold text-center mb-5">Data Reservasi</div>

    <!-- Table with horizontal scroll -->
    <div class="overflow-x-auto sm:overflow-hidden md:overflow-hidden">
        <table class="min-w-full table-auto bg-white border-separate border-spacing-0 shadow-md rounded-lg">
            <thead class="bg-gray-800 text-white">
                <tr>
                    <th class="px-6 py-3 text-left font-medium text-sm uppercase">Nama</th>
                    <th class="px-6 py-3 text-left font-medium text-sm uppercase">Email</th>
                    <th class="px-6 py-3 text-left font-medium text-sm uppercase">Phone Number</th>
                    <th class="px-6 py-3 text-left font-medium text-sm uppercase">Status</th>
                    <th class="px-6 py-3 text-left font-medium text-sm uppercase">Action</th>
                </tr>
            </thead>
            <tbody class="text-gray-700">
                @foreach ($rsv as $value)
                    <tr class="border-b hover:bg-gray-50 transition-colors duration-200">
                        <td class="px-6 py-4">{{$value->name}}</td>
                        <td class="px-6 py-4">{{$value->email}}</td>
                        <td class="px-6 py-4">{{$value->phone}}</td>
                        <td class="px-6 py-4">{{$value->status}}</td>
                        <td class="px-6 py-4 flex flex-wrap gap-2">
                            <form action="{{ route('rsv.destroy', $value->id) }}" method="POST" class="w-full">
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

</div>
@endsection
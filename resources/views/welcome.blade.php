@extends('layout.app')

@section('content')
<div class="container px-10 py-6">
    <div class="text-gray-800 text-3xl font-semibold text-center mb-5">Data Reservasi</div>
    <table class="min-w-full table-auto bg-white border-separate border-spacing-0 shadow-md rounded-lg">
        <thead class="bg-gray-800 text-white">
            <tr>
                <th class="px-6 py-3 text-left font-medium text-sm uppercase">Song</th>
                <th class="px-6 py-3 text-left font-medium text-sm uppercase">Artist</th>
                <th class="px-6 py-3 text-left font-medium text-sm uppercase">Year</th>
            </tr>
        </thead>
        <tbody class="text-gray-700">
            <tr class="border-b hover:bg-gray-50 transition-colors duration-200">
                <td class="px-6 py-4">The Sliding Mr. Bones (Next Stop, Pottersville)</td>
                <td class="px-6 py-4">Malcolm Lockyer</td>
                <td class="px-6 py-4">1961</td>
            </tr>
            <tr class="border-b hover:bg-gray-50 transition-colors duration-200">
                <td class="px-6 py-4">Witchy Woman</td>
                <td class="px-6 py-4">The Eagles</td>
                <td class="px-6 py-4">1972</td>
            </tr>
            <tr class="border-b hover:bg-gray-50 transition-colors duration-200">
                <td class="px-6 py-4">Shining Star</td>
                <td class="px-6 py-4">Earth, Wind, and Fire</td>
                <td class="px-6 py-4">1975</td>
            </tr>
        </tbody>
    </table>
</div>

@endsection
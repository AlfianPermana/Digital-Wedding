@extends('layout.app')

@section('content')
<div class="container px-10 py-6">

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 mb-10">
        <!-- Card 1 -->
        <div class="p-6 bg-white shadow rounded">
            <h2 class="text-lg font-bold mb-2">Users</h2>
            <p class="text-gray-600">Manage your users effectively.</p>
        </div>

        <!-- Card 2 -->
        <div class="p-6 bg-white shadow rounded">
            <h2 class="text-lg font-bold mb-2">Reports</h2>
            <p class="text-gray-600">Analyze your system reports.</p>
        </div>

        <!-- Card 3 -->
        <div class="p-6 bg-white shadow rounded">
            <h2 class="text-lg font-bold mb-2">Settings</h2>
            <p class="text-gray-600">Customize your preferences.</p>
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
                <tr class="border-b hover:bg-gray-50 transition-colors duration-200">
                    <td class="px-6 py-4">The Sliding Mr. Bones (Next Stop, Pottersville)</td>
                    <td class="px-6 py-4">Malcolm Lockyer</td>
                    <td class="px-6 py-4">1961</td>
                    <td class="px-6 py-4">Hadir</td>
                    <td class="px-6 py-4 flex flex-wrap gap-2">
                        <button
                            class="w-full sm:w-auto bg-transparent hover:bg-blue-400 text-blue-400 hover:text-white border border-blue-400 font-bold p-2 rounded-full">Update</button>
                        <button
                            class="w-full sm:w-auto bg-transparent hover:bg-red-800 text-red-800 hover:text-white border border-red-800 font-bold p-2 rounded-full">Delete</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

</div>
@endsection
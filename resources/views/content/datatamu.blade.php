@extends('layout.app')

@section('content')
<div class="container px-2 sm:px-3 md:px-6 py-6 mx-auto">
    <div class="text-gray-800 text-3xl font-semibold text-center mb-5">Data Tamu</div>
    <div class="overflow-x-auto">
        <table class="min-w-full bg-white border-separate border-spacing-0 shadow-md rounded-lg">
            <thead class="bg-gray-800 text-white">
                <tr>
                    <th class="px-4 md:px-6 py-3 text-left text-sm font-medium uppercase">Nama</th>
                    <th class="px-4 md:px-6 py-3 text-left text-sm font-medium uppercase">Email</th>
                    <th class="px-4 md:px-6 py-3 text-left text-sm font-medium uppercase">Phone Number</th>
                    <th class="px-4 md:px-6 py-3 text-left text-sm font-medium uppercase">Link</th>
                    <th class="px-4 md:px-6 py-3 text-left text-sm font-medium uppercase">Action</th>
                </tr>
            </thead>
            <tbody class="text-gray-700 text-sm">
                @foreach ($tamu as $data)
                    <tr class="border-b hover:bg-gray-50 transition-colors duration-200">
                        <td class="px-4 md:px-6 py-4">{{ $data->name }}</td>
                        <td class="px-4 md:px-6 py-4">{{ $data->email }}</td>
                        <td class="px-4 md:px-6 py-4">{{ $data->phone }}</td>
                        <td class="px-4 md:px-6 py-4">
                            <a href="{{ url('/wedding/' . str_replace(' ', '', $data->name) . '/' . $data->id_link) }}"
                                class="text-blue-600 hover:text-blue-800">
                                {{ url('/wedding/' . str_replace(' ', '', $data->name) . '/' . $data->id_link) }}
                            </a>
                        </td>
                        <td class="px-4 md:px-6 py-4 flex flex-wrap gap-2">
                            <a href="{{ url('admin/tamu/' . $data->id)}}"
                                class="w-full sm:w-auto bg-transparent hover:bg-blue-400 text-blue-400 hover:text-white border border-blue-400 font-bold p-2 rounded-full">
                                Update
                            </a>
                            <form action="{{ route('tamu.destroy', $data->id) }}" method="POST" class="w-full sm:w-auto">
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
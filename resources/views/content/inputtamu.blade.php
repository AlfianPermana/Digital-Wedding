@extends('layout.app')

@section('content')
<div class="container px-15 py-6">
    <form action="{{route('tamu.tambah')}}" method="POST" class="flex justify-center ">
        @csrf
        <div class="w-1/2 border border-black rounded-md p-6 shadow-2xl">
            <div class="text-2xl text-center mb-3">Input Tamu</div>
            <div class="mb-4">
                <label for="name" class="block text-gray-700 font-medium mb-2">Full Name</label>
                <input type="text" id="name" name="name" placeholder="Enter your name"
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-400 focus:outline-none"
                    required>
            </div>
            <div class="mb-4">
                <label for="name" class="block text-gray-700 font-medium mb-2">Email</label>
                <input type="email" id="name" name="email" placeholder="Enter your name"
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-400 focus:outline-none"
                    required>
            </div>
            <div class="mb-4">
                <label for="name" class="block text-gray-700 font-medium mb-2">Nommor Telp</label>
                <input type="text" id="name" name="phone" placeholder="Enter your name"
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-400 focus:outline-none"
                    required>
            </div>
            <div class="mb-4 flex justify-center">
                <button
                    class="shadow-2xl hover:shadow-md w-1/3 bg-transparent border hover:bg-gray-900 hover:text-white border-black hover:border-transparent font-bold p-2 rounded-full">
                    Tambah
                </button>
            </div>
        </div>
    </form>
</div>

@endsection
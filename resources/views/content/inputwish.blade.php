@extends('layout.app')

@section('content')
<div class="container px-15 py-6">
    <form action="{{route('wish.tambah')}}" method="POST" class="flex justify-center ">
        @csrf
        <div class="w-full max-w-xl sm:max-w-xl md:max-w-2xl border border-gray-300 rounded-md p-6 shadow-2xl bg-white">
            <div class="text-sm sm:text-lg lg:text-2xl text-center mb-6 font-semibold text-gray-800">Input Wishes</div>
            <div class="mb-4">
                <label for="name" class="block text-gray-700 font-medium mb-2">Full Name</label>
                <input type="text" id="name" name="name" placeholder="Enter your name"
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-400 focus:outline-none"
                    required>
            </div>
            <div class="mb-4">
                <label for="wish" class="block text-gray-700 font-medium mb-2">Wish</label>
                <textarea type="text" id="wish" name="wish" placeholder="Enter your Wishes"
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-400 focus:outline-none"></textarea>
            </div>

            <div class="mt-6 flex justify-center">
                <button type="submit"
                    class="shadow-lg hover:shadow-md w-full sm:w-auto bg-gray-800 text-white hover:bg-gray-900 font-bold px-6 py-2 rounded-full transition-colors">
                    Tambah
                </button>
            </div>
        </div>
    </form>
</div>

@endsection
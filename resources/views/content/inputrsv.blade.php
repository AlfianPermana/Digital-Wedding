@extends('layout.app')

@section('content')
<div class="container px-4 sm:px-6 lg:px-8 py-6 ">
    <form action="{{ route('rsv.tambah') }}" method="POST" class="flex justify-center">
        @csrf
        <div class="w-full max-w-xl sm:max-w-xl md:max-w-2xl border border-gray-300 rounded-md p-6 shadow-2xl bg-white">
            <div class="text-sm sm:text-lg lg:text-2xl text-center mb-6 font-semibold text-gray-800">Input Reservasi
            </div>

            <div class="grid gap-4 text-sm sm:text-sm lg:text-base">
                <div>
                    <label for="name" class="block text-gray-700 font-medium mb-2 ">Full
                        Name</label>
                    <input type="text" id="name" name="name" placeholder="Enter your name"
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-400 focus:outline-none"
                        required>
                </div>

                <div>
                    <label for="email" class="block text-gray-700 font-medium mb-2 ">Email</label>
                    <input type="email" id="email" name="email" placeholder="Enter your email"
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-400 focus:outline-none"
                        required>
                </div>

                <div>
                    <label for="phone" class="block text-gray-700 font-medium mb-2 ">Nomor Telp</label>
                    <input type="text" id="phone" name="phone" placeholder="Enter your phone number"
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-400 focus:outline-none"
                        required>
                </div>

                <div>
                    <label for="status" class="block text-gray-700 font-medium mb-2">Konfirmasi
                        Kehadiran</label>
                    <select name="status" id="status"
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-400 focus:outline-none">
                        <option value="default" disabled selected>Pilih Konfirmasi Kehadiran</option>
                        <option value="Hadir">Hadir</option>
                        <option value="Tidak Hadir">Tidak Hadir</option>
                        <option value="Belum Tahu">Belum Tahu</option>
                    </select>
                </div>
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
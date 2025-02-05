@extends('layouts.main', [
    'title' => 'Login Admin - Layanan dan Pendaftaran Umrah PT Putri Cahaya Angkasa Jaya',
])

@section('content')
    <div class="h-screen md:flex">
        <div
            class="relative overflow-hidden md:flex w-1/2 bg-gradient-to-tr from-primary to-secondary i justify-around items-center hidden px-20">
            <div>
                <h1 class="text-white font-bold text-4xl">Umrah Booking</h1>
                <p class="text-white mt-1">Nikmati kemudahan mencari paket umrah dengan Umrahaja. Dengan harga terjangkau dan
                    layanan terpercaya, Umrahaja menyediakan perjalanan nyaman dan aman untuk pengalaman ibadah yang lebih
                    khusyuk dan berkesan.</p>
                <a href="{{ route('index') }}"
                    class="w-28 bg-white text-primary mt-4 py-2 rounded-2xl font-bold mb-2 flex items-center justify-center">Read
                    More</a>
            </div>
            <div class="absolute -bottom-32 -left-40 w-80 h-80 border-4 rounded-full border-opacity-30 border-t-8"></div>
            <div class="absolute -bottom-40 -left-20 w-80 h-80 border-4 rounded-full border-opacity-30 border-t-8"></div>
            <div class="absolute -top-40 -right-0 w-80 h-80 border-4 rounded-full border-opacity-30 border-t-8"></div>
            <div class="absolute -top-20 -right-20 w-80 h-80 border-4 rounded-full border-opacity-30 border-t-8"></div>
        </div>
        <div class="flex w-2/3 px-20 justify-center py-10 items-center bg-white">
            <form method="POST" action="{{ route('admin.login') }}" class="bg-white w-full">
                @csrf
                <h1 class="text-gray-800 font-bold text-2xl mb-1">Selamat Datang di Panel Admin!</h1>
                <p class="text-sm font-normal text-gray-600 mb-7">Masuk ke dashboard dan panel admin untuk melakukan
                    manajemen paket umrah, dll</p>
                <div class="flex items-center border-2 py-2 px-3 rounded-2xl mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" />
                    </svg>
                    <input
                        class="pl-2 outline-none border-none rounded-2xl w-full focus:outline-none focus:border-none *:outline-none *:border-none"
                        type="email" name="email" id="email" placeholder="Email Address" required />
                </div>
                <div class="flex items-center border-2 py-2 px-3 rounded-2xl">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" viewBox="0 0 20 20"
                        fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z"
                            clip-rule="evenodd" />
                    </svg>
                    <input
                        class="pl-2 outline-none border-none rounded-2xl w-full focus:outline-none focus:border-none *:outline-none border-none"
                        type="password" name="password" id="password" placeholder="Password" required />
                </div>
                <button type="submit"
                    class="block w-full bg-secondary mt-4 py-3 rounded-2xl text-white font-semibold mb-2">Login</button>
            </form>
        </div>
    </div>
@endsection

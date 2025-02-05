@extends('layouts.app')

@section('content')
<div class="flex">
    {{-- SIDEBAR --}}
    <aside class="w-64 bg-white p-4 shadow-md flex flex-col justify-between">
        <div>
            <h1 class="text-lg font-bold mb-4 flex items-center">
                <img src="https://img.icons8.com/ios-filled/50/000000/graduation-cap.png" class="w-6 h-6 mr-2"/>
                Website Alumni
            </h1>
            <nav>
                <ul>
                    <li class="mb-2">
                        <a href="{{ route('dashboard') }}" class="block p-2 hover:bg-gray-200 rounded flex items-center">
                            <img src="https://img.icons8.com/?size=20&id=JtOasgwoFNyW&format=png&color=000000" class="mr-2"/>
                            Dashboard
                        </a>
                    </li>
                    <li class="mb-2">
                        <a href="{{ route('alumniConnect') }}" class="block p-2 hover:bg-gray-200 rounded flex items-center">
                            <img src="https://img.icons8.com/?size=20&id=w0vclwHRccbk&format=png&color=000000" class="mr-2"/>
                            Connect With Alumni
                        </a>
                    </li>
                    <li class="mb-2">
                        <a href="{{ route('ceritaSukses') }}" class="block p-2 hover:bg-gray-200 rounded flex items-center">
                            <img src="https://img.icons8.com/ios-filled/20/000000/trophy.png" class="mr-2"/>
                            Cerita Sukses
                        </a>
                    </li>
                    <li class="mb-2">
                        <a href="{{ route('portofolio') }}" class="block p-2 hover:bg-gray-200 rounded flex items-center">
                            <img src="https://img.icons8.com/ios-filled/20/000000/briefcase.png" class="mr-2"/>
                            Portofolio
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="p-4 bg-gray-200 rounded shadow-md text-center">
            <p class="text-sm">Need help?</p>
            <button class="mt-2 px-4 py-2 bg-white border border-gray-400 rounded">
                Documentation
            </button>
        </div>
    </aside>

    <div class="flex-1 px-4">
        <header class="text-center mb-10">
            <h1 class="text-5xl font-extrabold text-gray-900">📖 Alumni Success Stories</h1>
            <p class="text-lg text-gray-600 mt-4 max-w-2xl mx-auto">
                Explore the inspiring journeys of our Universitas Methodist Indonesia alumni and how they achieved their career dreams.
            </p>
        </header>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($alumni as $alum)
                @php
                    $namaFile = str_replace(' ', '', strtolower($alum->nama_lengkap));
                    $fotoExtensions = ['jpg', 'jpeg', 'png'];
                    $fotoPath = asset('images/alumni/default.png');
                    foreach ($fotoExtensions as $ext) {
                        if (file_exists(public_path("images/alumni/{$namaFile}.{$ext}"))) {
                            $fotoPath = asset("images/alumni/{$namaFile}.{$ext}");
                            break;
                        }
                    }
                @endphp

                <div class="bg-white shadow-lg rounded-xl overflow-hidden">
                    <img src="{{ $fotoPath }}" class="w-full h-64 object-cover" alt="Foto {{ $alum->nama_lengkap }}">

                    <div class="p-5">
                        <h2 class="text-2xl font-semibold text-gray-900">{{ $alum->nama_lengkap }}</h2>
                        <p class="text-md text-gray-500 mt-1">{{ $alum->prodi }} - {{ $alum->fakultas }}</p>
                        <p class="text-md text-gray-500 mt-1">{{ $alum->pekerjaan }} at {{ $alum->tempat_bekerja }}</p>

                        <div class="flex items-center justify-between mt-4">
                            <a href="{{ $alum->cerita_sukses }}" target="_blank" class="flex items-center text-blue-600 hover:text-blue-800 transition">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" viewBox="0 0 24 24" fill="currentColor">
                                    <path d="M6 4H18C19.1 4 20 4.9 20 6V18C20 19.1 19.1 20 18 20H6C4.9 20 4 19.1 4 18V6C4 4.9 4.9 4 6 4ZM8 14H16V16H8V14ZM8 10H16V12H8V10ZM8 6H12V8H8V6Z" />
                                </svg>
                                Read Success Story
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection

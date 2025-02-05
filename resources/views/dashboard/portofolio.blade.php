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
        <header class="relative w-full mb-8">
            <div class="relative w-full h-64">
                <img src="{{ asset('images/Alumni.jpg') }}" alt="Alumni Background" class="w-full h-full object-cover">
                <div class="absolute inset-0 bg-black bg-opacity-50 flex flex-col justify-center items-center">
                    <h1 class="text-3xl md:text-4xl font-bold bg-yellow-400 text-black px-6 py-3 rounded-lg shadow-lg">
                        Featured Alumni
                    </h1>
                    <h2 class="text-2xl md:text-3xl font-bold bg-white text-black px-6 py-3 mt-3 rounded-lg shadow-lg">
                        Who Share Their Experience
                    </h2>
                </div>
            </div>
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

                    $logoFile = str_replace(' ', '', $alum->kerja_dimana);
                    $logoExtensions = ['jpg', 'jpeg', 'png'];
                    $logoPath = asset('images/company_logos/default.png');
                    foreach ($logoExtensions as $ext) {
                        if (file_exists(public_path("images/company_logos/{$logoFile}.{$ext}"))) {
                            $logoPath = asset("images/company_logos/{$logoFile}.{$ext}");
                            break;
                        }
                    }
                @endphp

                <div class="bg-white shadow-lg rounded-xl overflow-hidden p-4 border border-gray-200">
                    <div class="flex items-center space-x-4">
                        <img src="{{ $fotoPath }}" class="w-16 h-16 rounded-full object-cover border border-gray-300" alt="Foto {{ $alum->nama_lengkap }}">
                        <div>
                            <h3 class="text-lg font-semibold">{{ $alum->nama_lengkap }}</h3>
                            <p class="text-sm text-gray-500">Hired {{ $alum->durasi_dapat_kerja }} Bulan Setelah Lulus</p>
                        </div>
                    </div>
                    <div class="mt-4">
                        <p class="font-semibold text-orange-500">{{ $alum->fakultas }}</p>
                        <p class="font-semibold">{{ $alum->prodi }}</p>
                        <hr class="my-2">
                        <p class="text-lg font-bold text-blue-600">{{ $alum->sebagai_apa }}</p>
                        <p class="text-gray-700">{{ $alum->kerja_dimana }}</p>
                    </div>
                    <div class="flex items-center justify-between mt-4">
                        <img src="{{ $logoPath }}" class="h-10" alt="Logo {{ $alum->kerja_dimana }}">
                        <a href="{{ $alum->github }}" target="_blank"
                           class="flex items-center space-x-2 px-4 py-2 bg-gray-800 text-white rounded shadow-lg hover:bg-gray-900">
                            <img src="{{ asset('images/github-logo.png') }}" class="h-6 w-6" alt="GitHub">
                            <span>GitHub Repository</span>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection

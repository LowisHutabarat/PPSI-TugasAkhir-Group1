<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIKAK Alumni</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <div class="flex h-screen">
        <!-- Sidebar -->
        <aside class="w-64 bg-white p-4 shadow-md flex flex-col justify-between">
            <div>
                <h1 class="text-lg font-bold mb-4 flex items-center">
                    <img src="https://img.icons8.com/ios-filled/50/000000/graduation-cap.png" class="w-6 h-6 mr-2"/>
                    Website Alumni
                </h1>
                <nav>
                    <ul>
                        <li class="mb-2">
                            <a href="{{ route('dashboard') }}" class="block p-2 bg-orange-500 text-white rounded flex items-center">
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

        <!-- Main Content -->
        <main class="flex-1 p-6">
            <div class="flex justify-between items-center mb-6">
                <h2 class="text-3xl font-bold">SIKAK Alumni</h2>
            </div>

            <!-- Dashboard Cards -->
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                <div class="p-4 bg-orange-500 text-white rounded-lg shadow-md flex flex-col items-center">
                    <p class="text-3xl font-bold">{{ number_format($durasiDapatKerja, 1) . " " . "Bulan" ?? 0 }}</p>
                    <p class="text-sm">Rata-Rata Durasi Mendapatkan Kerja</p>
                </div>
                <div class="p-4 bg-gray-800 text-white rounded-lg shadow-md flex flex-col items-center">
                    <p class="text-3xl font-bold">{{ $durasiLulusS1 }}</p>
                    <p class="text-sm">Alumni Lulus S1</p>
                </div>
                <div class="p-4 bg-gray-800 text-white rounded-lg shadow-md flex flex-col items-center">
                    <p class="text-3xl font-bold">{{ $alumniSudahKerja }}</p>
                    <p class="text-sm">Alumni yang Sudah Dapat Kerja</p>
                </div>
                <div class="p-4 bg-gray-800 text-white rounded-lg shadow-md flex flex-col items-center">
                    <p class="text-3xl font-bold">{{ $alumniPerusahaanTernama }}</p>
                    <p class="text-sm">Alumni yang Bekerja di Perusahaan Ternama</p>
                </div>
            </div>

            <!-- Fakultas Section -->
<!-- Fakultas Section -->
<div class="mt-8">
    <h3 class="text-2xl font-bold mb-4">Fakultas di Universitas Methodist Indonesia</h3>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-5 gap-4">
        <!-- Fakultas 1 -->
        <div class="p-4 bg-white rounded-lg shadow-md flex flex-col items-center">
            <img src="https://img.icons8.com/ios-filled/50/000000/laptop.png" alt="Ilmu Komputer" class="mb-2">
            <p class="text-sm font-semibold">ILMU KOMPUTER</p>
        </div>
        <!-- Fakultas 2 -->
        <div class="p-4 bg-white rounded-lg shadow-md flex flex-col items-center">
            <img src="https://img.icons8.com/ios-filled/50/000000/stethoscope.png" alt="Kedokteran" class="mb-2">
            <p class="text-sm font-semibold">KEDOKTERAN</p>
        </div>
        <!-- Fakultas 3 -->
        <div class="p-4 bg-white rounded-lg shadow-md flex flex-col items-center">
            <img src="https://img.icons8.com/ios-filled/50/000000/farm.png" alt="Pertanian" class="mb-2">
            <p class="text-sm font-semibold">PERTANIAN</p>
        </div>
        <!-- Fakultas 4 -->
        <div class="p-4 bg-white rounded-lg shadow-md flex flex-col items-center">
            <img src="https://img.icons8.com/?size=50&id=105267&format=png&color=000000" alt="Inggris" class="mb-2">
            <p class="text-sm font-semibold">Sastra Inggris</p>
        </div>
        <!-- Fakultas 5 -->
        <div class="p-4 bg-white rounded-lg shadow-md flex flex-col items-center">
            <img src="https://img.icons8.com/?size=50&id=45642&format=png&color=000000" alt="Ekonomi" class="mb-2">
            <p class="text-sm font-semibold">EKONOMI</p>
        </div>
    </div>
</div>
<!-- Table List -->
<div class="mt-8 bg-white p-6 rounded-lg shadow-md">
    <h3 class="text-2xl font-bold mb-4">Daftar Alumni</h3>
    <table id="alumniTable" class="w-full border border-gray-300">
        <thead>
            <tr class="bg-gray-800 text-white">
                <th class="p-2 border">No</th>
                <th class="p-2 border">No Alumni</th>
                <th class="p-2 border">Nama Lengkap</th>
                <th class="p-2 border">IPK</th>
                <th class="p-2 border">Angkatan</th>
                <th class="p-2 border">Tahun Lulus</th>
                <th class="p-2 border">Fakultas</th>
                <th class="p-2 border">Prodi</th>
                <th class="p-2 border">Tempat Bekerja</th>
                <th class="p-2 border">Posisi</th>
                <th class="p-2 border">Durasi Dapat Kerja</th>
            </tr>
        </thead>
        <tbody>
            @foreach($alumni as $key => $data)
            <tr class="text-center border">
                <td class="p-2 border">{{ $key + 1 }}</td>
                <td class="p-2 border">{{ $data->no_alumni }}</td>
                <td class="p-2 border">{{ $data->nama_lengkap }}</td>
                <td class="p-2 border">{{ $data->ipk }}</td>
                <td class="p-2 border">{{ $data->stambuk }}</td>
                <td class="p-2 border">{{ $data->tahun_lulus }}</td>
                <td class="p-2 border">{{ $data->fakultas }}</td>
                <td class="p-2 border">{{ $data->prodi }}</td>
                <td class="p-2 border">{{ $data->kerja_dimana }}</td>
                <td class="p-2 border">{{ $data->sebagai_apa }}</td>
                <td class="p-2 border">{{ $data->durasi_dapat_kerja ? $data->durasi_dapat_kerja . ' bulan' : '-' }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<!-- Footer -->
<footer class="mt-8 p-4 bg-gray-800 text-white text-center">
    <p>&copy; 2025 Universitas Methodist Indonesia. All rights reserved.</p>
</footer>

<!-- DataTables CSS -->
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">

<!-- jQuery dan DataTables JS -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>

<script>
    $(document).ready( function () {
        $('#alumniTable').DataTable({
            "paging": true, // Mengaktifkan pagination
            "searching": true, // Mengaktifkan fitur pencarian
            "ordering": true, // Mengaktifkan fitur sorting
            "info": true, // Menampilkan informasi jumlah data
            "lengthMenu": [10, 25, 50, 100], // Opsi jumlah data per halaman
            "language": {
                "paginate": {
                    "previous": "Sebelumnya",
                    "next": "Berikutnya"
                },
                "info": "Menampilkan _START_ sampai _END_ dari _TOTAL_ data",
                "search": "Cari:",
                "lengthMenu": "Tampilkan _MENU_ data per halaman"
            }
        });
    });
</script>


        </main>
    </div>
</body>
</html>

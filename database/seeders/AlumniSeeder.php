<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AlumniSeeder extends Seeder
{
    public function run()
    {
        DB::table('alumni')->insert([
            [
                'no_alumni' => 'A001',
                'nama_lengkap' => 'Budi Santoso',
                'ipk' => 3.75,
                'stambuk' => '2018',
                'tahun_lulus' => 2022,
                'fakultas' => 'Ilmu Komputer',
                'prodi' => 'Teknik Informatika',
                'kerja_dimana' => 'Google',
                'sebagai_apa' => 'Software Engineer',
                'durasi_dapat_kerja' => 3,
                'foto' => 'Akame.jpeg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'no_alumni' => 'A002',
                'nama_lengkap' => 'Siti Aminah',
                'ipk' => 3.60,
                'stambuk' => '2017',
                'tahun_lulus' => 2021,
                'fakultas' => ' Ilmu Komputer',
                'prodi' => 'Sistem Informasi',
                'kerja_dimana' => 'Shopee',
                'sebagai_apa' => 'IT Support',
                'durasi_dapat_kerja' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'no_alumni'=> 'A235',
                'nama_lengkap'=> 'Mccall Chan',
                'ipk'=> 3.14,
                'stambuk'=> 2017,
                'tahun_lulus'=> 2024,
                'fakultas'=> 'Ilmu Komputer',
                'prodi'=> 'Teknologi Informasi',
                'kerja_dimana'=> 'Google',
                'sebagai_apa'=> 'UI/UX Designer',
                'durasi_dapat_kerja'=> 10,
                'created_at'=> now(),
                'updated_at'=> now()
              ],
              [
                'no_alumni'=> 'A956',
                'nama_lengkap'=> 'Gill Bell',
                'ipk'=> 3.24,
                'stambuk'=> 2020,
                'tahun_lulus'=> 2022,
                'fakultas'=> 'Ilmu Komputer',
                'prodi'=> 'Pendidikan Teknologi Informasi',
                'kerja_dimana'=> 'OVO',
                'sebagai_apa'=> 'UI/UX Designer',
                'durasi_dapat_kerja'=> 5,
                'created_at'=> now(),
                'updated_at'=> now()
              ],
              [
                'no_alumni'=> 'A665',
                'nama_lengkap'=> 'Genevieve Lawrence',
                'ipk'=> 3.79,
                'stambuk'=> 2020,
                'tahun_lulus'=> 2019,
                'fakultas'=> 'Ilmu Komputer',
                'prodi'=> 'Sistem Informasi',
                'kerja_dimana'=> 'Microsoft',
                'sebagai_apa'=> 'IT Support',
                'durasi_dapat_kerja'=> 4,
                'created_at'=> now(),
                'updated_at'=> now()
              ],
              [
                'no_alumni'=> 'A515',
                'nama_lengkap'=> 'Flossie Tillman',
                'ipk'=> 3.16,
                'stambuk'=> 2016,
                'tahun_lulus'=> 2023,
                'fakultas'=> 'Ilmu Komputer',
                'prodi'=> 'Sistem Informasi',
                'kerja_dimana'=> 'Ruangguru',
                'sebagai_apa'=> 'Frontend Developer',
                'durasi_dapat_kerja'=> 8,
                'created_at'=> now(),
                'updated_at'=> now()
              ],
              [
                'no_alumni'=> 'A209',
                'nama_lengkap'=> 'Pruitt Hunter',
                'ipk'=> 2.55,
                'stambuk'=> 2017,
                'tahun_lulus'=> 2023,
                'fakultas'=> 'Ilmu Komputer',
                'prodi'=> 'Pendidikan Teknologi Informasi',
                'kerja_dimana'=> 'Tokopedia',
                'sebagai_apa'=> 'Frontend Developer',
                'durasi_dapat_kerja'=> 3,
                'created_at'=> now(),
                'updated_at'=> now()
              ],
              [
                'no_alumni'=> 'A803',
                'nama_lengkap'=> 'Merrill Ballard',
                'ipk'=> 2.78,
                'stambuk'=> 2018,
                'tahun_lulus'=> 2020,
                'fakultas'=> 'Ilmu Komputer',
                'prodi'=> 'Sistem Informasi',
                'kerja_dimana'=> 'Facebook',
                'sebagai_apa'=> 'Database Administrator',
                'durasi_dapat_kerja'=> 1,
                'created_at'=> now(),
                'updated_at'=> now()
              ],
              [
                'no_alumni'=> 'A877',
                'nama_lengkap'=> 'Hays Simmons',
                'ipk'=> 3.27,
                'stambuk'=> 2019,
                'tahun_lulus'=> 2024,
                'fakultas'=> 'Ilmu Komputer',
                'prodi'=> 'Sistem Informasi',
                'kerja_dimana'=> 'Ruangguru',
                'sebagai_apa'=> 'Database Administrator',
                'durasi_dapat_kerja'=> 6,
                'created_at'=> now(),
                'updated_at'=> now()
              ],
              [
                'no_alumni'=> 'A196',
                'nama_lengkap'=> 'Mcbride Blake',
                'ipk'=> 2.54,
                'stambuk'=> 2019,
                'tahun_lulus'=> 2022,
                'fakultas'=> 'Ilmu Komputer',
                'prodi'=> 'Pendidikan Teknologi Informasi',
                'kerja_dimana'=> 'Dana',
                'sebagai_apa'=> 'IT Support',
                'durasi_dapat_kerja'=> 10,
                'created_at'=> now(),
                'updated_at'=> now()
              ],
              [
                'no_alumni'=> 'A419',
                'nama_lengkap'=> 'Dodson Kane',
                'ipk'=> 2.58,
                'stambuk'=> 2016,
                'tahun_lulus'=> 2021,
                'fakultas'=> 'Ilmu Komputer',
                'prodi'=> 'Sistem Informasi',
                'kerja_dimana'=> 'Gojek',
                'sebagai_apa'=> 'Frontend Developer',
                'durasi_dapat_kerja'=> 1,
                'created_at'=> now(),
                'updated_at'=> now()
              ],
              [
                'no_alumni'=> 'A638',
                'nama_lengkap'=> 'Rowe Hammond',
                'ipk'=> 3.65,
                'stambuk'=> 2018,
                'tahun_lulus'=> 2023,
                'fakultas'=> 'Ilmu Komputer',
                'prodi'=> 'Teknologi Informasi',
                'kerja_dimana'=> 'Microsoft',
                'sebagai_apa'=> 'Cyber Security Analyst',
                'durasi_dapat_kerja'=> 9,
                'created_at'=> now(),
                'updated_at'=> now()
              ],
              [
                'no_alumni'=> 'A574',
                'nama_lengkap'=> 'Osborn Hebert',
                'ipk'=> 2.51,
                'stambuk'=> 2018,
                'tahun_lulus'=> 2022,
                'fakultas'=> 'Ilmu Komputer',
                'prodi'=> 'Pendidikan Teknologi Informasi',
                'kerja_dimana'=> 'Dana',
                'sebagai_apa'=> 'Product Manager',
                'durasi_dapat_kerja'=> 8,
                'created_at'=> now(),
                'updated_at'=> now()
              ],
              [
                'no_alumni'=> 'A863',
                'nama_lengkap'=> 'Cherry Flores',
                'ipk'=> 2.83,
                'stambuk'=> 2015,
                'tahun_lulus'=> 2020,
                'fakultas'=> 'Ilmu Komputer',
                'prodi'=> 'Sistem Informasi',
                'kerja_dimana'=> 'Google',
                'sebagai_apa'=> 'Backend Developer',
                'durasi_dapat_kerja'=> 5,
                'created_at'=> now(),
                'updated_at'=> now()
              ],
              [
                'no_alumni'=> 'A752',
                'nama_lengkap'=> 'Ronda Wilder',
                'ipk'=> 3.34,
                'stambuk'=> 2015,
                'tahun_lulus'=> 2020,
                'fakultas'=> 'Ilmu Komputer',
                'prodi'=> 'Sistem Informasi',
                'kerja_dimana'=> 'Google',
                'sebagai_apa'=> 'IT Support',
                'durasi_dapat_kerja'=> 1,
                'created_at'=> now(),
                'updated_at'=> now()
              ],
              [
                'no_alumni'=> 'A683',
                'nama_lengkap'=> 'Sheila Goodman',
                'ipk'=> 3.43,
                'stambuk'=> 2017,
                'tahun_lulus'=> 2022,
                'fakultas'=> 'Ilmu Komputer',
                'prodi'=> 'Sistem Informasi',
                'kerja_dimana'=> 'Microsoft',
                'sebagai_apa'=> 'Frontend Developer',
                'durasi_dapat_kerja'=> 5,
                'created_at'=> now(),
                'updated_at'=> now()
              ],
              [
                'no_alumni'=> 'A744',
                'nama_lengkap'=> 'Kristie Murray',
                'ipk'=> 3.44,
                'stambuk'=> 2016,
                'tahun_lulus'=> 2024,
                'fakultas'=> 'Ilmu Komputer',
                'prodi'=> 'Sistem Informasi',
                'kerja_dimana'=> 'Shopee',
                'sebagai_apa'=> 'Cloud Engineer',
                'durasi_dapat_kerja'=> 10,
                'created_at'=> now(),
                'updated_at'=> now()
              ],
              [
                'no_alumni'=> 'A947',
                'nama_lengkap'=> 'Elva Pugh',
                'ipk'=> 3.34,
                'stambuk'=> 2020,
                'tahun_lulus'=> 2023,
                'fakultas'=> 'Ilmu Komputer',
                'prodi'=> 'Teknologi Informasi',
                'kerja_dimana'=> 'Tokopedia',
                'sebagai_apa'=> 'Product Manager',
                'durasi_dapat_kerja'=> 1,
                'created_at'=> now(),
                'updated_at'=> now()
              ],
              [
                'no_alumni'=> 'A842',
                'nama_lengkap'=> 'Corina Clayton',
                'ipk'=> 2.67,
                'stambuk'=> 2018,
                'tahun_lulus'=> 2020,
                'fakultas'=> 'Ilmu Komputer',
                'prodi'=> 'Pendidikan Teknologi Informasi',
                'kerja_dimana'=> 'Google',
                'sebagai_apa'=> 'Database Administrator',
                'durasi_dapat_kerja'=> 6,
                'created_at'=> now(),
                'updated_at'=> now()
              ],
              [
                'no_alumni'=> 'A724',
                'nama_lengkap'=> 'Tanya Brown',
                'ipk'=> 2.68,
                'stambuk'=> 2015,
                'tahun_lulus'=> 2024,
                'fakultas'=> 'Ilmu Komputer',
                'prodi'=> 'Pendidikan Teknologi Informasi',
                'kerja_dimana'=> 'Tokopedia',
                'sebagai_apa'=> 'Frontend Developer',
                'durasi_dapat_kerja'=> 5,
                'created_at'=> now(),
                'updated_at'=> now()
              ],
              [
                'no_alumni'=> 'A107',
                'nama_lengkap'=> 'Montoya Barry',
                'ipk'=> 2.9,
                'stambuk'=> 2015,
                'tahun_lulus'=> 2020,
                'fakultas'=> 'Ilmu Komputer',
                'prodi'=> 'Pendidikan Teknologi Informasi',
                'kerja_dimana'=> 'Blibli',
                'sebagai_apa'=> 'Cyber Security Analyst',
                'durasi_dapat_kerja'=> 9,
                'created_at'=> now(),
                'updated_at'=> now()
              ],
              [
                'no_alumni'=> 'A122',
                'nama_lengkap'=> 'Jillian Haney',
                'ipk'=> 3.91,
                'stambuk'=> 2019,
                'tahun_lulus'=> 2019,
                'fakultas'=> 'Ilmu Komputer',
                'prodi'=> 'Teknologi Informasi',
                'kerja_dimana'=> 'Microsoft',
                'sebagai_apa'=> 'IT Support',
                'durasi_dapat_kerja'=> 5,
                'created_at'=> now(),
                'updated_at'=> now()
              ]

        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $mahasiswaData = [
            [
                'nama' => 'Adhwa Pranaja Widyadana',
                'npm' => '2310631170061',
                'prodi' => 'Teknik Informatika',
                'fakultas' => 'Ilmu Komputer',
                'semester' => 5,
            ],
            [
                'nama' => 'Rayen Andika Ashari',
                'npm' => '2310631170043',
                'prodi' => 'Teknik Informatika',
                'fakultas' => 'Ilmu Komputer',
                'semester' => 5,
            ],
            [
                'nama' => 'ENGY NUR RAHMADANI',
                'npm' => '2310631170013',
                'prodi' => 'Teknik Informatika',
                'fakultas' => 'Ilmu Komputer',
                'semester' => 5,
            ],
            [
                'nama' => 'Abdul Burhanudin',
                'npm' => '2310631170001',
                'prodi' => 'Teknik Informatika',
                'fakultas' => 'Ilmu Komputer',
                'semester' => 5,
            ],
            [
                'nama' => 'Fadhlurrahman Faiz',
                'npm' => '2310631170079',
                'prodi' => 'Teknik Informatika',
                'fakultas' => 'Ilmu Komputer',
                'semester' => 5,
            ],
            [
                'nama' => 'Dikry Ramdani',
                'npm' => '2310631170133',
                'prodi' => 'Teknik Informatika',
                'fakultas' => 'Ilmu Komputer',
                'semester' => 5,
            ],
            [
                'nama' => 'Fitria Hidayanti',
                'npm' => '2310631170085',
                'prodi' => 'Teknik Informatika',
                'fakultas' => 'Ilmu Komputer',
                'semester' => 5,
            ],
            [
                'nama' => 'Azka Reza Aditya',
                'npm' => '2310631170127',
                'prodi' => 'Teknik Informatika',
                'fakultas' => 'Ilmu Komputer',
                'semester' => 5,
            ],
            [
                'nama' => 'Nicholas Jeremy Hendrajaya',
                'npm' => '2310631170109',
                'prodi' => 'Teknik Informatika',
                'fakultas' => 'Ilmu Komputer',
                'semester' => 5,
            ],
            [
                'nama' => 'Haidar Putra Atmajaya',
                'npm' => '2310631170019',
                'prodi' => 'Teknik Informatika',
                'fakultas' => 'Ilmu Komputer',
                'semester' => 5,
            ],
            [
                'nama' => 'Ummu Qoshiroh Nur Aziza',
                'npm' => '2310631170055',
                'prodi' => 'Teknik Informatika',
                'fakultas' => 'Ilmu Komputer',
                'semester' => 5,
            ],
            [
                'nama' => 'Nania Azzahra',
                'npm' => '2310631170037',
                'prodi' => 'Teknik Informatika',
                'fakultas' => 'Ilmu Komputer',
                'semester' => 5,
            ],
            [
                'nama' => 'Mirza Ramadhan',
                'npm' => '2310631170139',
                'prodi' => 'Teknik Informatika',
                'fakultas' => 'Ilmu Komputer',
                'semester' => 5,
            ],
            [
                'nama' => 'Shifa Fanisatuz Zahra',
                'npm' => '2310631170049',
                'prodi' => 'Teknik Informatika',
                'fakultas' => 'Ilmu Komputer',
                'semester' => 5,
            ],
        ];

        foreach ($mahasiswaData as $Data){
            DB::table('mahasiswa')->insert(array_merge($Data, [
                'created_at' => now(),
                'updated_at' => now(),
            ]));
        }
        //
    }
}

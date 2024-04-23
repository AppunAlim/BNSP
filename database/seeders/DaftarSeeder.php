<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class DaftarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('daftar')->insert([
            'nama'=> 'Appun Alim',
            'email' => 'appun@gmail.com',
            'semester' => 6,
            'ipk' => '4.00',
            'pilihan_beasiswa' => 'KIP' && 'Akademik',
            'status_pengajuan' => 'Belum Di Verifikasi' && 'Diterima',
            'created_at' => now(),
            'updated_at' => now(),
        ]);


    }
}

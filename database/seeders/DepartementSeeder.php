<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DepartementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('departements')->insert([
            'nama' => 'UMUM & LEGAL',
            'kode' => 'UMM',
        ]);

        DB::table('departements')->insert([
            'nama' => 'Akutansi',
            'kode' => 'AKT',
        ]);
    }
}

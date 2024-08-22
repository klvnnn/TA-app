<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubDepartementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Mendapatkan ID departemen Akuntansi
        $accountingDepartmentId = DB::table('departements')->where('nama', 'Akuntansi')->value('id');
        // Mendapatkan ID departemen Legal
        $legalDepartmentId = DB::table('departements')->where('nama', 'UMUM & LEGAL')->value('id');
        
        DB::table('sub_departements')->insert([
            ['nama' => 'Keuangan','kode'=> 'KEU', 'departement_id' => $accountingDepartmentId],
            ['nama' => 'Manajemen','kode'=> 'MNJ','departement_id' => $accountingDepartmentId],
            ['nama' => 'Operasional','kode'=> 'OP','departement_id' => $legalDepartmentId],
            ['nama' => 'Personalia','kode'=> 'SDM','departement_id' => $legalDepartmentId],
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'General Manager',
                'email' => 'gm@kksp.id',
                'password' => Hash::make('gm_kksp'),
                'role' => 'manager',
            ],
            [
                'name' => 'Senior Manager',
                'email' => 'seniormanager@kksp.id',
                'password' => Hash::make('sm_kksp'),
                'role' => 'manager',
            ],
            [
                'name' => 'Admin',
                'email' => 'admin@kksp.id',
                'password' => Hash::make('admin_kksp'),
                'role' => 'admin',
            ],
        ]);
        // Mendapatkan ID departemen Akuntansi
        $accountingDepartmentId = DB::table('departements')->where('nama', 'Akuntansi')->value('id');
        // Mendapatkan ID departemen Legal
        $legalDepartmentId = DB::table('departements')->where('nama', 'UMUM & LEGAL')->value('id');
        DB::table('users')->insert([
            [
                'name' => 'Archive Akuntansi',
                'email' => 'accountant@kksp.id',
                'password' => Hash::make('acc_kksp'),
                'role' => 'archivist',
                'departement_id' => $accountingDepartmentId, // ID departemen Legal
            ],
            [
                'name' => 'Archive Umum & Legal',
                'email' => 'legal@kksp.id',
                'password' => Hash::make('legal_kksp'),
                'role' => 'archivist',
                'departement_id' => $legalDepartmentId,
            ]
        ]);
    }
}

<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'General Manager',
            'email' => 'gm@kksp.id',
            'password' => Hash::make('gm_kksp'),
            'role' => 'Manager',
        ]);
        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'admin@kksp.id',
            'password' => Hash::make('admin_kksp'),
            'role' => 'Admin',
        ]);
        DB::table('users')->insert([
            'name' => 'Archive Staff',
            'email' => 'archive@kksp.id',
            'password' => Hash::make('archive_kksp'),
            'role' => 'Archive_Staff',
        ]);

        $this->call([
            DepartementSeeder::class,
        ]);
    }
}

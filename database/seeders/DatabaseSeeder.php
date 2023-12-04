<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            ['name' => 'Admin',
            'email' => 'pbrtk03@gmail.com',
            'password' => Hash::make('911'),
            'nip' => '911',
            'unit' => 'Perwakilan BPKP Provinsi Sumbar',
            'level' => '1',
            'bidang' => 'Umum'
            ]
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        DB::table('users')->insert([
            'name' => 'Admin Pertama',
            'email' => 'sakazuki@gmail.com',
            'password' => Hash::make('admin'),
            'role' => 'admin'
        ]);
        DB::table('users')->insert([
            'name' => 'Siswa',
            'email' => 'ucok@gmail.com',
            'password' => Hash::make('adminkedua'),
            'role' => 'siswa'
        ]);
        DB::table('users')->insert([
            'name' => 'Tata Usaha',
            'email' => 'Ucok88@gmail.com',
            'password' => Hash::make('adminketiga'),
            'role' => 'tu',
        ]);
        DB::table('siswa')->insert([
            'nama' => 'Siswa 1',
            'nisn' => '00881192145261',
            'email' => 'siswa1@gmail.com',
            'kelas' => 'XI RPL 1',
            'kelamin' => 'laki-laki',
        ]);
    }
}

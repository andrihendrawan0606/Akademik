<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\User;

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
        DB::table('admin')->insert([
            'name' => 'Admin Pertama',
            'username' => 'admin',
            'email' => 'sakazuki@gmail.com',
            'password' => Hash::make('admin'),
            'level' => 'admin'
        ]);
        DB::table('admin')->insert([
            'name' => 'Siswa',
            'username' => 'siswa',
            'email' => 'ucok@gmail.com',
            'password' => Hash::make('adminkedua'),
            'level' => 'siswa'
        ]);
        DB::table('admin')->insert([
            'name' => 'walikelas',
            'username' => 'walikelas',
            'email' => 'Ucok88@gmail.com',
            'password' => Hash::make('walikelas'),
            'level' => 'walikelas',
        ]);
        DB::table('admin')->insert([
            'name' => 'Admin Baru',
            'username' => 'admin2',
            'email' => 'adminbaru@gmail.com',
            'password' => Hash::make('adminbaru'),
            'level' => 'kaprog',
        ]);
        DB::table('admin')->insert([
            'name' => 'Kiwil',
            'username' => 'guru',
            'email' => 'guru@gmail.com',
            'password' => Hash::make('guru'),
            'level' => 'guru',
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

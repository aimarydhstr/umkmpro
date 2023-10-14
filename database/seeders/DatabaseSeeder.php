<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Role;
use App\Models\Status;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        Role::create(['name' => 'Admin']);
        Role::create(['name' => 'User']);

        Status::create(['title' => 'Menunggu Verifikasi']);
        Status::create(['title' => 'Diproses']);
        Status::create(['title' => 'Diantar']);
        Status::create(['title' => 'Selesai']);
        Status::create(['title' => 'Dibatalkan']);

        User::create([
            'name' => 'Aimar Yudhistira',
            'email' => 'aimar@gmail.com',
            'role_id' => 1,
            'username' => 'aimar',
            'gender' => 'Laki-Laki',
            'photo' => 'admin.jpg',
            'password' => \Hash::make('aimar123'),
            'province' => 'Jawa Tengah',
            'city' => 'Purwokerto',
            'address' => 'Purwokerto Selatan',
            'postcode' => 'P89AQ8R',
            'phone' => '089350359114',
            'is_active' => 1,
        ]);

        User::create([
            'name' => 'Ali Syabana',
            'email' => 'ali@gmail.com',
            'role_id' => 2,
            'username' => 'ali',
            'gender' => 'Laki-Laki',
            'photo' => 'default.png',
            'password' => \Hash::make('ali123'),
            'province' => 'Jawa Tengah',
            'city' => 'Purbalingga',
            'address' => 'Purbalingga',
            'postcode' => 'KA897JP',
            'phone' => '082137148121',
            'is_active' => 1,
        ]);

        User::create([
            'name' => 'Estu Prayoga',
            'email' => 'estu@gmail.com',
            'role_id' => 1,
            'username' => 'estu',
            'gender' => 'Laki-Laki',
            'photo' => 'default.png',
            'password' => \Hash::make('estu123'),
            'province' => 'Sumatera Utara',
            'city' => 'Siborong-Borong',
            'address' => 'Isekai',
            'postcode' => 'ZS821JP',
            'phone' => '087652737112',
            'is_active' => 1,
        ]);

        User::create([
            'name' => 'Yulin Penggu',
            'email' => 'yulin@gmail.com',
            'role_id' => 1,
            'username' => 'yulin',
            'gender' => 'Laki-Laki',
            'photo' => 'default.png',
            'password' => \Hash::make('yulin123'),
            'province' => 'Papua',
            'city' => 'Jayapura',
            'address' => 'Isekai',
            'postcode' => 'JIIJ78',
            'phone' => '08324273742',
            'is_active' => 1,
        ]);

        Kabupaten::create([
            'name' => 'Banyumas',
        ]);

        Kabupaten::create([
            'name' => 'Ajibarang',
        ]);
    }
}

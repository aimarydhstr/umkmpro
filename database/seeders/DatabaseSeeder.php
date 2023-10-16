<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Role;
use App\Models\Status;
use App\Models\User;
use App\Models\Store;
use App\Models\City;
use App\Models\Province;

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
        Role::create(['name' => 'Seller']);

        Status::create(['title' => 'Menunggu Verifikasi']);
        Status::create(['title' => 'Diproses']);
        Status::create(['title' => 'Diantar']);
        Status::create(['title' => 'Selesai']);
        Status::create(['title' => 'Dibatalkan']);

        Province::create([
            'name' => 'Jawa Tengah',
        ]);
        Province::create([
            'name' => 'Jawa Barat',
        ]);
        Province::create([
            'name' => 'Jawa Timur',
        ]);

        City::create([
            'name' => 'Banjarnegara',
        ]);
        City::create([
            'name' => 'Banyumas',
        ]);
        City::create([
            'name' => 'Batang',
        ]);
        City::create([
            'name' => 'Blora',
        ]);
        City::create([
            'name' => 'Boyolali',
        ]);
        City::create([
            'name' => 'Brebes',
        ]);
        City::create([
            'name' => 'Cilacap',
        ]);
        City::create([
            'name' => 'Demak',
        ]);
        City::create([
            'name' => 'Grobogan',
        ]);
        City::create([
            'name' => 'Jepara',
        ]);
        City::create([
            'name' => 'Karanganyar',
        ]);
        City::create([
            'name' => 'Kebumen',
        ]);
        City::create([
            'name' => 'Kendal',
        ]);
        City::create([
            'name' => 'Klaten',
        ]);
        City::create([
            'name' => 'Kudus',
        ]);
        City::create([
            'name' => 'Magelang',
        ]);
        City::create([
            'name' => 'Pati',
        ]);
        City::create([
            'name' => 'Pekalongan',
        ]);
        City::create([
            'name' => 'Pemalang',
        ]);
        City::create([
            'name' => 'Purbalingga',
        ]);
        City::create([
            'name' => 'Purworejo',
        ]);
        City::create([
            'name' => 'Rembang',
        ]);
        City::create([
            'name' => 'Semarang',
        ]);
        City::create([
            'name' => 'Sragen',
        ]);
        City::create([
            'name' => 'Sukoharjo',
        ]);
        City::create([
            'name' => 'Tegal',
        ]);
        City::create([
            'name' => 'Temanggung',
        ]);
        City::create([
            'name' => 'Wonogiri',
        ]);
        City::create([
            'name' => 'Wonosobo',
        ]);
        City::create([
            'name' => 'Magelang',
        ]);
        City::create([
            'name' => 'Pekalongan',
        ]);
        City::create([
            'name' => 'Salatiga',
        ]);
        City::create([
            'name' => 'Semarang',
        ]);
        City::create([
            'name' => 'Surakarta',
        ]);
        City::create([
            'name' => 'Tegal',
        ]);

        City::create([
            'name' => 'Bangkalan',
        ]);
        City::create([
            'name' => 'Banyuwangi',
        ]);
        City::create([
            'name' => 'Blitar',
        ]);
        City::create([
            'name' => 'Bojonegoro',
        ]);
        City::create([
            'name' => 'Bondowoso',
        ]);
        City::create([
            'name' => 'Gresik',
        ]);
        City::create([
            'name' => 'Jember',
        ]);
        City::create([
            'name' => 'Jombang',
        ]);
        City::create([
            'name' => 'Kediri',
        ]);
        City::create([
            'name' => 'Lamongan',
        ]);
        City::create([
            'name' => 'Lumajang',
        ]);
        City::create([
            'name' => 'Madiun',
        ]);
        City::create([
            'name' => 'Magetan',
        ]);
        City::create([
            'name' => 'Malang',
        ]);
        City::create([
            'name' => 'Mojokerto',
        ]);
        City::create([
            'name' => 'Nganjuk',
        ]);
        City::create([
            'name' => 'Ngawi',
        ]);
        City::create([
            'name' => 'Pacitan',
        ]);
        City::create([
            'name' => 'Pamekasan',
        ]);
        City::create([
            'name' => 'Pasuruan',
        ]);
        City::create([
            'name' => 'Ponorogo',
        ]);
        City::create([
            'name' => 'Probolinggo',
        ]);
        City::create([
            'name' => 'Sampang',
        ]);
        City::create([
            'name' => 'Sidoarjo',
        ]);
        City::create([
            'name' => 'Situbondo',
        ]);
        City::create([
            'name' => 'Sumenep',
        ]);
        City::create([
            'name' => 'Trenggalek',
        ]);
        City::create([
            'name' => 'Tuban',
        ]);
        City::create([
            'name' => 'Tulungagung',
        ]);

        City::create([
            'name' => 'Batu',
        ]);
        City::create([
            'name' => 'Blitar',
        ]);
        City::create([
            'name' => 'Kediri',
        ]);
        City::create([
            'name' => 'Madiun',
        ]);
        City::create([
            'name' => 'Malang',
        ]);
        City::create([
            'name' => 'Mojokerto',
        ]);
        City::create([
            'name' => 'Pasuruan',
        ]);
        City::create([
            'name' => 'Probolinggo',
        ]);
        City::create([
            'name' => 'Surabaya',
        ]);

        City::create([
            'name' => 'Kab. Bandung',
        ]);
        City::create([
            'name' => 'Bandung Barat',
        ]);
        City::create([
            'name' => 'Bekasi',
        ]);
        City::create([
            'name' => 'Bogor',
        ]);
        City::create([
            'name' => 'Ciamis',
        ]);
        City::create([
            'name' => 'Cianjur',
        ]);
        City::create([
            'name' => 'Cirebon',
        ]);
        City::create([
            'name' => 'Garut',
        ]);
        City::create([
            'name' => 'Indramayu',
        ]);
        City::create([
            'name' => 'Karawang',
        ]);
        City::create([
            'name' => 'Kuningan',
        ]);
        City::create([
            'name' => 'Majalengka',
        ]);
        City::create([
            'name' => 'Pangandaran',
        ]);
        City::create([
            'name' => 'Purwakarta',
        ]);
        City::create([
            'name' => 'Subang',
        ]);
        City::create([
            'name' => 'Sukabumi',
        ]);
        City::create([
            'name' => 'Sumedang',
        ]);
        City::create([
            'name' => 'Tasikmalaya',
        ]);


        City::create([
            'name' => 'Kota Bandung',
        ]);
        City::create([
            'name' => 'Banjar',
        ]);
        City::create([
            'name' => 'Bekasi',
        ]);
        City::create([
            'name' => 'Bogor',
        ]);
        City::create([
            'name' => 'Cimahi',
        ]);
        City::create([
            'name' => 'Cirebon',
        ]);
        City::create([
            'name' => 'Depok',
        ]);
        City::create([
            'name' => 'Sukabumi',
        ]);
        City::create([
            'name' => 'Tasikmalaya',
        ]);

        User::create([
            'name' => 'Aimar Yudhistira',
            'email' => 'aimar@gmail.com',
            'role_id' => 1,
            'username' => 'aimar',
            'gender' => 'Laki-Laki',
            'photo' => 'admin.jpg',
            'password' => \Hash::make('aimar123'),
            'province_id' => 1,
            'city_id' => 2,
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
            'province_id' => 1,
            'city_id' => 2,
            'address' => 'Purwokerto Selatan',
            'postcode' => 'KA897JP',
            'phone' => '082137148121',
            'is_active' => 1,
        ]);

        User::create([
            'name' => 'Estu Prayoga',
            'email' => 'estu@gmail.com',
            'role_id' => 3,
            'username' => 'estu',
            'gender' => 'Laki-Laki',
            'photo' => 'default.png',
            'password' => \Hash::make('estu123'),
            'province_id' => 2,
            'city_id' => 3,
            'address' => 'Isekai',
            'postcode' => 'ZS821JP',
            'phone' => '087652737112',
            'is_active' => 1,
        ]);

        Store::create([
            'name' => 'EstuStore',
            'seller_id' => 3,
            'description' => 'Ini toko saya',
            'slug' => 'estustore',
            'photo' => 'default.png',
            'province_id' => 1,
            'city_id' => 2,
            'address' => 'Isekai',
            'phone' => '087652737112',
            'is_active' => 1,
        ]);
    }
}

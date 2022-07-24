<?php

namespace Database\Seeders;

use App\Models\Karya;
use App\Models\Category;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
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

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);


        User::create([
            'nama' => 'Irfan',
            'slug' => 'irfan',
            'telpon' => '085931008476',
            'alamat' => 'bantul',
            'email' => 'irfan@gmail.com',
            'password' => bcrypt('12345'),

        ]);
        User::create([
            'nama' => 'Nudin',
            'slug' => 'nudin',
            'telpon' => '085931008409',
            'alamat' => 'sleman',
            'email' => 'nudin@gmail.com',
            'password' => bcrypt('12345'),

        ]);

        User::create([
            'nama' => 'Ihsan',
            'slug' => 'ihsan',
            'telpon' => '085931067409',
            'alamat' => 'jogja',
            'email' => 'ihsan@gmail.com',
            'password' => bcrypt('12345'),

        ]);

        Category::create([
            'nama' => 'Lukisan',
            'slug' => 'lukisan',
        ]);

        Category::create([
            'nama' => 'Patung',
            'slug' => 'patung',
        ]);

        Karya::create([
            'judul' => 'Hutan Indah',
            'slug' => 'hutan-indah',
            'media' => 'kanvas',
            'ukuran' => '200x200',
            'tahun' => '2016',
            'deskripsi' => 'Hutan sangat indah bet',
            'category_id' => 1,
            'user_id' => 1,

        ]);
        Karya::create([
            'judul' => 'Sungai Indah',
            'slug' => 'sungai-indah',
            'media' => 'kanvas',
            'ukuran' => '200x200',
            'tahun' => '2015',
            'deskripsi' => 'Sungai sangat indah bet',
            'category_id' => 1,
            'user_id' => 2,

        ]);
        Karya::create([
            'judul' => 'Langit Indah',
            'slug' => 'langit-indah',
            'media' => 'semen',
            'ukuran' => '1meter',
            'tahun' => '2015',
            'deskripsi' => 'langit sangat indah bet',
            'category_id' => 2,
            'user_id' => 1,

        ]);
        Karya::create([
            'judul' => 'Bunga Indah',
            'slug' => 'bunga-indah',
            'media' => 'semen',
            'ukuran' => '1meter',
            'tahun' => '2022',
            'deskripsi' => 'Bunga sangat indah bet',
            'category_id' => 2,
            'user_id' => 2,

        ]);
        Karya::create([
            'judul' => 'Daun Indah',
            'slug' => 'Daun-indah',
            'media' => 'kanvas',
            'ukuran' => '100x100',
            'tahun' => '2022',
            'deskripsi' => 'Bunga sangat indah bet',
            'category_id' => 1,
            'user_id' => 3,

        ]);

    }
}

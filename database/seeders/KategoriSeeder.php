<?php

namespace Database\Seeders;

use App\Models\Kategori;
use Illuminate\Database\Seeder;

class KategoriSeeder extends Seeder
{
    public function run(): void
    {
        $categories = [
            'Makanan',
            'Minuman',
            'Cozy Sips',
        ];

        foreach ($categories as $categoryName) {
            Kategori::firstOrCreate([
                'nama_kategori' => $categoryName,
            ]);
        }
    }
}

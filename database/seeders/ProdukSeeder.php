<?php

namespace Database\Seeders;

use App\Models\Kategori;
use App\Models\Produk;
use Illuminate\Database\Seeder;

class ProdukSeeder extends Seeder
{
    public function run(): void
    {
        $makanan = Kategori::where('nama_kategori', 'Makanan')->first();
        $minuman = Kategori::where('nama_kategori', 'Minuman')->first();
        $cozy    = Kategori::where('nama_kategori', 'Cozy Sips')->first();

        $products = [
            // Makanan
            ['kategori_id' => $makanan?->id, 'nama' => 'Nasi Goreng Spesial', 'harga' => 25000, 'foto' => null],
            ['kategori_id' => $makanan?->id, 'nama' => 'Mie Goreng Pedas', 'harga' => 22000, 'foto' => null],
            ['kategori_id' => $makanan?->id, 'nama' => 'Sandwich Club', 'harga' => 30000, 'foto' => null],
            ['kategori_id' => $makanan?->id, 'nama' => 'Croissant Butter', 'harga' => 18000, 'foto' => null],
            ['kategori_id' => $makanan?->id, 'nama' => 'Pisang Goreng Keju', 'harga' => 15000, 'foto' => null],
            ['kategori_id' => $makanan?->id, 'nama' => 'Roti Bakar Coklat', 'harga' => 17000, 'foto' => null],
            ['kategori_id' => $makanan?->id, 'nama' => 'Indomie Telur', 'harga' => 15000, 'foto' => null],
            ['kategori_id' => $makanan?->id, 'nama' => 'French Fries', 'harga' => 20000, 'foto' => null],

            // Minuman
            ['kategori_id' => $minuman?->id, 'nama' => 'Espresso', 'harga' => 18000, 'foto' => null],
            ['kategori_id' => $minuman?->id, 'nama' => 'Cappuccino', 'harga' => 25000, 'foto' => null],
            ['kategori_id' => $minuman?->id, 'nama' => 'Caffe Latte', 'harga' => 27000, 'foto' => null],
            ['kategori_id' => $minuman?->id, 'nama' => 'Americano', 'harga' => 20000, 'foto' => null],
            ['kategori_id' => $minuman?->id, 'nama' => 'Teh Tarik', 'harga' => 15000, 'foto' => null],
            ['kategori_id' => $minuman?->id, 'nama' => 'Matcha Latte', 'harga' => 28000, 'foto' => null],
            ['kategori_id' => $minuman?->id, 'nama' => 'Es Lemon Tea', 'harga' => 14000, 'foto' => null],
            ['kategori_id' => $minuman?->id, 'nama' => 'Hot Chocolate', 'harga' => 24000, 'foto' => null],

            // Cozy Sips
            ['kategori_id' => $cozy?->id, 'nama' => 'Signature Latte', 'harga' => 32000, 'foto' => null],
            ['kategori_id' => $cozy?->id, 'nama' => 'Caramel Macchiato', 'harga' => 35000, 'foto' => null],
            ['kategori_id' => $cozy?->id, 'nama' => 'Vanilla Frappe', 'harga' => 30000, 'foto' => null],
            ['kategori_id' => $cozy?->id, 'nama' => 'Mocha Bliss', 'harga' => 33000, 'foto' => null],
            ['kategori_id' => $cozy?->id, 'nama' => 'Rose Coffee', 'harga' => 36000, 'foto' => null],
            ['kategori_id' => $cozy?->id, 'nama' => 'Honey Brew', 'harga' => 29000, 'foto' => null],
            ['kategori_id' => $cozy?->id, 'nama' => 'Affogato', 'harga' => 30000, 'foto' => null],
            ['kategori_id' => $cozy?->id, 'nama' => 'Dirty Chai', 'harga' => 28000, 'foto' => null],
        ];

        foreach ($products as $product) {
            if ($product['kategori_id']) {
                Produk::firstOrCreate(
                    [
                        'kategori_id' => $product['kategori_id'],
                        'nama'        => $product['nama'],
                    ],
                    [
                        'harga' => $product['harga'],
                        'foto'  => $product['foto'],
                    ]
                );
            }
        }
    }
}

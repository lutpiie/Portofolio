<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuController extends Controller
{
    // Halaman Menu (3 kartu kategori)
    public function index()
    {
        return view('menu');
    }

    // Halaman Detail Menu per kategori
    public function show($category)
    {
        // Data menu dalam array
        $menuData = [
            'makanan' => [
                'title' => 'Makanan',
                'items' => [
                    ['name' => 'Nasi Goreng Spesial', 'price' => 'Rp 25.000', 'desc' => 'Nasi goreng telur, ayam & kerupuk'],
                    ['name' => 'Mie Goreng Pedas', 'price' => 'Rp 22.000', 'desc' => 'Mie goreng bumbu pedas khas'],
                    ['name' => 'Sandwich Club', 'price' => 'Rp 30.000', 'desc' => 'Triple decker ayam & sayuran'],
                    ['name' => 'Croissant Butter', 'price' => 'Rp 18.000', 'desc' => 'Croissant renyah premium butter'],
                    ['name' => 'Pisang Goreng Keju', 'price' => 'Rp 15.000', 'desc' => 'Pisang goreng crispy tabur keju'],
                    ['name' => 'Roti Bakar Coklat', 'price' => 'Rp 17.000', 'desc' => 'Roti bakar coklat leleh'],
                    ['name' => 'Indomie Telur', 'price' => 'Rp 15.000', 'desc' => 'Indomie goreng telur ceplok'],
                    ['name' => 'French Fries', 'price' => 'Rp 20.000', 'desc' => 'Kentang goreng saus spesial'],
                ]
            ],
            'minuman' => [
                'title' => 'Minuman',
                'items' => [
                    ['name' => 'Espresso', 'price' => 'Rp 18.000', 'desc' => 'Single shot espresso premium'],
                    ['name' => 'Cappuccino', 'price' => 'Rp 25.000', 'desc' => 'Espresso + steamed milk & foam'],
                    ['name' => 'Caffe Latte', 'price' => 'Rp 27.000', 'desc' => 'Espresso + banyak steamed milk'],
                    ['name' => 'Americano', 'price' => 'Rp 20.000', 'desc' => 'Espresso + hot water'],
                    ['name' => 'Teh Tarik', 'price' => 'Rp 15.000', 'desc' => 'Teh hitam + susu kental'],
                    ['name' => 'Matcha Latte', 'price' => 'Rp 28.000', 'desc' => 'Matcha premium + susu segar'],
                    ['name' => 'Es Lemon Tea', 'price' => 'Rp 14.000', 'desc' => 'Teh es perasan lemon segar'],
                    ['name' => 'Hot Chocolate', 'price' => 'Rp 24.000', 'desc' => 'Coklat hangat whipped cream'],
                ]
            ],
            'cozy' => [
                'title' => 'Cozy Sips',
                'items' => [
                    ['name' => 'Signature Latte', 'price' => 'Rp 32.000', 'desc' => 'Resep rahasia barista kami'],
                    ['name' => 'Caramel Macchiato', 'price' => 'Rp 35.000', 'desc' => 'Espresso + caramel & vanilla'],
                    ['name' => 'Vanilla Frappe', 'price' => 'Rp 30.000', 'desc' => 'Blended ice vanilla & kopi'],
                    ['name' => 'Mocha Bliss', 'price' => 'Rp 33.000', 'desc' => 'Coklat & espresso sempurna'],
                    ['name' => 'Rose Coffee', 'price' => 'Rp 36.000', 'desc' => 'Kopi aroma rose yang elegan'],
                    ['name' => 'Honey Brew', 'price' => 'Rp 29.000', 'desc' => 'Cold brew + madu asli pilihan'],
                    ['name' => 'Affogato', 'price' => 'Rp 30.000', 'desc' => 'Ice cream + espresso shot'],
                    ['name' => 'Dirty Chai', 'price' => 'Rp 28.000', 'desc' => 'Chai latte + espresso shot'],
                ]
            ],
        ];

        // Kalau kategori tidak ada, kembali ke menu
        if (!array_key_exists($category, $menuData)) {
            return redirect()->route('menu');
        }

        $title = $menuData[$category]['title'];
        $items = $menuData[$category]['items'];

        return view('menu-detail', compact('title', 'items'));
    }
}
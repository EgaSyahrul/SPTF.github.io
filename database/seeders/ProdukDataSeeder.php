<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProdukDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $RegisData = [
            [
                'nama' => 'Tas Skechers',
                'gambar' => 'Product/1.png',
                'qty' => '5',
                'harga' => '276000',
                'warna' => 'Hitam',
                'deskripsi' => 'Ini Tas Skechers Hitam',
                'created_by' => '1',
                'created_at' => now(),
                'updated_at' => now(),
                // 'id_kategori'=>'1'
            ],
            [
                'nama' => 'Tas Guteninc',
                'gambar' => 'Product/2.png',
                'qty' => '5',
                'harga' => '236000',
                'warna' => 'Abu-Abu',
                'deskripsi' => 'Ini Tas Guteninc Abu-Abu',
                'created_by' => '1',
                'created_at' => now(),
                'updated_at' => now(),
                // 'id_kategori'=>'1'
            ],
            [
                'nama' => 'Tas Gunung YMG',
                'gambar' => 'Product/3.png',
                'qty' => '5',
                'harga' => '148500',
                'warna' => 'Hitam',
                'deskripsi' => 'Ini Tas Gunung YMG Hitam',
                'created_by' => '1',
                'created_at' => now(),
                'updated_at' => now(),
                // 'id_kategori'=>'1'
            ],
            [
                'nama' => 'Tas Arthas Abu Muda',
                'gambar' => 'Product/4.png',
                'qty' => '5',
                'harga' => '123500',
                'warna' => 'Abu-Abu',
                'deskripsi' => 'Ini Tas Arthas Abu Muda',
                'created_by' => '1',
                'created_at' => now(),
                'updated_at' => now(),
                // 'id_kategori'=>'1'
            ],
            [
                'nama' => 'Slimbag Arrow Vthree Coklat',
                'gambar' => 'Product/5.png',
                'qty' => '5',
                'harga' => '44990',
                'warna' => 'Caklat',
                'deskripsi' => 'Ini Slimbag Arrow Vthree Coklat',
                'created_by' => '1',
                'created_at' => now(),
                'updated_at' => now(),
                // 'id_kategori'=>'2'
            ],
            [
                'nama' => 'Slimbag Newzi biru',
                'gambar' => 'Product/6.png',
                'qty' => '5',
                'harga' => '63000',
                'warna' => 'biru',
                'deskripsi' => 'Ini Slimbag Newzi biru',
                'created_by' => '1',
                'created_at' => now(),
                'updated_at' => now(),
                // 'id_kategori'=>'2'
            ],
            [
                'nama' => 'Clutch Canvas Cordura biru',
                'gambar' => 'Product/7.png',
                'qty' => '5',
                'harga' => '79990',
                'warna' => 'biru',
                'deskripsi' => 'Ini Clutch Canvas Cordura biru',
                'created_by' => '1',
                'created_at' => now(),
                'updated_at' => now(),
                // 'id_kategori'=>'5'
            ],
            [
                'nama' => 'Clutch Delco Kulit',
                'gambar' => 'Product/8.png',
                'qty' => '5',
                'harga' => '223000',
                'warna' => 'Coklat',
                'deskripsi' => 'Ini Clutch Delco Kulit',
                'created_by' => '1',
                'created_at' => now(),
                'updated_at' => now(),
                // 'id_kategori'=>'5'
            ],
            [
                'nama' => 'Handbag Heylook biru',
                'gambar' => 'Product/9.png',
                'qty' => '5',
                'harga' => '55000',
                'warna' => 'Biru',
                'deskripsi' => 'Ini Handbag Heylook biru',
                'created_by' => '1',
                'created_at' => now(),
                'updated_at' => now(),
                // 'id_kategori'=>'5'
            ],
            [
                'nama' => 'Tas Ransel biru',
                'gambar' => 'Product/10.png',
                'qty' => '5',
                'harga' => '279990',
                'warna' => 'Biru',
                'deskripsi' => 'Ini Tas Ransel biru',
                'created_by' => '1',
                'created_at' => now(),
                'updated_at' => now(),
                // 'id_kategori'=>'1'
            ],
            [
                'nama' => 'Tas Pedro Kulit Coklat',
                'gambar' => 'Product/17.png',
                'qty' => '5',
                'harga' => '1700000',
                'warna' => 'Coklat',
                'deskripsi' => 'Ini Tas Pedro Kulit Coklat',
                'created_by' => '1',
                'created_at' => now(),
                'updated_at' => now(),
                // 'id_kategori'=>'5'
            ],
            [
                'nama' => 'Eiger Wanderhaul',
                'gambar' => 'Product/18.png',
                'qty' => '5',
                'harga' => '279000',
                'warna' => 'Abu-Abu',
                'deskripsi' => 'Ini Eiger Wanderhaul',
                'created_by' => '1',
                'created_at' => now(),
                'updated_at' => now(),
                // 'id_kategori'=>'2'
            ],
            [
                'nama' => 'Strap Army Nylon',
                'gambar' => 'Product/16.png',
                'qty' => '5',
                'harga' => '15000',
                'warna' => 'Abu-Abu',
                'deskripsi' => 'Ini Strap Army Nylon',
                'created_by' => '1',
                'created_at' => now(),
                'updated_at' => now(),
                // 'id_kategori'=>'3'
            ],
            [
                'nama' => 'Bartekh Shoulder Bag 2,5cm',
                'gambar' => 'Product/20.png',
                'qty' => '5',
                'harga' => '25000',
                'warna' => 'Hitam',
                'deskripsi' => 'Ini Bartekh Shoulder Bag 2,5cm',
                'created_by' => '1',
                'created_at' => now(),
                'updated_at' => now(),
                // 'id_kategori'=>'6'
            ],
            [
                'nama' => 'Strap Hitam YKK',
                'gambar' => 'Product/21.png',
                'qty' => '5',
                'harga' => '10000',
                'warna' => 'Hitam',
                'deskripsi' => 'Ini Strap Hitam YKK',
                'created_by' => '1',
                'created_at' => now(),
                'updated_at' => now(),
                // 'id_kategori'=>'6'
            ],
            [
                'nama' => 'Humblezing Backpack Funken',
                'gambar' => 'Product/22.png',
                'qty' => '5',
                'harga' => '315000',
                'warna' => 'Hitam',
                'deskripsi' => 'Ini Humblezing Backpack Funken',
                'created_by' => '1',
                'created_at' => now(),
                'updated_at' => now(),
                // 'id_kategori'=>'1'
            ],
            [
                'nama' => 'Waistbag Lova New',
                'gambar' => 'Product/23.png',
                'qty' => '5',
                'harga' => '35000',
                'warna' => 'Hijau',
                'deskripsi' => 'Ini Waistbag Lova New',
                'created_by' => '1',
                'created_at' => now(),
                'updated_at' => now(),
                // 'id_kategori'=>'3'
            ],
            [
                'nama' => 'SLING BAG EIGER ALPINE W CROSS',
                'gambar' => 'Product/24.png',
                'qty' => '5',
                'harga' => '269000',
                'warna' => 'biru',
                'deskripsi' => 'Ini SLING BAG EIGER ALPINE W CROSS',
                'created_by' => '1',
                'created_at' => now(),
                'updated_at' => now(),
                // 'id_kategori'=>'3'
            ],
            [
                'nama' => 'Chest Bag Tactical Premium',
                'gambar' => 'Product/25.png',
                'qty' => '5',
                'harga' => '83990',
                'warna' => 'Hijau',
                'deskripsi' => 'Ini Chest Bag Tactical Premium',
                'created_by' => '1',
                'created_at' => now(),
                'updated_at' => now(),
                // 'id_kategori'=>'3'
            ],
            [
                'nama' => 'Totebag Pria Osgood',
                'gambar' => 'Product/26.png',
                'qty' => '5',
                'harga' => '47990',
                'warna' => 'Hitam',
                'deskripsi' => 'Ini Totebag Pria Osgood',
                'created_by' => '1',
                'created_at' => now(),
                'updated_at' => now(),
                // 'id_kategori'=>'4'
            ],
            [
                'nama' => 'Waistbag Lova New',
                'gambar' => 'Product/28.png',
                'qty' => '5',
                'harga' => '35000',
                'warna' => 'Hitam',
                'deskripsi' => 'Ini Waistbag Lova New',
                'created_by' => '1',
                'created_at' => now(),
                'updated_at' => now(),
                // 'id_kategori'=>'3'
            ],
            [
                'nama' => 'Chest Bag Tactical NEISDA EMERLAND',
                'gambar' => 'Product/29.png',
                'qty' => '5',
                'harga' => '87000',
                'warna' => 'Hijau',
                'deskripsi' => 'Ini Chest Bag Tactical NEISDA EMERLAND',
                'created_by' => '1',
                'created_at' => now(),
                'updated_at' => now(),
                // 'id_kategori'=>'3'
            ],
            [
                'nama' => 'ChestBag Outdoor',
                'gambar' => 'Product/30.png',
                'qty' => '5',
                'harga' => '35000',
                'warna' => 'Hitam',
                'deskripsi' => 'Ini ChestBag Outdoor Hitam',
                'created_by' => '1',
                'created_at' => now(),
                'updated_at' => now(),
                // 'id_kategori'=>'3'
            ],
            [
                'nama' => 'Chestbag Buffback Duterte',
                'gambar' => 'Product/31.png',
                'qty' => '5',
                'harga' => '45000',
                'warna' => 'Abu-Abu',
                'deskripsi' => 'Ini Chestbag Buffback Duterte',
                'created_by' => '1',
                'created_at' => now(),
                'updated_at' => now(),
                // 'id_kategori'=>'3'
            ],
            [
                'nama' => 'Scratchline Tourmaline Duffle Bag',
                'gambar' => 'Product/32.png',
                'qty' => '5',
                'harga' => '185000',
                'warna' => 'Hitam',
                'deskripsi' => 'Ini Scratchline Tourmaline Duffle Bag Hitam',
                'created_by' => '1',
                'created_at' => now(),
                'updated_at' => now(),
                // 'id_kategori'=>'2'
            ],
            [
                'nama' => 'Tote Bag',
                'gambar' => 'Product/11.png',
                'qty' => '5',
                'harga' => '85000',
                'warna' => 'Hitam',
                'deskripsi' => 'Ini Tote Bag Hitam',
                'created_by' => '1',
                'created_at' => now(),
                'updated_at' => now(),
                // 'id_kategori'=>'4'
            ],
            [
                'nama' => 'Kanji Clutch Bag',
                'gambar' => 'Product/12.png',
                'qty' => '5',
                'harga' => '49990',
                'warna' => 'Biru',
                'deskripsi' => 'Ini Kanji Clutch Bag',
                'created_by' => '1',
                'created_at' => now(),
                'updated_at' => now(),
                // 'id_kategori'=>'5'
            ],
            [
                'nama' => 'Tas Hitam',
                'gambar' => 'Product/15.png',
                'qty' => '5',
                'harga' => '79000',
                'warna' => 'Hitam',
                'deskripsi' => 'Ini Tas Hitam',
                'created_by' => '1',
                'created_at' => now(),
                'updated_at' => now(),
                // 'id_kategori'=>'3'
            ],
            [
                'nama' => 'pouch Kulit',
                'gambar' => 'Product/14.png',
                'qty' => '5',
                'harga' => '40000',
                'warna' => 'Coklat',
                'deskripsi' => 'Ini pouch Kulit Coklat',
                'created_by' => '1',
                'created_at' => now(),
                'updated_at' => now(),
                // 'id_kategori'=>'5'
            ],
            [
                'nama' => 'Waist Bag Hitam',
                'gambar' => 'Product/13.png',
                'qty' => '5',
                'harga' => '24990',
                'warna' => 'Hitam',
                'deskripsi' => 'Ini Waist Bag Hitam',
                'created_by' => '1',
                'created_at' => now(),
                'updated_at' => now(),
                // 'id_kategori'=>'3'
            ],
            [
                'nama' => 'Waist Bag',
                'gambar' => 'Product/19.png',
                'qty' => '5',
                'harga' => '75000',
                'warna' => 'Abu-Abu',
                'deskripsi' => 'Ini Waist Bag',
                'created_by' => '1',
                'created_at' => now(),
                'updated_at' => now(),
                // 'id_kategori'=>'5'
            ],
            [
                'nama' => 'Strap Hitam Nylon',
                'gambar' => 'Product/27.png',
                'qty' => '5',
                'harga' => '15000',
                'warna' => 'Hitam',
                'deskripsi' => 'Ini Strap Hitam Nylon',
                'created_by' => '1',
                'created_at' => now(),
                'updated_at' => now(),
                // 'id_kategori'=>'6'
            ],
        ];
        DB::table('produk')->insert($RegisData);
    }
}

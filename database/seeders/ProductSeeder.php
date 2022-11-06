<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;
class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $products = [[
            'categoryID'=> 1,
            'Pname' => 'Samsung CRG50 24 Curved Gaming Monitor 144Hz',
            'description' => 'Samsung CRG50 24 Curved Gaming Monitor 144Hz',
            'image' => '\assets\image\monitor1.jpg',
            'stock' => 999,
            'price' => 4000,
            'MSRP' => 4500
        ],
        [
            'categoryID'=> 4,
            'Pname' => 'headset',
            'description' => 'headset',
            'image' => '\assets\image\C_headset.png',
            'stock' => 999,
            'price' => 4000,
            'MSRP' => 4500
        ],
        [
            'categoryID'=> 3,
            'Pname' => 'keyboard',
            'description' => 'keyboard',
            'image' => '\assets\image\C_keyboard.jpg',
            'stock' => 999,
            'price' => 4000,
            'MSRP' => 4500
        ],
        [
            'categoryID'=> 5,
            'Pname' => 'microphone',
            'description' => 'microphone',
            'image' => '\assets\image\C_microphone.jpg',
            'stock' => 999,
            'price' => 4000,
            'MSRP' => 4500
        ],
        [
            'categoryID'=> 1,
            'Pname' => 'monitor',
            'description' => 'monitor',
            'image' => '\assets\image\C_monitor.jpg',
            'stock' => 999,
            'price' => 4000,
            'MSRP' => 4500
        ],
        [
            'categoryID'=> 2,
            'Pname' => 'mouse',
            'description' => 'mouse',
            'image' => '\assets\image\C_mouse.jpg',
            'stock' => 999,
            'price' => 4000,
            'MSRP' => 4500
        ],[
            'categoryID'=> 6,
            'Pname' => 'speaker',
            'description' => 'speaker',
            'image' => '\assets\image\C_speaker.jpg',
            'stock' => 999,
            'price' => 4000,
            'MSRP' => 4500
        ],
        ];
        foreach ($products as $key => $value) {
            Product::create($value);
        }
    }
}





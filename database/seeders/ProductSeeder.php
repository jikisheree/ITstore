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
            'productCode' => 1,
            'image' => '\assets\image\monitor1.jpg',
            'MSRP' => 4500,
            'price' => 4000,
            'stock' => 999
        ],
        [
            'categoryID'=> 4,
            'Pname' => 'headset',
            'description' => 'headset',
            'productCode' => 2,
            'image' => '\assets\image\C_headset.png',
            'MSRP' => 4500,
            'price' => 4000,
            'stock' => 999
        ],
        [
            'categoryID'=> 3,
            'Pname' => 'keyboard',
            'description' => 'keyboard',
            'productCode' => 3,
            'image' => '\assets\image\C_keyboard.jpg',
            'MSRP' => 4500,
            'price' => 4000,
            'stock' => 999
        ],
        [
            'categoryID'=> 5,
            'Pname' => 'microphone',
            'description' => 'microphone',
            'productCode' => 4,
            'image' => '\assets\image\C_microphone.jpg',
            'MSRP' => 4500,
            'price' => 4000,
            'stock' => 999
        ],
        [
            'categoryID'=> 1,
            'Pname' => 'monitor',
            'description' => 'monitor',
            'productCode' => 5,
            'image' => '\assets\image\C_monitor.jpg',
            'MSRP' => 4500,
            'price' => 4000,
            'stock' => 999
        ],
        [
            'categoryID'=> 2,
            'Pname' => 'mouse',
            'description' => 'mouse',
            'productCode' => 6,
            'image' => '\assets\image\C_mouse.jpg',
            'MSRP' => 4500,
            'price' => 4000,
            'stock' => 999
        ],[
            'categoryID'=> 6,
            'Pname' => 'speaker',
            'description' => 'speaker',
            'productCode' => 7,
            'image' => '\assets\image\C_speaker.jpeg',
            'MSRP' => 4500,
            'price' => 4000,
            'stock' => 999
        ],
        ];
        foreach ($products as $key => $value) {
            Product::create($value);
        }
    }
}





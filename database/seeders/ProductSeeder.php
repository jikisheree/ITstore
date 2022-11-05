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
            'productCode' =>'Samsung CRG50',
            'Pname' => 'Samsung CRG50 24 Curved Gaming Monitor 144Hz',
            'description' => 'Samsung CRG50 24 Curved Gaming Monitor 144Hz',
            'image' => '\assets\image\monitor1.jpg',
            'stock' => 999,
            'price' => 4000,
            'MSRP' => 4500
        ],
        [
            'categoryID'=> 4,
            'productCode' =>'headset',
            'Pname' => 'Samsung CRG50 24 Curved Gaming Monitor 144Hz',
            'description' => 'Samsung CRG50 24 Curved Gaming Monitor 144Hz',
            'image' => '\assets\image\C_headset.png',
            'stock' => 999,
            'price' => 4000,
            'MSRP' => 4500
        ],
        [
            'categoryID'=> 3,
            'productCode' =>'keyboard',
            'Pname' => 'Samsung CRG50 24 Curved Gaming Monitor 144Hz',
            'description' => 'Samsung CRG50 24 Curved Gaming Monitor 144Hz',
            'image' => '\assets\image\C_keyboard.png',
            'stock' => 999,
            'price' => 4000,
            'MSRP' => 4500
        ],
        [
            'categoryID'=> 5,
            'productCode' =>'microphone',
            'Pname' => 'Samsung CRG50 24 Curved Gaming Monitor 144Hz',
            'description' => 'Samsung CRG50 24 Curved Gaming Monitor 144Hz',
            'image' => '\assets\image\C_microphone.png',
            'stock' => 999,
            'price' => 4000,
            'MSRP' => 4500
        ],
        [
            'categoryID'=> 1,
            'productCode' =>'monitor',
            'Pname' => 'Samsung CRG50 24 Curved Gaming Monitor 144Hz',
            'description' => 'Samsung CRG50 24 Curved Gaming Monitor 144Hz',
            'image' => '\assets\image\C_monitor.png',
            'stock' => 999,
            'price' => 4000,
            'MSRP' => 4500
        ],
        [
            'categoryID'=> 2,
            'productCode' =>'mouse',
            'Pname' => 'Samsung CRG50 24 Curved Gaming Monitor 144Hz',
            'description' => 'Samsung CRG50 24 Curved Gaming Monitor 144Hz',
            'image' => '\assets\image\C_mouse.png',
            'stock' => 999,
            'price' => 4000,
            'MSRP' => 4500
        ],[
            'categoryID'=> 6,
            'productCode' =>'speaker',
            'Pname' => 'Samsung CRG50 24 Curved Gaming Monitor 144Hz',
            'description' => 'Samsung CRG50 24 Curved Gaming Monitor 144Hz',
            'image' => '\assets\image\C_speaker.png',
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





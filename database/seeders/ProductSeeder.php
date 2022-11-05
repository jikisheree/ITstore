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
            // 'stock' => 999,
            'price' => 4000,
            'MSRP' => 4500,
            'discount' => 500
        ],
        ];
        foreach ($products as $key => $value) {
            Product::create($value);
        }
    }
}





<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;
class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $_category = [
            [
               
                'categoryName' => 'Monitor'
            ],
            [
               
                'categoryName' => 'Mouse'
            ],
            [
                
                'categoryName' => 'Keyboard'
            ],
            [
               
                'categoryName' => 'Headset'
            ],
            [
               
                'categoryName' => 'Microphone'
            ],
            [
               
                'categoryName' => 'Speaker'
            ],
            ];
            foreach ($_category as $key => $value) {
            Category::create($value);
            }
    }
}

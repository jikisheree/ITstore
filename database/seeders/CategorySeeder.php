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
        $category = [
            [
                'categoryID' => 1,
                'categoryName' => 'Monitor',
                'discount' => 10,
                'image' => '\assets\image\C_monitor.jpg'
            ],
            [
                'categoryID' => 2,
                'categoryName' => 'Mouse',
                'discount' => 20,
                'image' => '\assets\image\C_mouse.jpg'
            ],
            [
                'categoryID' => 3,
                'categoryName' => 'Keyboard',
                'discount' => 30,
                'image' => '\assets\image\C_keyboard.jpg'
            ],
            [
                'categoryID' => 4,
                'categoryName' => 'Headset',
                'discount' => 40,
                'image' => '\assets\image\C_headset.png'
            ],
            [
                'categoryID' => 5,
                'categoryName' => 'Microphone',
                'discount' => 50,
                'image' => '\assets\image\C_microphone.jpg'
            ],
            [
                'categoryID' => 6,
                'categoryName' => 'Speaker',
                'discount' => 60,
                'image' => '\assets\image\C_speaker.jpeg'
            ],
            ];
            foreach ($category as $key => $value) {
            Category::create($value);
            }
    }
}

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
               
                'categoryName' => 'Monitor',
                'image' => '\assets\image\C_monitor.jpg'
            ],
            [
               
                'categoryName' => 'Mouse',
                'image' => '\assets\image\C_mouse.jpg'
            ],
            [
                
                'categoryName' => 'Keyboard',
                'image' => '\assets\image\C_keyboard.jpg'
            ],
            [
               
                'categoryName' => 'Headset',
                'image' => '\assets\image\C_headset.png'
            ],
            [
               
                'categoryName' => 'Microphone',
                'image' => '\assets\image\C_microphone.jpg'
            ],
            [
               
                'categoryName' => 'Speaker',
                'image' => '\assets\image\C_speaker.jpeg'
            ],
            ];
            foreach ($_category as $key => $value) {
            Category::create($value);
            }
    }
}

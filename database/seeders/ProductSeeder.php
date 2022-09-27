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
            'Pname' => 'Samsung CRG50 24 Curved Gaming Monitor 144Hz',
            'description' => 'จอคอมพิวเตอร์ Samsung CRG50 24 Curved Gaming Monitor 144Hz มีดีไซน์การออกแบบที่สวยงาม ด้วยหน้าจอโค้งกว้าง 24 นิ้ว ที่ระดับ 1800R สามารถตอบรับกับสายตาของมนุษย์ได้เป็นอย่างดี พร้อมจุดเด่นในเรื่องของคอนทราสต์ที่โดดเด่นกว่าจอประเภทอื่น นอกจากนี้ยังติดตั้งเทคโนโลยีที่ช่วยอำนวยความสะดวกในการใช้งานมากมาย ช่วยสร้างความได้เปรียบในการเล่นเกมให้มากยิ่งขึ้น พอร์ตเชื่อมต่อสมัยใหม่ก็ติดตั้งมาให้ทั้ง HDMI, DisplayPort หากเพื่อนๆ กำลังมองหาจอ 144Hz ราคาประหยัดอยู่ละก็ Samsung CRG50 24 เป็นตัวเลือกที่น่าสนใจมากในเวลานี้ครับ',
            'image' => 'resources\image\monitor1.jpg',
            'categoryID'=> 1,
            'stock' => 999,
            'price' => 4000,
            'discount' => 500
        ],
        ];
        foreach ($products as $key => $value) {
            Product::create($value);
        }
    }
}





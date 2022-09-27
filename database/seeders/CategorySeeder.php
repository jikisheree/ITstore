<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Product;
class CategorySeeder extends Seeder
{
/**
* Run the database seeds.
*
* @return void
*/
public function run()
{
$categoies = [
[
    'categoryID' => '1',
    'categoryName' => 'Monitor'
],
[
    'categoryID' => '2',
    'categoryName' => 'Mouse'
],
[
    'categoryID' => '3',
    'categoryName' => 'Keyboard'
],
[
    'categoryID' => '4',
    'categoryName' => 'Headset'
],
[
    'categoryID' => '5',
    'categoryName' => 'Microphone'
],
[
    'categoryID' => '6',
    'categoryName' => 'Speaker'
],
];
foreach ($products as $key => $value) {
Product::create($value);
}
}
}
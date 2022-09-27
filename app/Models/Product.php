<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    public $table = "_product";
    protected $fillable= ['categoryID','Pname', 'price', 'discount','description', 'stock', 'image'];
}
//ok
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    public $table = "_category";
    public $timestamps = false;
    protected $fillable= ['categoryID','categoryName','discount','image'];
}

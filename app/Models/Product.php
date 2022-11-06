<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    public $table = "_product";
    protected $primaryKey = 'productCode';
    public $timestamps = false;
    protected $fillable= ['categoryID','Pname','description', 'productCode', 'image','MSRP' ,'price','stock'];
}
//ok
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    public $timestamps = false;
    public $primaryKey = 'itemNumber';
    protected $fillable= [
        'itemNumber',
        'productCode' ,
        'userNumber' ,
        'priceEach' ,
        'quantityOrdered'
    ];
}

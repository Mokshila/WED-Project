<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table='product';
    protected $fillable=[
        'id',
        'code',
        'name',
        'category',
        'quantity',
        'price'];

    public $timestamps=true;
}

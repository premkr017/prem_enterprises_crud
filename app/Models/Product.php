<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    // Mass assignment fields allow karein
    protected $fillable = ['name', 'sku', 'price', 'status'];
}
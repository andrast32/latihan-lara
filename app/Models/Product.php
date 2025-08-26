<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public static function getAllProducts()
    {
        return [
            ['name' => 'Laptop Keren', 'price' => 12000000],
            ['name' => 'Mouse Gaming', 'price' => 250000],
            ['name' => 'Keyboard Mekanikal', 'price' => 750000]
        ];
    }

}

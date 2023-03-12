<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItemProduk extends Model
{
    use HasFactory;

    protected $fillable = [
        'item_produk',
        'slug',
    ];
}

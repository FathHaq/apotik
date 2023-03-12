<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriHerbal extends Model
{
    use HasFactory;

    protected $fillable = [
        'kategori_herbal',
        'slug',
    ];
}

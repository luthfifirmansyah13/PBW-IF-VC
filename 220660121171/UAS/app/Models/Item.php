<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    // Nama tabel di database (secara default Laravel akan menggunakan nama tabel plural)
    protected $table = 'items';

    // Kolom yang dapat diisi (mass assignment)
    protected $fillable = [
        'name',
        'price',
        'description',
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laptop extends Model
{
    use HasFactory;
    protected $table = 'laptops';
    protected $PrimaryKey = 'id';
    protected $fillable = [
        'gambar',
        'merek',
        'seri',
        'harga',
        'deskripsi',
    ];

    protected function casts(): array
    {
        return [
            'uploaded_at' => 'datetime',
            'updated_at' => 'datetime',

        ];
    }
}

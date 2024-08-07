<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produkhukum extends Model
{
    use HasFactory;
    protected $table = 'produk_hukum';
    public $produk_hukum = 'produk_hukum';
    protected $fillable = [
        'title',
        'slug',
        'nomor',
        'tentang',
        'dokumen',
        'path',
        'terbit'
    ];
}

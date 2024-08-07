<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Galerifoto extends Model
{
    use HasFactory;
    protected $table = 'galeri_foto';
    public $galeri_foto = 'galeri_foto';
    protected $fillable = [
        'title',
        'slug',
        'foto',
        'path',
        'slide',
  
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Galerivideo extends Model
{
    use HasFactory;
    protected $table = 'galeri_video';
    public $galeri_video = 'galeri_video';
    protected $fillable = [
        'title',
        'slug',
        'link_video',
       
  
    ];
}

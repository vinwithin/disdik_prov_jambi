<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Instagram extends Model
{
    use HasFactory;
    protected $table = 'instagram';
    public $instagram = 'instagram';
    protected $fillable = [
        'title',
        'slug',
        'link_instagram',
       
  
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profil extends Model
{
    use HasFactory;
    protected $table = 'profil';
    public $profil = 'profil';
    protected $fillable = [
        'title',
        'slug',
        'body',
        'image'
    ];
}

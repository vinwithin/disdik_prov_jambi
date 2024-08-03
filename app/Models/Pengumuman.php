<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengumuman extends Model
{
    use HasFactory;
    protected $table = 'pengumuman';
    public $pengumuman = 'pengumuman';
    protected $fillable = [
        'user_id',
        'title',
        'slug',
        'excerpt',
        'body',
        'gambar_pengumuman',
        'dokumen',
    ];
   
    public function admin(){
        return $this->belongsTo(User::class);
    }
}

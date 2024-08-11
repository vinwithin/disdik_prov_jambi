<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category_prod_hukum extends Model
{
    use HasFactory;
    protected $table = "category_prod_hukum";
    protected $fillable = [
        "name",
        "slug",
    ];

    public function produkhukum(){
        return $this->hasMany(Produkhukum::class);
    }
}

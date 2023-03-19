<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ask extends Model
{
    protected $fillable = [
        "name_of_user",
        "img",
        "ask",
        "id_cat"
    ];
    use HasFactory;

    public function category(){
        return $this->hasOne(Category::class,"id","id_cat");
    }
}

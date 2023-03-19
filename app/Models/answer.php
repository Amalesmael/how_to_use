<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class answer extends Model
{
    protected $fillable=[
      "name",
      "email",
      "answer",
      "ask_id"
    ];
    use HasFactory;
}

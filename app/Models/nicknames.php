<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class nicknames extends Model
{
    use HasFactory;
    protected $table = "nicknames";
    protected $fillable = [
        "nickname",
        "actual_stage"
    ];

}

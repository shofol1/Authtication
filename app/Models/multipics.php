<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class multipics extends Model
{
    use HasFactory;
    protected $fillable = [
        'image',
    ];
}

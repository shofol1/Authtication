<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class brands extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'brand_name',
        'brand_image',
    ];
}

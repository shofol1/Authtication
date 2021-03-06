<?php

namespace App\Models;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'user_id',
        'category_name',
    ];
    public function users()
{
    return $this->hasOne(User::class,'id','user_id');
}
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    // 保存を許可するカラム
    protected $fillable = [
        'name',
        'email',
        'tell',
        'content',
    ];
}

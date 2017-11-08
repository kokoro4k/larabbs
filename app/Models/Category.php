<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model {
    // 设置对象属性的可编辑属性
    protected $fillable = [
        'name', 'description',
    ];
}

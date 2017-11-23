<?php

namespace App\Models;

/**
 * 评论对象
 * author lichen
 * date 2017/11/23
 */
class Reply extends Model {

    protected $fillable = ['content'];

    public function topic() {
        return $this->belongsTo(Topic::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }
}
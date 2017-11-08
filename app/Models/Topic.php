<?php

namespace App\Models;

/**
 * Class Topic
 * 话题数据模型
 * @package App\Models
 */
class Topic extends Model {

    protected $fillable = ['title', 'body', 'user_id', 'category_id', 'reply_count', 'view_count', 'last_reply_user_id', 'order', 'excerpt', 'slug'];
}

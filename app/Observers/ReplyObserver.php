<?php

namespace App\Observers;

use App\Models\Reply;

// creating, created, updating, updated, saving,
// saved,  deleting, deleted, restoring, restored

/**
 * 评论监听
 * author lichen
 * date 2017/11/23
 */
class ReplyObserver {

    /**
     * @param Reply $reply
     */
    public function created(Reply $reply) {
        $reply->topic->increment('reply_count', 1);
    }

    public function creating(Reply $reply) {
        $reply->content = clean($reply->content, 'user_topic_body');
    }
}
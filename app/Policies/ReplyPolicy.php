<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Reply;

class ReplyPolicy extends Policy
{
    public function update(User $user, Reply $reply)
    {
        // return $reply->user_id == $user->id;
        return true;
    }

    /**
     * 删除评论用户权限控制
     * @param User $user
     * @param Reply $reply
     * @return bool
     */
    public function destroy(User $user, Reply $reply) {
        return $user->isAuthorOf($reply) || $user->isAuthorOf($reply->topic);
    }
}

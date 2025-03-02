<?php

namespace App\Policies;

use App\Models\Comment;
use Auth;
use Config;

class CommentPolicy
{
    /**
     * Can user create the comment.
     *
     * @param $user
     */
    public function create($user) : bool
    {
        return true;
    }

    /**
     * Can user delete the comment.
     *
     * @param $user
     */
    public function delete($user, Comment $comment) : bool
    {
        if (auth::user()->isStaff) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * Can user update the comment.
     *
     * @param $user
     */
    public function update($user, Comment $comment) : bool
    {
        $canEdit = Config::Get('lorekeeper.extensions.forum_author_edit');
        if ($comment->topComment->is_locked || $comment->commentable_type == 'App\Models\Forum' && $comment->commentable->canUsersPost()) {
            if ($user->isStaff) {
                return $user->getKey() == $comment->commenter_id;
            } elseif ($comment->commentable_type == 'App\Models\Forum' && $canEdit) {
                return $user->getKey() == $comment->commenter_id;
            } else {
                return false;
            }
        } else {
            return $user->getKey() == $comment->commenter_id;
        }
    }

    /**
     * Can user reply to the comment.
     *
     * @param $user
     */
    public function reply($user, Comment $comment) : bool
    {
        if ($comment->topComment->is_locked || $comment->commentable_type == 'App\Models\Forum' && !$comment->commentable->canUsersPost()) {
            if ($user->isStaff) {
                return $user->getKey() == $user->getKey();
            } else {
                return false;
            }
        } else {
            return $user->getKey();
        }
    }
}

<?php

namespace App\Http\Controllers\Comments;

use App\Comment;
use App\Contracts\Controllers\CommentDestroyInterface;
use App\Http\Resources\Resource;

class CommentDestroyController implements CommentDestroyInterface
{
    /**
     * Remove the specified resource from storage.
     *
     * @param Comment $comment
     * @return \App\Http\Resources\Resource
     * @throws \Exception
     */
    public function destroy( Comment $comment )
    {
        $comment->delete();

        return new Resource($comment);

    }
}
<?php

namespace App\Http\Controllers\Comments;

use App\Comment;
use App\Contracts\Controllers\CommentUpdateInterface;
use App\Http\Resources\Resource;
use Illuminate\Http\Request;

class CommentUpdateController implements CommentUpdateInterface
{
    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Comment $comment
     * @return Resource
     */
    public function update( Request $request, Comment $comment )
    {
        $comment->update($request->all());

        return new Resource($comment);

    }
}
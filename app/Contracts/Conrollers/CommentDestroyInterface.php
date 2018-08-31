<?php

namespace App\Contracts\Controllers;

use App\Comment;

interface CommentDestroyInterface
{
    /**
     * Remove the specified resource from storage.
     *
     * @param Comment $comment
     * @return \App\Http\Resources\Resource
     * @throws \Exception
     */
    public function destroy( Comment $comment );
}
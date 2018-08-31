<?php

namespace App\Contracts\Controllers;

use App\Comment;
use Illuminate\Http\Request;

interface CommentUpdateInterface
{
    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Comment $comment
     * @return Resource
     */
    public function update( Request $request, Comment $comment );
}
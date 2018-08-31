<?php

namespace App\Http\Controllers\Comments;

use App\Comment;
use App\Contracts\Controllers\CommentsInterface;
use App\Http\Resources\Resource;


class CommentsController implements CommentsInterface
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function index()
    {
        return Resource::collection( Comment::with('childrensRecursive')->get() );
    }
}
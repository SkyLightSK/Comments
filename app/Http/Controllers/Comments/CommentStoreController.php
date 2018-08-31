<?php

namespace App\Http\Controllers\Comments;

use App\Comment;
use App\Contracts\Controllers\CommentStoreInterface;
use App\Http\Resources\Resource;
use Illuminate\Http\Request;

class CommentStoreController implements CommentStoreInterface
{
    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Resource
     */
    public function store( Request $request )
    {
        return new Resource( Comment::create( $request->all() ) );
    }
}
<?php
/**
 * Created by PhpStorm.
 * User: skylight
 * Date: 31.08.18
 * Time: 1:21
 */

namespace App\Http\Controllers\Comments;

use App\Comment;
use App\Contracts\Controllers\CommentShowInterface;
use App\Http\Resources\Resource;

class CommentShowController implements CommentShowInterface
{
    /**
     * Display the specified resource.
     *
     * @param $id
     * @return Resource
     */
    public function show( $id )
    {
        return new Resource(Comment::with('parent' , 'childrensRecursive' )->findOrFail($id));
    }
}
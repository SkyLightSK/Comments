<?php
namespace App\Contracts;


interface CommentInterface
{
    /**
     * Get the child relations of comment.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function childrens();

    /**
     * Recursive, loads all descendants
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function childrensRecursive();

    /**
     * Get the parent relations of comment.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function parent();

}
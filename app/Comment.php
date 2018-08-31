<?php

namespace App;

use App\Contracts\CommentInterface;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model implements CommentInterface
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['author', 'content', 'parent_id'];

    /**
     * Get the child comments for the comment.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function childrens()
    {
        return $this->hasMany( self::class , 'parent_id' );
    }

    /**
     * Recursive, loads all descendants
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function childrensRecursive()
    {

        return $this->childrens()->with('childrensRecursive');
        // which is equivalent to:
        // return $this->hasMany(self::class, 'parent_id')->with('childrensRecursive);
    }

    /**
     * Get the parent comment for the comments.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function parent()
    {
        return $this->belongsTo( self::class , 'parent_id' );
    }


}

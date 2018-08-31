<?php
/**
 * Created by PhpStorm.
 * User: skylight
 * Date: 31.08.18
 * Time: 1:21
 */

namespace App\Contracts\Controllers;

interface CommentShowInterface
{
    /**
     * Display the specified resource.
     *
     * @param $id
     * @return Resource
     */
    public function show( $id );
}
<?php
/**
 * Created by PhpStorm.
 * User: skylight
 * Date: 31.08.18
 * Time: 1:20
 */

namespace App\Contracts\Controllers;

use Illuminate\Http\Request;

interface CommentStoreInterface
{
    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Resource
     */
    public function store(Request $request);
}
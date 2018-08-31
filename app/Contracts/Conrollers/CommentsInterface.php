<?php

namespace App\Contracts\Controllers;

interface CommentsInterface
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function index();

}
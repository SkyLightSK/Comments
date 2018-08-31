<?php

namespace Tests\Unit;

use App\Comment;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CommentStoreController extends TestCase
{
    use DatabaseTransactions;
    /**
     * A basic test for CommentStoreController.
     *
     * @return void
     */
    public function testCommentStoreController()
    {
        $comment = factory(Comment::class,1)->create();

        $data = [
            'author'    => $comment[0]['author'],
            'content'   => $comment[0]['content'] ,
            'parent_id' => $comment[0]['parent_id']
        ];

        $this->json('POST', '/api/comments/' , $data)
            ->assertStatus(201)
            ->assertJsonStructure([
                'data' => [
                    'id',
                    'author',
                    'content',
                    'parent_id',
                ]
            ])
            ->assertJson([
                'data' => $data
            ]);;

    }
}

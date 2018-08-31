<?php

namespace Tests\Unit;

use App\Comment;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CommentDestroyController extends TestCase
{
    use DatabaseTransactions;
    /**
     * A basic test for CommentDestroyController.
     *
     * @return void
     */
    public function testCommentDestroyController()
    {
        $comment = factory(Comment::class,1)->create();

        $this->json('DELETE', '/api/comments/' . $comment[0]['id'])
            ->assertStatus(200)
            ->assertJsonStructure([
                'data' => [
                    'id',
                    'author',
                    'content',
                    'parent_id'
                ]
            ])
            ->assertJson([
                'data' => [
                    'id' => $comment[0]['id']
                ],
            ]);;

    }
}

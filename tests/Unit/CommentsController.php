<?php

namespace Tests\Unit;

use App\Comment;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\JsonResponse;

class CommentsController extends TestCase
{
    use DatabaseTransactions;
    /**
     * A basic test for CommentsController.
     *
     * @return void
     */
    public function testCommentsController()
    {
        factory(Comment::class,2)->create();

        $this->json('GET', '/api/comments')
                ->assertStatus(200)
                ->assertJsonStructure([
                'data' => [
                    '*' =>[
                        'id',
                        'author',
                        'content',
                        'parent_id'
                    ]
                ]
            ]);

    }
}

<?php

namespace Tests\Unit;

use App\Comment;
use Faker\Factory;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CommentUpdateController extends TestCase
{
    use DatabaseTransactions;
    /**
     * A basic test for CommentUpdateController.
     *
     * @return void
     */
    public function testCommentUpdateController()
    {
        $comment = factory(Comment::class,1)->create();
        // use the factory to create a Faker\Generator instance
        $faker = Factory::create();

        $data = [
            'parent_id'     => $faker->numberBetween( 0 , Comment::count() ),
            'author'        => $faker->name,
            'content'       => $faker->text,
        ];

        $this->json('PUT', '/api/comments/' . $comment[0]['id'] , $data)
            ->assertStatus(200)
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

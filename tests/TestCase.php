<?php

namespace Tests;

use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;

    public function testIndex()
    {
        $this->json('GET', '/api/comments')
            ->assertStatus(200);
    }
}

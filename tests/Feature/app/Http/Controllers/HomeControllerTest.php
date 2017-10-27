<?php

namespace Tests\Feature\app\Http\Controllers;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class HomeControllerTest extends TestCase
{
    public function testHomeRedirectWhenNotLogged()
    {
        $response = $this->get('/home');
        $response->assertStatus(302);
    }
}

<?php

namespace Ridrog\Boilerplate\Test;

use Ridrog\Boilerplate\Test\TestCase as TestCase;

class RoutesTest extends TestCase
{
    /**
     * Setup
     */
    public function setUp()
    {
        parent::setUp();

    }

    /** @test */
    public function the_test_route_returns_a_good_status_code()
    {
        $response = $this->get('/testroute');

        $response->assertStatus(200);
    }

    /** @test */
    public function the_test_route_returns_a_string()
    {
        $response = $this->get('/testroute');

        $response->assertSee('The Routes are loaded');
    }

    /** @test */
    public function the_controller_works()
    {
        $response = $this->get('/controllertest');

        $response->assertStatus(200);
    }

    /** @test */
    public function the_controller_returns_a_string()
    {
        $response = $this->get(route('test-controller'));

        $response->assertSee('The Controller worked');
    }

}
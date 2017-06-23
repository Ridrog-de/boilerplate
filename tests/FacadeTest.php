<?php

namespace Ridrog\Boilerplate\Test;

use Ridrog\Boilerplate\Boilerplate;
use Ridrog\Boilerplate\Facades\BoilerplateFacade;
use Illuminate\Support\ServiceProvider;
use Ridrog\Boilerplate\BoilerplateServiceProvider;
use Ridrog\Boilerplate\Test\TestCase as TestCase;

class FacadeTest extends TestCase
{

    /**
     *
     * @var BoilerplateServiceProvider
     */
    private $provider;

    /**
     * Setup
     */
    public function setUp()
    {
        parent::setUp();

        $this->provider = $this->app->getProvider(BoilerplateServiceProvider::class);

    }

    /**
     * Tear Down
     */
    public function tearDown()
    {
        unset($this->provider);

        parent::tearDown();
    }

    /** @test */
    public function test_the_facade()
    {
        $hello = BoilerplateFacade::hello();

        $this->assertTrue($hello === "hello");
    }

    /** @test */
    public function test_the_class()
    {
        $boilerplate = new Boilerplate();

        $this->assertTrue($boilerplate->hello() === "hello");
    }

    /** @test */
    public function test_the_helper()
    {
        $boilerplate = boilerplate();

        $this->assertTrue($boilerplate->hello() === "hello");
    }
}
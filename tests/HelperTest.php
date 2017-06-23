<?php

namespace Ridrog\Boilerplate\Test;

use Ridrog\Boilerplate\Boilerplate;
use Illuminate\Support\ServiceProvider;
use Ridrog\Boilerplate\BoilerplateServiceProvider;
use Ridrog\Boilerplate\Test\TestCase as TestCase;

class HelperTest extends TestCase
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
    public function it_returns_hello()
    {
        $boilerplate = boilerplate();

        $this->assertTrue($boilerplate->hello() === "hello");
    }

}
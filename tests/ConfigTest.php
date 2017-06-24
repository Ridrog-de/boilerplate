<?php

namespace Ridrog\Boilerplate\Test;

use Illuminate\Support\Facades\Artisan;
use Ridrog\Boilerplate\Test\TestCase as TestCase;

class ConfigTest extends TestCase
{

    /** @test */
    public function the_config_exists()
    {
        $path = __DIR__.'/../config/boilerplate.php';

        $this->assertFileExists($path);
    }

    /** @test */
    public function publishing_config_works()
    {
        Artisan::call( 'vendor:publish', ['--tag' => 'boilerplate-config']);

        $this->assertFileExists(config_path('boilerplate.php'));
    }

}
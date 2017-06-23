<?php

namespace Ridrog\Boilerplate\Facades;

use Illuminate\Support\Facades\Facade;

class BoilerplateFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'boilerplate';
    }
}
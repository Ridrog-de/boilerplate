<?php

namespace Ridrog\Boilerplate\Listeners;

use Illuminate\Support\Facades\Log;
use Ridrog\Boilerplate\Events\BoilerplateEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class BoilerplateListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  BoilerplateEvent  $event
     * @return void
     */
    public function handle(BoilerplateEvent $event)
    {
        Log::info("boilerplate event was fired");
    }
}

<?php

if ( ! function_exists('boilerplate')) {

    /**
     * Arrange for a flash message.
     *
     * @param  string|null $message
     * @param  string      $level
     * @return \Ridrog\Boilerplate\Boilerplate
     */
    function boilerplate()
    {
        $boilerplate = app('boilerplate');

        return $boilerplate;
    }

}
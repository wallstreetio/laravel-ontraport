<?php

namespace Wsio\Ontraport\Facade;

use Illuminate\Support\Facades\Facade;
use Wsio\Ontraport\Ontraport as OntraportManager;

/**
 * @see \Wsio\Ontraport\Ontraport
 */
class Ontraport extends Facade
{
    /*
     * Get the registered name of the component.
     *
     * @return string
    */
    protected static function getFacadeAccessor()
    {
        return OntraportManager::class;
    }
}

<?php

namespace jjrohrer\BeSassy\Facades;

use Illuminate\Support\Facades\Facade;

class BeSassy extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'besassy';
    }
}

<?php

namespace Facades\StrIlluminate\StrIlluminate\Activewor;

use Illuminate\Support\Facades\Facade;

/**
 * @see \StrIlluminate\StrIlluminate\Activewor\RD
 */
class RD extends Facade
{
    /**
     * Get the registered name of the component.
     */
    protected static function getFacadeAccessor(): string
    {
        return 'StrIlluminate\StrIlluminate\Activewor\RD';
    }
}

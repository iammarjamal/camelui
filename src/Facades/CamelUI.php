<?php

namespace CamelUI\CamelUI\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \CamelUI\CamelUI\CamelUI
 */
class CamelUI extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \CamelUI\CamelUI\CamelUI::class;
    }
}

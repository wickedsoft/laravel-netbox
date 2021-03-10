<?php

namespace wickedsoft\NetBox;

/**
 * @method static \wickedsoft\NetBox\Api
 */
class Facade extends \Illuminate\Support\Facades\Facade
{
    /**
     * {@inheritDoc}
     */
    protected static function getFacadeAccessor()
    {
        return 'NetBox';
    }
}

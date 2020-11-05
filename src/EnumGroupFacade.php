<?php

namespace SplCompanyOy\LaravelEnumGroup;

use Illuminate\Support\Facades\Facade;

/**
 * @see SplCompanyOy\LaravelEnumGroup\EnumGroupFactory
 */
class EnumGroupFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'enumgroup';
    }
}

<?php

namespace SplCompanyOy\LaravelEnumGroup;

use InvalidArgumentException;
use Illuminate\Support\Facades\Config;

/**
 * Factory Facade for changing the loading logic easily
 * Ie. currently we have groups defined inside config but we could also have
 * them saved within database etc.
 */
class EnumGroupFactory
{
    public function get(string $groupName): EnumGroupInterface
    {
        // @TODO: Maybe later add caching for not loading and initializing same
        // stuff again and again?

        $key = "enum_group.{$groupName}";

        throw_if(
            ! Config::has($key),
            new InvalidArgumentException("Cannot load missing Enum Group: {$key}")
        );

        return new EnumGroup(
            collect(
                Config::get($key)
            )
        );
    }
}

<?php

namespace SplCompanyOy\LaravelEnumGroup;

use BenSampo\Enum\Enum;
use Illuminate\Support\Collection;

interface EnumGroupInterface
{
    public function has(Enum $enum): bool;

    public function all(): Collection;

    public function allKeys(): Collection;

    public function allValues(): Collection;
}

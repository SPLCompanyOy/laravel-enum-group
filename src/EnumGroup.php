<?php

namespace SplCompanyOy\LaravelEnumGroup;

use BenSampo\Enum\Enum;
use Illuminate\Support\Collection;

class EnumGroup implements EnumGroupInterface
{
    /**
     * @var Collection
     */
    protected $enums;

//    public function __construct(string $groupName)
//    {
//        $this->enums = collect(config('enum_group.'.$groupName));
//    }

    /**
     * @param Collection|array $enums
     */
    public function __construct($enums)
    {
        if (is_array($enums)) {
            $enums = collect($enums);
        }

        $this->enums = $enums;
    }

    public function has(Enum $enum): bool
    {
        return $this->enums->contains($enum->value);
    }

    public function all(): Collection
    {
        return $this->enums;
    }

    public function allKeys(): Collection
    {
        return $this->enums->keys();
    }

    public function allValues(): Collection
    {
        return $this->enums->values();
    }
}

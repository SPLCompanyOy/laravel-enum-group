<?php

namespace SplCompanyOy\LaravelEnumGroup\Tests;

use SplCompanyOy\LaravelEnumGroup\EnumGroup;
use SplCompanyOy\LaravelEnumGroup\EnumGroupInterface;

class EnumGroupTest extends TestCase
{
    protected EnumGroupInterface $subject;

    public function setUp(): void
    {
        parent::setUp();

        $groupStatuses = [FictionalStatusEnum::CREATED, FictionalStatusEnum::REJECTED];

        $this->subject = new EnumGroup($groupStatuses);
    }

    public function testEnumGroupHasReturnTrue(): void
    {
        self::assertTrue($this->subject->has(FictionalStatusEnum::REJECTED()));
    }

    public function testEnumGroupHasReturnFalse(): void
    {
        self::assertFalse($this->subject->has(FictionalStatusEnum::IN_REVIEW()));
    }

    public function testEnumGroupKeysReturnCorrectValues(): void
    {
        $values = $this->subject->allValues();

        self::assertTrue($values->contains(FictionalStatusEnum::CREATED()));
        self::assertTrue($values->contains(FictionalStatusEnum::REJECTED()));
        self::assertFalse($values->contains(FictionalStatusEnum::SENT()));
    }

    public function testEnumGroupKeysReturnCorrectKeys(): void
    {
        $keys = $this->subject->allKeys();

        self::assertTrue($keys->contains(0));
        self::assertTrue($keys->contains(1));
        self::assertFalse($keys->contains(2));
    }
}

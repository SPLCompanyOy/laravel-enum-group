<?php

namespace SplCompanyOy\LaravelEnumGroup\Tests;

use Illuminate\Support\Facades\Config;
use SplCompanyOy\LaravelEnumGroup\EnumGroup;
use SplCompanyOy\LaravelEnumGroup\EnumGroupInterface;

// @TODO: test enum group with some enums
// @TODO: Data init
// @TODO: Abstract base test class?

class ConfigEnumGroupTest extends TestCase
{
    protected EnumGroupInterface $subject;

    public function setUp(): void
    {
        parent::setUp();

        // Config::set('enum_group.TEST_GROUP', [AccountingAccountNumberEnum::PRIVATE_ACCOUNT, AccountingAccountNumberEnum::BANK_EXPENSES]);

        // $this->subject = new EnumGroup('TEST_GROUP');
    }

    public function testEnumGroupHasReturnTrue(): void
    {
        self::assertTrue($this->subject->has(AccountingAccountNumberEnum::PRIVATE_ACCOUNT()));
    }

    public function testEnumGroupHasReturnFalse(): void
    {
        self::assertFalse($this->subject->has(AccountingAccountNumberEnum::EU_INTRA_COMMUNITY_SUPPLY_OF_SERVICES()));
    }

    public function testEnumGroupKeysReturnCorrectValues(): void
    {
        $values = $this->subject->allValues();

        self::assertTrue($values->contains(AccountingAccountNumberEnum::PRIVATE_ACCOUNT));
        self::assertTrue($values->contains(AccountingAccountNumberEnum::BANK_EXPENSES));
        self::assertFalse($values->contains(AccountingAccountNumberEnum::EU_INTRA_COMMUNITY_SUPPLY_OF_SERVICES));
    }

    public function testEnumGroupKeysReturnCorrectKeys(): void
    {
        $keys = $this->subject->allKeys();

        self::assertTrue($keys->contains(0));
        self::assertTrue($keys->contains(1));
        self::assertFalse($keys->contains(2));
    }
}

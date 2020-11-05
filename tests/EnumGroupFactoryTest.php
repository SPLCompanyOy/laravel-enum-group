<?php

namespace SplCompanyOy\LaravelEnumGroup\Tests;

use SplCompanyOy\LaravelEnumGroup\EnumGroup;
use SplCompanyOy\LaravelEnumGroup\EnumGroupFactory;
use Illuminate\Support\Facades\Config;
use \InvalidArgumentException;

class EnumGroupFactoryTest extends TestCase
{
    protected EnumGroupFactory $subject;

    public function setUp(): void
    {
        parent::setUp();

        $groupStatuses = [FictionalStatusEnum::CREATED, FictionalStatusEnum::REJECTED];

        Config::set('enum_group.invoice.editable', $groupStatuses);

        $this->subject = new EnumGroupFactory();
    }

    public function testItThrowsExceptionIfTheGroupIsMissing(): void
    {
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage(
            'Cannot load missing Enum Group: enum_group.ralph-quotes'
        );
        $this->subject->get('ralph-quotes');
    }

    public function testItLoadsFromConfigSuccessfully(): void
    {
        $res = $this->subject->get('invoice.editable');
        $this->assertInstanceOf(EnumGroup::class, $res);
        // dump($res->all());
        $this->assertCount(2, $res->all());
    }
}

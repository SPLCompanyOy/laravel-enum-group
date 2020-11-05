<?php

namespace SplCompanyOy\LaravelEnumGroup\Tests;

use BenSampo\Enum\Enum;

/**
 * @method static static CREATED()
 * @method static static REJECTED()
 * @method static static IN_REVIEW()
 * @method static static SENT()
 */
class FictionalStatusEnum extends Enum
{
    public const CREATED = 'created';
    public const REJECTED = 'rejected';
    public const IN_REVIEW = 'in_review';
    public const SENT = 'sent';
}

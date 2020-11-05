<?php

use SplCompanyOy\LaravelEnumGroup\Tests\FictionalStatusEnum;

return [
    // Example
    'invoice' => [
        'editable' => [
            FictionalStatusEnum::CREATED(),
            FictionalStatusEnum::REJECTED(),
        ],
    ]
];

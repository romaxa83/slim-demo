<?php

declare(strict_types=1);

return [
    'config' => [
        'logger' => [
            'file' => __DIR__ . '/../../var/logs/' . PHP_SAPI . '/test.log',
            'stderr' => false
        ],
    ]
];

<?php

declare(strict_types=1);

return [
    'general' => [
        'sheetTitle' => 'LLL:EXT:e2_ces/Resources/Private/Language/locallang_db.xlf:e2_builder_io.sheet.general',
        'columns' => [
            'url' => [
                'label' => 'LLL:EXT:e2_ces/Resources/Private/Language/locallang_db.xlf:e2_builder_io.fields.url',
                'exclude' => '0',
                'config' => [
                    'type' => 'input',
                    'eval' => 'trim',
                    'required' => true,
                ],
            ],
        ],
    ],
];

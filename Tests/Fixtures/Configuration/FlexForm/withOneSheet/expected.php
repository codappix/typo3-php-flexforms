<?php

declare(strict_types=1);

return [
    'sheets' => [
        'general' => [
            'ROOT' => [
                'sheetTitle' => 'LLL:EXT:e2_ces/Resources/Private/Language/locallang_db.xlf:e2_builder_io.sheet.general',
                'sheetDescription' => '',
                'sheetShortDescr' => '',
                'type' => 'array',
                'el' => [
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
        ],
    ],
];

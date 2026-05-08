<?php

declare(strict_types=1);

return [
    'ROOT' => [
        'type' => 'array',
        'el' => [
            'link' => [
                'exclude' => '0',
                'label' => 'LLL:EXT:e2_ces/Resources/Private/Language/locallang_db.xlf:e2_simple_icon.link',
                'config' => [
                    'type' => 'link',
                    'size' => '32',
                ],
            ],
            'trackingMarker' => [
                'exclude' => '0',
                'label' => 'LLL:EXT:e2_ces/Resources/Private/Language/locallang_db.xlf:e2_simple_icon.trackingMarker',
                'config' => [
                    'type' => 'input',
                    'eval' => 'trim',
                ],
            ],
            'type' => [
                'exclude' => '0',
                'label' => 'LLL:EXT:e2_ces/Resources/Private/Language/locallang_db.xlf:e2_simple_icon.type',
                'config' => [
                    'type' => 'select',
                    'renderType' => 'selectSingle',
                    'items' => [
                        0 => [
                            'label' => 'LLL:EXT:e2_ces/Resources/Private/Language/locallang_db.xlf:e2_simple_icon.type.ellipseButton',
                            'value' => 'ellipseButton',
                        ],
                        1 => [
                            'label' => 'LLL:EXT:e2_ces/Resources/Private/Language/locallang_db.xlf:e2_simple_icon.type.svg',
                            'value' => 'svg',
                        ],
                    ],
                ],
            ],
            'icon' => [
                'exclude' => '0',
                'label' => 'LLL:EXT:e2_ces/Resources/Private/Language/locallang_db.xlf:e2_simple_icon.icon',
                'config' => [
                    'type' => 'select',
                    'renderType' => 'selectSingle',
                    'items' => [
                        0 => [
                            'label' => 'add',
                            'value' => 'add',
                        ],
                        1 => [
                            'label' => 'arrowDown',
                            'value' => 'arrowDown',
                        ],
                        2 => [
                            'label' => 'arrowLeft',
                            'value' => 'arrowLeft',
                        ],
                        3 => [
                            'label' => 'arrowRight',
                            'value' => 'arrowRight',
                        ],
                        4 => [
                            'label' => 'arrowUp',
                            'value' => 'arrowUp',
                        ],
                        5 => [
                            'label' => 'bestprice',
                            'value' => 'bestprice',
                        ],
                        6 => [
                            'label' => 'bestseller',
                            'value' => 'bestseller',
                        ],
                        7 => [
                            'label' => 'bin2',
                            'value' => 'bin2',
                        ],
                        8 => [
                            'label' => 'building3',
                            'value' => 'building3',
                        ],
                        9 => [
                            'label' => 'calendar31',
                            'value' => 'calendar31',
                        ],
                        10 => [
                            'label' => 'calendar4',
                            'value' => 'calendar4',
                        ],
                        11 => [
                            'label' => 'camera2',
                            'value' => 'camera2',
                        ],
                        12 => [
                            'label' => 'cancel2',
                            'value' => 'cancel2',
                        ],
                        13 => [
                            'label' => 'cartEmpty',
                            'value' => 'cartEmpty',
                        ],
                        14 => [
                            'label' => 'check',
                            'value' => 'check',
                        ],
                        15 => [
                            'label' => 'checkmark',
                            'value' => 'checkmark',
                        ],
                        16 => [
                            'label' => 'checkmark2',
                            'value' => 'checkmark2',
                        ],
                        17 => [
                            'label' => 'checkmarkCircle',
                            'value' => 'checkmarkCircle',
                        ],
                        18 => [
                            'label' => 'chevronDown',
                            'value' => 'chevronDown',
                        ],
                        19 => [
                            'label' => 'chevronLeft',
                            'value' => 'chevronLeft',
                        ],
                        20 => [
                            'label' => 'chevronRight',
                            'value' => 'chevronRight',
                        ],
                        21 => [
                            'label' => 'chevronUp',
                            'value' => 'chevronUp',
                        ],
                        22 => [
                            'label' => 'clock3',
                            'value' => 'clock3',
                        ],
                        23 => [
                            'label' => 'cross2',
                            'value' => 'cross2',
                        ],
                        24 => [
                            'label' => 'delivery',
                            'value' => 'delivery',
                        ],
                        25 => [
                            'label' => 'down2',
                            'value' => 'down2',
                        ],
                        26 => [
                            'label' => 'down7',
                            'value' => 'down7',
                        ],
                        27 => [
                            'label' => 'down8',
                            'value' => 'down8',
                        ],
                        28 => [
                            'label' => 'download2',
                            'value' => 'download2',
                        ],
                        29 => [
                            'label' => 'drop2',
                            'value' => 'drop2',
                        ],
                        30 => [
                            'label' => 'droplet3',
                            'value' => 'droplet3',
                        ],
                        31 => [
                            'label' => 'filter',
                            'value' => 'filter',
                        ],
                        32 => [
                            'label' => 'flag',
                            'value' => 'flag',
                        ],
                        33 => [
                            'label' => 'funnel',
                            'value' => 'funnel',
                        ],
                        34 => [
                            'label' => 'guarantee10',
                            'value' => 'guarantee10',
                        ],
                        35 => [
                            'label' => 'guarantee30',
                            'value' => 'guarantee30',
                        ],
                        36 => [
                            'label' => 'guarantee5',
                            'value' => 'guarantee5',
                        ],
                        37 => [
                            'label' => 'hammerWrench',
                            'value' => 'hammerWrench',
                        ],
                        38 => [
                            'label' => 'heart',
                            'value' => 'heart',
                        ],
                        39 => [
                            'label' => 'home3',
                            'value' => 'home3',
                        ],
                        40 => [
                            'label' => 'info',
                            'value' => 'info',
                        ],
                        41 => [
                            'label' => 'left8',
                            'value' => 'left8',
                        ],
                        42 => [
                            'label' => 'left9',
                            'value' => 'left9',
                        ],
                        43 => [
                            'label' => 'location',
                            'value' => 'location',
                        ],
                        44 => [
                            'label' => 'love',
                            'value' => 'love',
                        ],
                        45 => [
                            'label' => 'magnifier',
                            'value' => 'magnifier',
                        ],
                        46 => [
                            'label' => 'mapMarker',
                            'value' => 'mapMarker',
                        ],
                        47 => [
                            'label' => 'medal',
                            'value' => 'medal',
                        ],
                        48 => [
                            'label' => 'medalEmpty',
                            'value' => 'medalEmpty',
                        ],
                        49 => [
                            'label' => 'menu',
                            'value' => 'menu',
                        ],
                        50 => [
                            'label' => 'mic',
                            'value' => 'mic',
                        ],
                        51 => [
                            'label' => 'minus',
                            'value' => 'minus',
                        ],
                        52 => [
                            'label' => 'news',
                            'value' => 'news',
                        ],
                        53 => [
                            'label' => 'newspaper',
                            'value' => 'newspaper',
                        ],
                        54 => [
                            'label' => 'options',
                            'value' => 'options',
                        ],
                        55 => [
                            'label' => 'pencil',
                            'value' => 'pencil',
                        ],
                        56 => [
                            'label' => 'persona',
                            'value' => 'persona',
                        ],
                        57 => [
                            'label' => 'phone',
                            'value' => 'phone',
                        ],
                        58 => [
                            'label' => 'photo2',
                            'value' => 'photo2',
                        ],
                        59 => [
                            'label' => 'pin3',
                            'value' => 'pin3',
                        ],
                        60 => [
                            'label' => 'plus',
                            'value' => 'plus',
                        ],
                        61 => [
                            'label' => 'print',
                            'value' => 'print',
                        ],
                        62 => [
                            'label' => 'printer',
                            'value' => 'printer',
                        ],
                        63 => [
                            'label' => 'rating',
                            'value' => 'rating',
                        ],
                        64 => [
                            'label' => 'rating2',
                            'value' => 'rating2',
                        ],
                        65 => [
                            'label' => 'report',
                            'value' => 'report',
                        ],
                        66 => [
                            'label' => 'right6',
                            'value' => 'right6',
                        ],
                        67 => [
                            'label' => 'right7',
                            'value' => 'right7',
                        ],
                        68 => [
                            'label' => 'search',
                            'value' => 'search',
                        ],
                        69 => [
                            'label' => 'shop6',
                            'value' => 'shop6',
                        ],
                        70 => [
                            'label' => 'showroom',
                            'value' => 'showroom',
                        ],
                        71 => [
                            'label' => 'star',
                            'value' => 'star',
                        ],
                        72 => [
                            'label' => 'starHalf',
                            'value' => 'starHalf',
                        ],
                        73 => [
                            'label' => 'subtract',
                            'value' => 'subtract',
                        ],
                        74 => [
                            'label' => 'telephone',
                            'value' => 'telephone',
                        ],
                        75 => [
                            'label' => 'time3',
                            'value' => 'time3',
                        ],
                        76 => [
                            'label' => 'tool4',
                            'value' => 'tool4',
                        ],
                        77 => [
                            'label' => 'tool6',
                            'value' => 'tool6',
                        ],
                        78 => [
                            'label' => 'trash2',
                            'value' => 'trash2',
                        ],
                        79 => [
                            'label' => 'truck',
                            'value' => 'truck',
                        ],
                        80 => [
                            'label' => 'up7',
                            'value' => 'up7',
                        ],
                        81 => [
                            'label' => 'up8',
                            'value' => 'up8',
                        ],
                        82 => [
                            'label' => 'user',
                            'value' => 'user',
                        ],
                        83 => [
                            'label' => 'voice',
                            'value' => 'voice',
                        ],
                        84 => [
                            'label' => 'wrench',
                            'value' => 'wrench',
                        ],
                        85 => [
                            'label' => 'wrench2',
                            'value' => 'wrench2',
                        ],
                        86 => [
                            'label' => 'write',
                            'value' => 'write',
                        ],
                    ],
                ],
            ],
            'iconPosition' => [
                'exclude' => '0',
                'label' => 'LLL:EXT:e2_ces/Resources/Private/Language/locallang_db.xlf:e2_simple_icon.iconPosition',
                'displayCond' => 'FIELD:type:=:ellipseButton',
                'config' => [
                    'type' => 'select',
                    'renderType' => 'selectSingle',
                    'items' => [
                        0 => [
                            'label' => 'LLL:EXT:e2_ces/Resources/Private/Language/locallang_db.xlf:e2_simple_icon.iconPosition.above',
                            'value' => 'above',
                        ],
                        1 => [
                            'label' => 'LLL:EXT:e2_ces/Resources/Private/Language/locallang_db.xlf:e2_simple_icon.iconPosition.below',
                            'value' => 'below',
                        ],
                    ],
                ],
            ],
        ],
    ],
];

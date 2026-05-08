<?php

declare(strict_types=1);

return [
    'Text' => [
        'sheetTitle' => 'LLL:EXT:e2_ces/Resources/Private/Language/locallang_db.xlf:e2_flex_hl_text_img.sheets.Text',
        'sheetDescription' => 'LLL:EXT:e2_ces/Resources/Private/Language/locallang_db.xlf:e2_flex_hl_text_img.sheets.Text.description',
        'sheetShortDescr' => 'LLL:EXT:e2_ces/Resources/Private/Language/locallang_db.xlf:e2_flex_hl_text_img.sheets.Text.shortDescription',
        'columns' => [
            'headline' => [
                'label' => 'LLL:EXT:e2_ces/Resources/Private/Language/locallang_db.xlf:e2_flex_hl_text_img.fields.headline',
                'exclude' => '0',
                'config' => [
                    'type' => 'text',
                    'rows' => '3',
                    'cols' => '85',
                    'eval' => 'trim',
                ],
            ],
            'headlineType' => [
                'label' => 'LLL:EXT:e2_ces/Resources/Private/Language/locallang_db.xlf:global.headlineType',
                'exclude' => '0',
                'config' => [
                    'type' => 'select',
                    'default' => '102',
                    'size' => '1',
                    'maxitems' => '1',
                    'minitems' => '0',
                    'renderType' => 'selectSingle',
                    'items' => [
                        0 => [
                            'label' => 'H1',
                            'value' => '101',
                        ],
                        1 => [
                            'label' => 'H2',
                            'value' => '102',
                        ],
                        2 => [
                            'label' => 'H3',
                            'value' => '103',
                        ],
                        3 => [
                            'label' => 'H4',
                            'value' => '104',
                        ],
                        4 => [
                            'label' => 'H5',
                            'value' => '105',
                        ],
                        5 => [
                            'label' => 'Pseudo H1',
                            'value' => '201',
                        ],
                        6 => [
                            'label' => 'Pseudo H2',
                            'value' => '202',
                        ],
                        7 => [
                            'label' => 'Pseudo H3',
                            'value' => '203',
                        ],
                        8 => [
                            'label' => 'Pseudo H4',
                            'value' => '204',
                        ],
                        9 => [
                            'label' => 'Pseudo H5',
                            'value' => '205',
                        ],
                    ],
                ],
            ],
            'topline' => [
                'label' => 'LLL:EXT:e2_ces/Resources/Private/Language/locallang_db.xlf:e2_flex_hl_text_img.fields.topline',
                'exclude' => '0',
                'config' => [
                    'type' => 'input',
                    'size' => '32',
                    'eval' => 'trim',
                ],
            ],
            'toplineType' => [
                'label' => 'LLL:EXT:e2_ces/Resources/Private/Language/locallang_db.xlf:e2_flex_hl_text_img.fields.toplineType',
                'exclude' => '0',
                'config' => [
                    'type' => 'select',
                    'default' => '204',
                    'size' => '1',
                    'maxitems' => '1',
                    'minitems' => '0',
                    'renderType' => 'selectSingle',
                    'items' => [
                        0 => [
                            'label' => 'H1',
                            'value' => '101',
                        ],
                        1 => [
                            'label' => 'H2',
                            'value' => '102',
                        ],
                        2 => [
                            'label' => 'H3',
                            'value' => '103',
                        ],
                        3 => [
                            'label' => 'H4',
                            'value' => '104',
                        ],
                        4 => [
                            'label' => 'H5',
                            'value' => '105',
                        ],
                        5 => [
                            'label' => 'Pseudo H1',
                            'value' => '201',
                        ],
                        6 => [
                            'label' => 'Pseudo H2',
                            'value' => '202',
                        ],
                        7 => [
                            'label' => 'Pseudo H3',
                            'value' => '203',
                        ],
                        8 => [
                            'label' => 'Pseudo H4',
                            'value' => '204',
                        ],
                        9 => [
                            'label' => 'Pseudo H5',
                            'value' => '205',
                        ],
                    ],
                ],
            ],
            'text' => [
                'label' => 'LLL:EXT:e2_ces/Resources/Private/Language/locallang_db.xlf:e2_flex_hl_text_img.fields.text',
                'exclude' => '0',
                'config' => [
                    'type' => 'text',
                    'rows' => '10',
                    'cols' => '85',
                    'eval' => 'trim',
                    'enableRichtext' => '1',
                    'richtextConfiguration' => 'default',
                    'softref' => 'typolink_tag,email[subst],url',
                ],
            ],
        ],
    ],
    'Image' => [
        'sheetTitle' => 'LLL:EXT:e2_ces/Resources/Private/Language/locallang_db.xlf:e2_flex_hl_text_img.sheets.Image',
        'sheetDescription' => 'LLL:EXT:e2_ces/Resources/Private/Language/locallang_db.xlf:e2_flex_hl_text_img.sheets.Image.description',
        'sheetShortDescr' => 'LLL:EXT:e2_ces/Resources/Private/Language/locallang_db.xlf:e2_flex_hl_text_img.sheets.Image.shortDescription',
        'columns' => [
            'useProductImage' => [
                'label' => 'LLL:EXT:e2_ces/Resources/Private/Language/locallang_db.xlf:e2_flex_hl_text_img.fields.useProductImage',
                'exclude' => '0',
                'config' => [
                    'type' => 'check',
                    'transform' => 'integer',
                    'default' => '0',
                ],
                'onChange' => 'reload',
            ],
            'productimagefile' => [
                'label' => 'LLL:EXT:e2_ces/Resources/Private/Language/locallang_db.xlf:e2_flex_hl_text_img.fields.productimagefile',
                'description' => 'Only file name, no path. E.g. "fos-150007-10_0.jpg"',
                'exclude' => '0',
                'config' => [
                    'type' => 'input',
                    'size' => '32',
                    'eval' => 'trim',
                    'required' => true,
                ],
                'displayCond' => 'FIELD:Image.useProductImage:REQ:true',
            ],
            'imagefile' => [
                'label' => 'LLL:EXT:e2_ces/Resources/Private/Language/locallang_db.xlf:e2_flex_hl_text_img.fields.imagefile',
                'exclude' => '0',
                'config' => [
                    'type' => 'file',
                    'appearance' => [
                        'fileUploadAllowed' => false,
                        'createNewRelationLinkTitle' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:images.addFileReference',
                        'enabledControls' => [
                            'filePathBasedBrowser' => true,
                        ],
                    ],
                    'maxitems' => '1',
                    'allowed' => 'common-image-types',
                ],
                'displayCond' => 'FIELD:Image.useProductImage:REQ:false',
            ],
            'alttext' => [
                'label' => 'LLL:EXT:e2_ces/Resources/Private/Language/locallang_db.xlf:e2_flex_hl_text_img.fields.alttext',
                'exclude' => '0',
                'config' => [
                    'type' => 'input',
                    'size' => '32',
                    'eval' => 'trim',
                ],
            ],
            'caption' => [
                'label' => 'LLL:EXT:e2_ces/Resources/Private/Language/locallang_db.xlf:e2_flex_hl_text_img.fields.caption',
                'exclude' => '0',
                'config' => [
                    'type' => 'input',
                    'size' => '32',
                    'eval' => 'trim',
                ],
            ],
            'captionblock' => [
                'label' => 'LLL:EXT:e2_ces/Resources/Private/Language/locallang_db.xlf:e2_flex_hl_text_img.fields.captionblock',
                'exclude' => '0',
                'config' => [
                    'type' => 'check',
                ],
            ],
            'imageseo' => [
                'label' => 'LLL:EXT:e2_ces/Resources/Private/Language/locallang_db.xlf:e2_flex_hl_text_img.fields.imageseo',
                'exclude' => '0',
                'config' => [
                    'type' => 'input',
                    'size' => '32',
                    'eval' => 'trim',
                ],
            ],
            'imageSizeSmall' => [
                'label' => 'LLL:EXT:e2_ces/Resources/Private/Language/locallang_db.xlf:e2_flex_hl_text_img.fields.imageSizeSmall',
                'exclude' => '0',
                'config' => [
                    'type' => 'select',
                    'default' => '0',
                    'size' => '1',
                    'maxitems' => '1',
                    'minitems' => '0',
                    'renderType' => 'selectSingle',
                    'items' => [
                        0 => [
                            'label' => '-',
                            'value' => '0',
                        ],
                        1 => [
                            'label' => '1',
                            'value' => '1',
                        ],
                        2 => [
                            'label' => '2',
                            'value' => '2',
                        ],
                        3 => [
                            'label' => '3',
                            'value' => '3',
                        ],
                        4 => [
                            'label' => '4',
                            'value' => '4',
                        ],
                        5 => [
                            'label' => '5',
                            'value' => '5',
                        ],
                        6 => [
                            'label' => '6',
                            'value' => '6',
                        ],
                        7 => [
                            'label' => '7',
                            'value' => '7',
                        ],
                        8 => [
                            'label' => '8',
                            'value' => '8',
                        ],
                        9 => [
                            'label' => '9',
                            'value' => '9',
                        ],
                        10 => [
                            'label' => '10',
                            'value' => '10',
                        ],
                        11 => [
                            'label' => '11',
                            'value' => '11',
                        ],
                        12 => [
                            'label' => '12',
                            'value' => '12',
                        ],
                    ],
                ],
            ],
            'imageSizeMedium' => [
                'label' => 'LLL:EXT:e2_ces/Resources/Private/Language/locallang_db.xlf:e2_flex_hl_text_img.fields.imageSizeMedium',
                'exclude' => '0',
                'config' => [
                    'type' => 'select',
                    'default' => '0',
                    'size' => '1',
                    'maxitems' => '1',
                    'minitems' => '0',
                    'renderType' => 'selectSingle',
                    'items' => [
                        0 => [
                            'label' => '-',
                            'value' => '0',
                        ],
                        1 => [
                            'label' => '1',
                            'value' => '1',
                        ],
                        2 => [
                            'label' => '2',
                            'value' => '2',
                        ],
                        3 => [
                            'label' => '3',
                            'value' => '3',
                        ],
                        4 => [
                            'label' => '4',
                            'value' => '4',
                        ],
                        5 => [
                            'label' => '5',
                            'value' => '5',
                        ],
                        6 => [
                            'label' => '6',
                            'value' => '6',
                        ],
                        7 => [
                            'label' => '7',
                            'value' => '7',
                        ],
                        8 => [
                            'label' => '8',
                            'value' => '8',
                        ],
                        9 => [
                            'label' => '9',
                            'value' => '9',
                        ],
                        10 => [
                            'label' => '10',
                            'value' => '10',
                        ],
                        11 => [
                            'label' => '11',
                            'value' => '11',
                        ],
                        12 => [
                            'label' => '12',
                            'value' => '12',
                        ],
                    ],
                ],
            ],
            'imageSizeLarge' => [
                'label' => 'LLL:EXT:e2_ces/Resources/Private/Language/locallang_db.xlf:e2_flex_hl_text_img.fields.imageSizeLarge',
                'exclude' => '0',
                'config' => [
                    'type' => 'select',
                    'default' => '0',
                    'size' => '1',
                    'maxitems' => '1',
                    'minitems' => '0',
                    'renderType' => 'selectSingle',
                    'items' => [
                        0 => [
                            'label' => '-',
                            'value' => '0',
                        ],
                        1 => [
                            'label' => '1',
                            'value' => '1',
                        ],
                        2 => [
                            'label' => '2',
                            'value' => '2',
                        ],
                        3 => [
                            'label' => '3',
                            'value' => '3',
                        ],
                        4 => [
                            'label' => '4',
                            'value' => '4',
                        ],
                        5 => [
                            'label' => '5',
                            'value' => '5',
                        ],
                        6 => [
                            'label' => '6',
                            'value' => '6',
                        ],
                        7 => [
                            'label' => '7',
                            'value' => '7',
                        ],
                        8 => [
                            'label' => '8',
                            'value' => '8',
                        ],
                        9 => [
                            'label' => '9',
                            'value' => '9',
                        ],
                        10 => [
                            'label' => '10',
                            'value' => '10',
                        ],
                        11 => [
                            'label' => '11',
                            'value' => '11',
                        ],
                        12 => [
                            'label' => '12',
                            'value' => '12',
                        ],
                    ],
                ],
            ],
            'imagePosition' => [
                'label' => 'LLL:EXT:e2_ces/Resources/Private/Language/locallang_db.xlf:e2_flex_hl_text_img.fields.imagePosition',
                'exclude' => '0',
                'config' => [
                    'type' => 'select',
                    'default' => 'left',
                    'size' => '1',
                    'maxitems' => '1',
                    'minitems' => '0',
                    'renderType' => 'selectSingle',
                    'items' => [
                        0 => [
                            'label' => 'links',
                            'value' => 'left',
                        ],
                        1 => [
                            'label' => 'rechts',
                            'value' => 'right',
                        ],
                        2 => [
                            'label' => 'oberhalb',
                            'value' => 'center',
                        ],
                    ],
                ],
                'onChange' => 'reload',
            ],
            'imageFlow' => [
                'label' => 'LLL:EXT:e2_ces/Resources/Private/Language/locallang_db.xlf:e2_flex_hl_text_img.fields.imageFlow',
                'exclude' => '0',
                'config' => [
                    'type' => 'select',
                    'default' => 'noFlow',
                    'size' => '1',
                    'maxitems' => '1',
                    'minitems' => '0',
                    'renderType' => 'selectSingle',
                    'items' => [
                        0 => [
                            'label' => 'nebeneinander',
                            'value' => 'noFlow',
                        ],
                        1 => [
                            'label' => 'umfließend',
                            'value' => 'flow',
                        ],
                    ],
                ],
                'onChange' => 'reload',
            ],
            'noImageBottom' => [
                'label' => 'LLL:EXT:e2_ces/Resources/Private/Language/locallang_db.xlf:e2_flex_hl_text_img.fields.noImageBottom',
                'exclude' => '0',
                'config' => [
                    'type' => 'check',
                ],
            ],
            'imageLink' => [
                'label' => 'LLL:EXT:e2_ces/Resources/Private/Language/locallang_db.xlf:e2_flex_hl_text_img.fields.imageLink',
                'exclude' => '0',
                'config' => [
                    'type' => 'link',
                    'size' => '32',
                ],
            ],
        ],
    ],
    'Link' => [
        'sheetTitle' => 'LLL:EXT:e2_ces/Resources/Private/Language/locallang_db.xlf:e2_flex_hl_text_img.sheets.Link',
        'sheetDescription' => 'LLL:EXT:e2_ces/Resources/Private/Language/locallang_db.xlf:e2_flex_hl_text_img.sheets.Link.description',
        'sheetShortDescr' => 'LLL:EXT:e2_ces/Resources/Private/Language/locallang_db.xlf:e2_flex_hl_text_img.sheets.Link.shortDescription',
        'columns' => [
            'linkurl' => [
                'label' => 'LLL:EXT:e2_ces/Resources/Private/Language/locallang_db.xlf:e2_flex_hl_text_img.fields.linkurl',
                'exclude' => '0',
                'config' => [
                    'type' => 'link',
                    'size' => '32',
                ],
            ],
            'trackText' => [
                'label' => 'LLL:EXT:e2_ces/Resources/Private/Language/locallang_db.xlf:e2_flex_hl_text_img.fields.trackText',
                'exclude' => '0',
                'config' => [
                    'type' => 'input',
                    'size' => '32',
                    'eval' => 'lower,alphanum_x',
                ],
            ],
            'nofollow' => [
                'label' => 'LLL:EXT:e2_ces/Resources/Private/Language/locallang_db.xlf:e2_flex_hl_text_img.fields.nofollow',
                'exclude' => '0',
                'config' => [
                    'type' => 'check',
                ],
            ],
            'buttonText' => [
                'label' => 'LLL:EXT:e2_ces/Resources/Private/Language/locallang_db.xlf:e2_flex_hl_text_img.fields.buttonText',
                'exclude' => '0',
                'config' => [
                    'type' => 'input',
                    'size' => '32',
                    'eval' => 'trim',
                ],
            ],
            'buttonStyle' => [
                'label' => 'LLL:EXT:e2_ces/Resources/Private/Language/locallang_db.xlf:e2_flex_hl_text_img.fields.buttonStyle',
                'exclude' => '0',
                'config' => [
                    'type' => 'select',
                    'default' => 'default',
                    'size' => '1',
                    'maxitems' => '1',
                    'minitems' => '0',
                    'renderType' => 'selectSingle',
                    'items' => [
                        0 => [
                            'label' => 'Primary',
                            'value' => 'default',
                        ],
                        1 => [
                            'label' => 'Secondray',
                            'value' => 'info',
                        ],
                        2 => [
                            'label' => 'Warning',
                            'value' => 'warning',
                        ],
                        3 => [
                            'label' => 'Alert',
                            'value' => 'danger',
                        ],
                        4 => [
                            'label' => 'Success',
                            'value' => 'success',
                        ],
                        5 => [
                            'label' => 'Hollow Dark',
                            'value' => 'hollow',
                        ],
                        6 => [
                            'label' => 'Hollow Light',
                            'value' => 'hollowLight',
                        ],
                    ],
                ],
            ],
            'buttonAlign' => [
                'label' => 'LLL:EXT:e2_ces/Resources/Private/Language/locallang_db.xlf:e2_flex_hl_text_img.fields.buttonAlign',
                'exclude' => '0',
                'config' => [
                    'type' => 'select',
                    'default' => 'left',
                    'size' => '1',
                    'maxitems' => '1',
                    'minitems' => '0',
                    'renderType' => 'selectSingle',
                    'items' => [
                        0 => [
                            'label' => 'links',
                            'value' => 'left',
                        ],
                        1 => [
                            'label' => 'rechts',
                            'value' => 'right',
                        ],
                    ],
                ],
            ],
            'fullLinkOverlay' => [
                'label' => 'LLL:EXT:e2_ces/Resources/Private/Language/locallang_db.xlf:e2_flex_hl_text_img.fields.fullLinkOverlay',
                'exclude' => '0',
                'config' => [
                    'type' => 'check',
                    'default' => '0',
                ],
            ],
        ],
    ],
    'Advanced' => [
        'sheetTitle' => 'LLL:EXT:e2_ces/Resources/Private/Language/locallang_db.xlf:e2_flex_hl_text_img.sheets.Advanced',
        'sheetDescription' => 'LLL:EXT:e2_ces/Resources/Private/Language/locallang_db.xlf:e2_flex_hl_text_img.sheets.Advanced.description',
        'sheetShortDescr' => 'LLL:EXT:e2_ces/Resources/Private/Language/locallang_db.xlf:e2_flex_hl_text_img.sheets.Advanced.shortDescription',
        'columns' => [
            'swapColumnsFrom' => [
                'label' => 'LLL:EXT:e2_ces/Resources/Private/Language/locallang_db.xlf:e2_flex_hl_text_img.fields.swapColumnsFrom',
                'exclude' => '0',
                'config' => [
                    'type' => 'select',
                    'default' => '0',
                    'size' => '1',
                    'maxitems' => '1',
                    'minitems' => '0',
                    'renderType' => 'selectSingle',
                    'items' => [
                        0 => [
                            'label' => '-',
                            'value' => '0',
                        ],
                        1 => [
                            'label' => 'small',
                            'value' => 'small',
                        ],
                        2 => [
                            'label' => 'medium',
                            'value' => 'medium',
                        ],
                        3 => [
                            'label' => 'xmedium',
                            'value' => 'xmedium',
                        ],
                        4 => [
                            'label' => 'large',
                            'value' => 'large',
                        ],
                    ],
                ],
                'displayCond' => [
                    'AND' => [
                        1 => 'FIELD:Image.imagePosition:!=:center',
                        2 => 'FIELD:Image.imageFlow:=:noFlow',
                    ],
                ],
                'onChange' => 'reload',
            ],
            'swapColumnsTo' => [
                'label' => 'LLL:EXT:e2_ces/Resources/Private/Language/locallang_db.xlf:e2_flex_hl_text_img.fields.swapColumnsTo',
                'exclude' => '0',
                'config' => [
                    'type' => 'select',
                    'default' => '0',
                    'size' => '1',
                    'maxitems' => '1',
                    'minitems' => '0',
                    'renderType' => 'selectSingle',
                    'items' => [
                        0 => [
                            'label' => '-',
                            'value' => '0',
                        ],
                        1 => [
                            'label' => 'medium',
                            'value' => 'medium',
                        ],
                        2 => [
                            'label' => 'xmedium',
                            'value' => 'xmedium',
                        ],
                        3 => [
                            'label' => 'large',
                            'value' => 'large',
                        ],
                    ],
                ],
                'displayCond' => [
                    'AND' => [
                        1 => 'FIELD:Image.imagePosition:!=:center',
                        2 => 'FIELD:Image.imageFlow:=:noFlow',
                        3 => 'FIELD:Advanced.swapColumnsFrom:!=:0',
                    ],
                ],
            ],
        ],
    ],
];

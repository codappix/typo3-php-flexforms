PHP FlexForms for TYPO3
=======================

Provides APIs to use FlexForms written as PHP arrays within TYPO3.

Why
===

We don't like the approach of TYPO3 FlexForms written in XML.

XML is hard to read, extend, test and maintain.

That's why we prefer PHP files instead. That way developers are free to use
whatever they want. Either plain PHP or even YAML or other formats. They
are not forced to anything but can stick to their known tooling.

So this package should in general handle PHP FlexForms for TYPO3.

The benefits we see:

- field definitions are similar to TCA
- use static code analysis software like PHPstan to validate dependencies
- use our standard coding guideline fixer
- make use of includes or builder classes for common fields
- easier override of existing PHP FlexForms through include and array merge
- use ENUMs for select items

Usage
=====

See our own tests for how to use, as they do nothing else.

1. Create a FlexForm

   A FlexForm is a PHP file that returns an array.

   We have different examples in our test fixtures. Have a look to
   `Test/Fixtures/Configuration/FlexForms/`

2. Use the path to the PHP FlexForm file instead of the XML.

```php
        $GLOBALS['TCA'] = [
            'tt_content' => [
                'columns' => [
                    'pi_flexform' => [
                        'config' => [
                            'ds' => [
                                '*,typo3_php_flexform_test' => 'EXT:typo3_php_flexforms/Tests/Fixtures/Configuration/FlexForms/withOneSheet/input.php',
                            ],
                        ],
                    ],
                ],
            ],
        ];
```

TODO
====

- We will abstract the syntax for sections within a sheet, so we get rid of

```php
    'section' => '1',
    'type' => 'array',
    'el' => [
       // some field definitions
    ],
```

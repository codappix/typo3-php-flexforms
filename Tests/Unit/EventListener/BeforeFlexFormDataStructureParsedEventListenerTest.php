<?php

declare(strict_types=1);

namespace Codappix\Typo3PhpFlexforms\Tests\Unit\EventListener;

use Codappix\Typo3PhpFlexforms\EventListener\BeforeFlexFormDataStructureParsedEventListener;
use InvalidArgumentException;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;
use TYPO3\CMS\Core\Configuration\Event\BeforeFlexFormDataStructureParsedEvent;

final class BeforeFlexFormDataStructureParsedEventListenerTest extends TestCase
{
    protected function tearDown(): void
    {
        unset(
            $GLOBALS['TCA'],
        );
        parent::tearDown();
    }

    #[DataProvider('invalidReturnTypeProvider')]
    #[Test]
    public function withInvalidReturnType(string $inputFileName): void
    {
        $this->expectException(InvalidArgumentException::class);

        $inputFile = __DIR__ . '/../../Fixtures/Configuration/FlexForm/' . __FUNCTION__ . '/' . $inputFileName;

        self::configureFlexFormDataStructureFile($inputFile);

        $event = new BeforeFlexFormDataStructureParsedEvent([
            'type' => 'tca',
            'tableName' => 'tt_content',
            'fieldName' => 'pi_flexform',
            'dataStructureKey' => '*,typo3_php_flexform_test',
        ]);

        $subject = new BeforeFlexFormDataStructureParsedEventListener();
        $subject($event);
    }

    public static function invalidReturnTypeProvider(): iterable
    {
        yield 'empty file' => [
            'inputFileName' => 'emptyFile.php',
        ];
        yield 'normal txt file' => [
            'inputFileName' => 'normalTxtFile.php',
        ];
        yield 'php file with no return' => [
            'inputFileName' => 'phpFileWithNoReturn.php',
        ];
        yield 'php file with wrong return type' => [
            'inputFileName' => 'phpFileWithWrongReturnType.php',
        ];
    }

    #[Test]
    public function withoutASheet(): void
    {
        $inputFile = __DIR__ . '/../../Fixtures/Configuration/FlexForm/' . __FUNCTION__ . '/input.php';
        $expectedFile = __DIR__ . '/../../Fixtures/Configuration/FlexForm/' . __FUNCTION__ . '/expected.php';

        self::configureFlexFormDataStructureFile($inputFile);

        $expected = include $expectedFile;
        $event = new BeforeFlexFormDataStructureParsedEvent([
            'type' => 'tca',
            'tableName' => 'tt_content',
            'fieldName' => 'pi_flexform',
            'dataStructureKey' => '*,typo3_php_flexform_test',
        ]);

        $subject = new BeforeFlexFormDataStructureParsedEventListener();
        $subject($event);

        self::assertSame($expected, $event->getDataStructure());
    }

    #[Test]
    public function withOneSheet(): void
    {
        $inputFile = __DIR__ . '/../../Fixtures/Configuration/FlexForm/' . __FUNCTION__ . '/input.php';
        $expectedFile = __DIR__ . '/../../Fixtures/Configuration/FlexForm/' . __FUNCTION__ . '/expected.php';

        self::configureFlexFormDataStructureFile($inputFile);

        $expected = include $expectedFile;
        $event = new BeforeFlexFormDataStructureParsedEvent([
            'type' => 'tca',
            'tableName' => 'tt_content',
            'fieldName' => 'pi_flexform',
            'dataStructureKey' => '*,typo3_php_flexform_test',
        ]);

        $subject = new BeforeFlexFormDataStructureParsedEventListener();
        $subject($event);

        self::assertSame($expected, $event->getDataStructure());
    }

    #[Test]
    public function withMoreThanOneSheet(): void
    {
        $inputFile = __DIR__ . '/../../Fixtures/Configuration/FlexForm/' . __FUNCTION__ . '/input.php';
        $expectedFile = __DIR__ . '/../../Fixtures/Configuration/FlexForm/' . __FUNCTION__ . '/expected.php';

        self::configureFlexFormDataStructureFile($inputFile);

        $expected = include $expectedFile;
        $event = new BeforeFlexFormDataStructureParsedEvent([
            'type' => 'tca',
            'tableName' => 'tt_content',
            'fieldName' => 'pi_flexform',
            'dataStructureKey' => '*,typo3_php_flexform_test',
        ]);

        $subject = new BeforeFlexFormDataStructureParsedEventListener();
        $subject($event);

        self::assertSame($expected, $event->getDataStructure());
    }

    private static function configureFlexFormDataStructureFile(string $inputFile): void
    {
        $GLOBALS['TCA'] = [
            'tt_content' => [
                'columns' => [
                    'pi_flexform' => [
                        'config' => [
                            'ds' => [
                                '*,typo3_php_flexform_test' => $inputFile,
                            ],
                        ],
                    ],
                ],
            ],
        ];
    }
}

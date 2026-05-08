<?php

declare(strict_types=1);

namespace Codappix\Typo3PhpFlexforms\EventListener;

use InvalidArgumentException;
use RuntimeException;
use TYPO3\CMS\Core\Configuration\Event\BeforeFlexFormDataStructureParsedEvent;
use TYPO3\CMS\Core\Configuration\FlexForm\Exception\InvalidIdentifierException;
use TYPO3\CMS\Core\Utility\ArrayUtility;
use TYPO3\CMS\Core\Utility\GeneralUtility;

final class BeforeFlexFormDataStructureParsedEventListener
{
    public function __invoke(BeforeFlexFormDataStructureParsedEvent $event): void
    {
        $identifier = $event->getIdentifier();
        if ($identifier['type'] !== 'tca') {
            return;
        }

        $filePath = self::getDefaultStructureForIdentifier($identifier);

        if (self::isPhpFile($filePath) === false) {
            return;
        }

        $dataStructure = include $filePath;

        if (is_array($dataStructure) === false) {
            throw new InvalidArgumentException(
                'PHP FlexFrom file has to provide an arrey. ',
                1781008863
            );
        }

        $event->setDataStructure(self::enrichDataStructure($dataStructure));
    }

    private static function getDefaultStructureForIdentifier(array $identifier): string
    {
        if (empty($identifier['tableName'])
            || empty($identifier['fieldName'])
            || empty($identifier['dataStructureKey'])
        ) {
            throw new RuntimeException(
                'Incomplete "tca" based identifier: ' . json_encode($identifier),
                1478113471
            );
        }
        $table = $identifier['tableName'];
        $field = $identifier['fieldName'];
        $dataStructureKey = $identifier['dataStructureKey'];

        if (is_string($table) === false
            || is_string($field) === false
            || is_string($dataStructureKey) === false
        ) {
            throw new RuntimeException(
                'Invalid "tca" based identifier: ' . json_encode($identifier),
                1781020489
            );
        }

        $configruationPath = 'TCA/' . $table . '/columns/' . $field . '/config/ds/' . $dataStructureKey;

        if (ArrayUtility::isValidPath($GLOBALS, $configruationPath) === false
            || !is_string(ArrayUtility::getValueByPath($GLOBALS, $configruationPath))
        ) {
            // This may happen for elements pointing to an unloaded extension -> catchable
            throw new InvalidIdentifierException(
                'Specified identifier ' . json_encode($identifier) . ' does not resolve to a valid'
                . ' TCA array value',
                1478105491
            );
        }

        $dataStructure = ArrayUtility::getValueByPath($GLOBALS, $configruationPath);

        if (str_starts_with(trim($dataStructure), 'FILE:')) {
            $dataStructure = mb_substr(trim($dataStructure), 5);
            $dataStructure = GeneralUtility::getFileAbsFileName($dataStructure);
        }

        return $dataStructure;
    }

    private static function enrichDataStructure(array $dataStructure): array
    {
        $enrichedDataStructure = [];

        if (self::hasColumns($dataStructure)) {
            $enrichedDataStructure['ROOT'] = [
                'type' => 'array',
                'el' => $dataStructure['columns'],
            ];

            return $enrichedDataStructure;
        }

        foreach ($dataStructure as $sheetName => $sheet) {
            if (is_array($sheet) === false
                || self::hasColumns($sheet) === false
            ) {
                continue;
            }

            $sheetdata = [
                'sheetTitle' => $sheet['sheetTitle'] ?? '',
                'sheetDescription' => $sheet['sheetDescription'] ?? '',
                'sheetShortDescr' => $sheet['sheetShortDescr'] ?? '',
                'type' => 'array',
                'el' => $sheet['columns'],
            ];

            if (isset($sheet['displayCond'])
                && empty($sheet['displayCond']) === false
            ) {
                $sheetdata['displayCond'] = $sheet['displayCond'];
            }
            $enrichedDataStructure['sheets'][$sheetName] = ['ROOT' => $sheetdata];
        }

        return $enrichedDataStructure;
    }

    private static function hasColumns(array $dataStructure): bool
    {
        return isset($dataStructure['columns'])
            && is_array($dataStructure['columns'])
            && $dataStructure['columns'] !== [];
    }

    private static function isPhpFile(string $filePath): bool
    {
        return $filePath !== ''
            && file_exists($filePath)
            && pathinfo($filePath, PATHINFO_EXTENSION) === 'php';
    }
}

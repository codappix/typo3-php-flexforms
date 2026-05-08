<?php

declare(strict_types=1);

namespace Symfony\Component\DependencyInjection\Loader\Configurator;

use Codappix\Typo3PhpFlexforms\EventListener\BeforeFlexFormDataStructureParsedEventListener;
use TYPO3\CMS\Core\Configuration\Event\BeforeFlexFormDataStructureParsedEvent;

return static function (ContainerConfigurator $containerConfigurator): void {
    $services = $containerConfigurator->services();

    $services
        ->defaults()
        ->autowire()
        ->autoconfigure()
        ->private()
    ;

    $services
        ->set(BeforeFlexFormDataStructureParsedEventListener::class)
        ->tag(
            'event.listener',
            [
                'event' => BeforeFlexFormDataStructureParsedEvent::class,
            ]
        )
    ;
};

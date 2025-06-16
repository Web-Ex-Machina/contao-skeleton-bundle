<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;
use Contao\Rector\Set\ContaoSetList;
use Rector\Set\ValueObject\SetList;

return RectorConfig::configure()
    ->withPaths([__DIR__ . '/src'])
    ->withSets([
        SetList::PHP_82,
        ContaoSetList::CONTAO_413,
        ContaoSetList::CONTAO_50,
        ContaoSetList::CONTAO_51,
        ContaoSetList::CONTAO_53,
        ContaoSetList::ANNOTATIONS_TO_ATTRIBUTES,
        ContaoSetList::FQCN
    ])
    ->withPreparedSets(
        deadCode: true,
        codeQuality: true,
        codingStyle: true,
        typeDeclarations: true,
        privatization: true,
        instanceOf: true,
        earlyReturn: true,
        strictBooleans: true,
        doctrineCodeQuality: true,
        symfonyCodeQuality: true
    );
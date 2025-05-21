<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;
use Contao\Rector\Set\ContaoSetList;

return RectorConfig::configure()
    ->withPaths([__DIR__ . '/src'])
    ->withSets([
        ContaoSetList::CONTAO_53,
        ContaoSetList::ANNOTATIONS_TO_ATTRIBUTES,
        ContaoSetList::FQCN
    ])
    ->withPreparedSets(
        deadCode: true,
        codeQuality: true,
        codingStyle: true,
        typeDeclarations: true,
        instanceOf: true,
        earlyReturn: true,
        strictBooleans: true,
        doctrineCodeQuality: true,
        symfonyCodeQuality: true
    );
<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;
use Rector\Symfony\Set\SymfonySetList;

return RectorConfig::configure()
    ->withPaths([__DIR__ . '/src'])
    ->withPhpSets($php74= true)
    ->withSets([
        SymfonySetList::SYMFONY_72,
    ])
    ->withPreparedSets(
        $deadCode= true,
        $codeQuality= true,
        $codingStyle= true,
        $typeDeclarations= true,
        $instanceOf= true,
        $earlyReturn= true,
        $strictBooleans= true,
        $doctrineCodeQuality= true,
        $symfonyCodeQuality= true
    );

<?php

// $finder = PhpCsFixer\Finder::create()
//     ->in(__DIR__)
//     ->exclude(['bootstrap', 'storage', 'vendor'])
//     ->name('*.php')
//     ->notName('*.blade.php')
//     ->ignoreDotFiles(true)
//     ->ignoreVCS(true);

return PhpCsFixer\Config::create()
    ->setRules([
        '@PSR2' => true,
    ]);
    // ->setFinder($finder);

<?php

$finder = Symfony\CS\Finder\DefaultFinder::create()
    ->exclude('bootstrap')
    ->exclude('public')
    ->exclude('storage')
    ->exclude('node_modules')
    ->in(__DIR__);

return Symfony\CS\Config\Config::create()
    ->setUsingCache(true)
    ->level(Symfony\CS\FixerInterface::SYMFONY_LEVEL)
    ->fixers([
        //exclude psr0
        '-psr0',
        //exclude symfony rules
        '-concat_without_spaces',
        '-multiline_array_trailing_comma',
        '-phpdoc_no_empty_return',
        '-new_with_braces',
        '-phpdoc_params',
        '-phpdoc_short_description',
        '-unalign_equals',
        '-double_arrow_multiline_whitespaces',
        '-pre_increment',
        //include custom (contrib) rules
        'align_equals',
        'concat_with_spaces',
        'multiline_spaces_before_semicolon',
        'short_array_syntax'
        ])
    ->finder($finder);

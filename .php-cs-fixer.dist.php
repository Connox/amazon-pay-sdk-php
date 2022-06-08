<?php

declare(strict_types=1);

$finder = (new PhpCsFixer\Finder())
    ->in(__DIR__ . '/src')
    ->in(__DIR__ . '/tests');

return (new PhpCsFixer\Config())
    ->setRules(
        [
            '@Symfony' => true,
            // changed
            'ordered_imports' => ['imports_order' => ['class', 'const', 'function']],
            'cast_spaces' => ['space' => 'none'],
            // experimental
            'array_indentation' => true,
            'combine_consecutive_issets' => true,
            'combine_consecutive_unsets' => true,
            'explicit_indirect_variable' => true,
            'list_syntax' => ['syntax' => 'short'],
            'no_alias_functions' => true,
            'random_api_migration' => true,
            'use_arrow_functions' => true,
            // disabled
            'increment_style' => false,
            'no_blank_lines_after_phpdoc' => false,
            'php_unit_method_casing' => false,
            'phpdoc_summary' => false,
            'phpdoc_to_comment' => false,
            'single_line_comment_spacing' => false,
            'single_line_comment_style' => false,
            'single_line_throw' => false,
            'yoda_style' => false,
        ]
    )
    ->setFinder($finder);

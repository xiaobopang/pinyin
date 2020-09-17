<?php
$header = <<<'EOF'
Created Date: Friday December 16th 2016
Author: Pangxiaobo
Last Modified: Friday December 16th 2016 4:05:44 pm
Modified By: the developer formerly known as Pangxiaobo at <10846295@qq.com>
Copyright (c) 2016 Pangxiaobo
EOF;

$finder = PhpCsFixer\Finder::create()
    ->exclude(['data'])
    ->in(__DIR__)
;

$config = PhpCsFixer\Config::create()
    ->setRiskyAllowed(true)
    ->setRules([
        '@PSR2' => true,
        'align_multiline_comment' => true,
        'array_indentation' => true,
        'array_syntax' => ['syntax' => 'short'],
        'binary_operator_spaces' => [
            'align_double_arrow' => false,
            'align_equals' => false,
        ],
        'blank_line_after_opening_tag' => true,
        'blank_line_before_statement' => true,
        'blank_line_before_return' => true,
        'braces' => [
            'allow_single_line_closure' => true,
        ],
        'combine_consecutive_unsets' => true,
        'compact_nullable_typehint' => true,
        'concat_space' => ['spacing' => 'none'],
        'declare_equal_normalize' => true,
        'dir_constant' => true,
        'doctrine_annotation_array_assignment' => true,
        'method_separation' => true,
        'function_typehint_space' => true,
        'hash_to_slash_comment' => true,
        'header_comment' => ['header' => $header],
        'include' => true,
        'lowercase_cast' => true,
        'new_with_braces' => true,
        'no_blank_lines_after_class_opening' => true,
        'no_blank_lines_after_phpdoc' => true,
        'no_empty_phpdoc' => true,
        'no_empty_statement' => true,
        'no_extra_consecutive_blank_lines' => [
            'curly_brace_block',
            'extra',
            'parenthesis_brace_block',
            'square_brace_block',
            'throw',
            'use',
        ],
        'no_leading_import_slash' => true,
        'no_leading_namespace_whitespace' => true,
        'no_mixed_echo_print' => ['use' => 'echo'],
        'no_multiline_whitespace_around_double_arrow' => true,
        'no_multiline_whitespace_before_semicolons' => true,
        // 'no_singleline_whitespace_before_semicolons' => true,
        'no_spaces_around_offset' => true,
        'no_trailing_comma_in_singleline_array' => true,
        // 'no_unneeded_control_parentheses' => true,
        'no_unused_imports' => true,
        'no_useless_else' => true,
        'no_whitespace_before_comma_in_array' => true,
        'no_whitespace_in_blank_line' => true,
        // 'normalize_index_brace' => true,
        'object_operator_without_whitespace' => true,
        'ordered_class_elements' => true,
        'ordered_imports' => true,
        // 'php_unit_fqcn_annotation' => true,
        'phpdoc_align' => true,
        // 'phpdoc_annotation_without_dot' => true,
        'phpdoc_indent' => true,
        // 'phpdoc_inline_tag' => true,
        // 'phpdoc_return_self_reference' => true,
        // 'phpdoc_scalar' => true,
        // 'phpdoc_separation' => true,
        // 'phpdoc_single_line_var_spacing' => true,
        // 'phpdoc_summary' => true,
        'phpdoc_trim' => true,
        'phpdoc_types' => true,
        'pow_to_exponentiation' => true,
        'random_api_migration' => true,
        'short_scalar_cast' => true,
        'single_quote' => true,
        'single_blank_line_before_namespace' => true,
        'space_after_semicolon' => true,
        'standardize_not_equals' => true,
        'ternary_operator_spaces' => true,
        'ternary_to_null_coalescing' => true,
        'trim_array_spaces' => true,
        'unary_operator_spaces' => true,
        'whitespace_after_comma_in_array' => true,
        'yoda_style' => true,
    ])
    ->setFinder($finder)
;

// special handling of fabbot.io service if it's using too old PHP CS Fixer version
if (false !== getenv('FABBOT_IO')) {
    try {
        PhpCsFixer\FixerFactory::create()
            ->registerBuiltInFixers()
            ->registerCustomFixers($config->getCustomFixers())
            ->useRuleSet(new PhpCsFixer\RuleSet($config->getRules()));
    } catch (PhpCsFixer\ConfigurationException\InvalidConfigurationException $e) {
        $config->setRules([]);
    } catch (UnexpectedValueException $e) {
        $config->setRules([]);
    } catch (InvalidArgumentException $e) {
        $config->setRules([]);
    }
}

return $config;

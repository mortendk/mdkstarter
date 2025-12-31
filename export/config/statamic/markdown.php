<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Markdown Parser Configurations
    |--------------------------------------------------------------------------
    |
    | Here you may define the configuration arrays for each markdown parser.
    | You may use the base CommonMark options as well as any extensions'
    | options here. The available options are in the CommonMark docs.
    |
    | https://statamic.dev/extending/markdown#configuration
    |
    */

    'configs' => [

        'default' => [
            // Table of Contents
            'table_of_contents' => [
                'html_class' => 'table-of-contents',
                'position' => 'top',
                'min_heading_level' => 2,
                'max_heading_level' => 4,
                'placeholder' => '[TOC]', // Optional: allows inserting TOC via placeholder
            ],

            // Heading Permalinks
            'heading_permalink' => [
                'html_class' => 'heading-permalink',
                'id_prefix' => 'content',
                'insert' => 'before',
                'symbol' => '#',
                'title' => 'Permalink',
            ],

            // Smart Punctuation (converts straight quotes to curly, etc.)
            'smartypants' => [
                'double_quote_opener' => '“',
                'double_quote_closer' => '”',
                'single_quote_opener' => '‘',
                'single_quote_closer' => '’',
            ],

            // External Links (automatically add target="_blank" and rel="nofollow")
            'external_link' => [
                'internal_hosts' => [config('app.url')],
                'open_in_new_window' => true,
                'html_class' => 'external-link',
                'nofollow' => 'external',
                'noopener' => 'external',
                'noreferrer' => 'external',
            ],

            // CommonMark options
            'commonmark' => [
                'enable_em' => true,
                'enable_strong' => true,
                'use_asterisk' => true,
                'use_underscore' => true,
                'unordered_list_markers' => ['-', '*', '+'],
            ],
        ],

    ],

];

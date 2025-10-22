<?php
return [
    'crawl' => false,
    'paths' => [
        '/',
        '/services',
        '/gallery',
        '/contact'
    ],
    'include_files' => [
        'public' => '', // <-- Pastikan ini
    ],
    'exclude_file_patterns' => [
        '/\.php$/',
        '/mix-manifest\.json$/',
    ],
    'clean_before_export' => true,
    'disk' => null,
    'before' => [
        'assets' => 'npm run build', // <-- Pastikan ini aktif
    ],
    'after' => [],
];
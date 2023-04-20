<?php

add_action(
    'init',
    function () {
        // https://developer.wordpress.org/block-editor/reference-guides/block-api/block-metadata/
        register_block_type(__DIR__ . '/../resources/views/blocks/contact1');
    }
);

function sage_block_contact1($atts)
{
    echo view('blocks.contact1.view', [
        'class' => $atts['className'] ?? '',
        'title' => get_field('title'),
        'text' => get_field('text'),
        'shortcode' => get_field('shortcode'),
    ]);
}

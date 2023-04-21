<?php

add_action(
    'init',
    function () {
        // https://developer.wordpress.org/block-editor/reference-guides/block-api/block-metadata/
        register_block_type(__DIR__ . '/../resources/views/blocks/contact2');
    }
);

function sage_block_contact2($atts)
{
    echo view('blocks.contact2.view', [
        'class' => $atts['className'] ?? '',
        'title' => get_field('title'),
        'text' => get_field('text'),
        'image' => get_field('image'),
        'shortcode' => get_field('shortcode'),
    ]);
}

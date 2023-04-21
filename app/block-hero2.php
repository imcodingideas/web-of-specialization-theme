<?php

add_action(
    'init',
    function () {
        // https://developer.wordpress.org/block-editor/reference-guides/block-api/block-metadata/
        register_block_type(__DIR__ . '/../resources/views/blocks/hero2');
    }
);

function sage_block_hero2($atts)
{
    echo view('blocks.hero2.view', [
        'class' => $atts['className'] ?? '',
        'title' => get_field('title'),
        'text' => get_field('text'),
        'link1' => get_field('link1'),
        'link2' => get_field('link2'),
        'image' => get_field('image'),
    ]);
}

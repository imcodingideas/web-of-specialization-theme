<?php

add_action(
    'init',
    function () {
        // https://developer.wordpress.org/block-editor/reference-guides/block-api/block-metadata/
        register_block_type(__DIR__ . '/../resources/views/blocks/hero1');
    }
);

function sage_block_hero1()
{
    echo view('blocks.hero1.hero1', [
        'title' => get_field('title'),
        'text' => get_field('text'),
        'link1' => get_field('link1'),
        'link2' => get_field('link2'),
        'image' => get_field('image'),
    ]);
}

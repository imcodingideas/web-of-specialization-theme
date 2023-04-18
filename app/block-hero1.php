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
    echo view('blocks.hero1.hero1',[
        'hello' => 'world',
    ]);
}

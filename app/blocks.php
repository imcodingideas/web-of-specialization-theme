<?php


add_action('init', 'sage_register_block_types');

function sage_register_block_types()
{
    // https://developer.wordpress.org/block-editor/reference-guides/block-api/block-metadata/
    register_block_type(__DIR__ . '/../resources/views/blocks/hero1');
}

function renderHero1()
{
    echo "<div class='text-5xl'>hello world</div>";
}

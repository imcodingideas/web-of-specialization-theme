<?php

add_action(
    'init',
    function () {
        register_block_type(__DIR__ . '/../resources/views/blocks/cta1');
    }
);

function sage_block_cta1($atts)
{
    echo view('blocks.cta1.view', [
        'class' => $atts['className'] ?? '',
        'title' => get_field('title'),
        'text' => get_field('text'),
        'link1' => get_field('link1'),
        'link2' => get_field('link2'),
    ]);
}

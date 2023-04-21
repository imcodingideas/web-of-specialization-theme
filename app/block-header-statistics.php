<?php

add_action(
    'init',
    function () {
        register_block_type(__DIR__ . '/../resources/views/blocks/header-statistics');
    }
);

function sage_block_header_statistics($atts)
{

    // Repeater field
    $links = [];
    while (have_rows('links')) {
        the_row();
        $links[] = [
            'link' => get_sub_field('link'),
        ];
    }

    // Repeater field
    $cards = [];
    while (have_rows('cards')) {
        the_row();
        $cards[] = [
            'title' => get_sub_field('title'),
            'text' => get_sub_field('text'),
        ];
    }

    echo view('blocks.header-statistics.view', [
        'class' => $atts['className'] ?? '',
        'title' => get_field('title'),
        'text' => get_field('text'),
        'background' => get_field('background'),
        'links' => $links,
        'cards' => $cards,
    ]);
}

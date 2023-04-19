<?php

add_action(
    'init',
    function () {
        register_block_type(__DIR__ . '/../resources/views/blocks/header-cards');
    }
);

function sage_block_header_cards($atts)
{
    // Repeater field
    $cards = [];
    while (have_rows('cards')) {
        the_row();
        $cards[] = [
            'icon' => get_sub_field('icon'),
            'title' => get_sub_field('title'),
            'text' => get_sub_field('text'),
        ];
    }

    echo view('blocks.header-cards.view', [
        'class' => $atts['className'] ?? '',
        'title' => get_field('title'),
        'text' => get_field('text'),
        'background' => get_field('background'),
        'cards' => $cards,
    ]);
}

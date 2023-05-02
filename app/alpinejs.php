<?php

add_action('wp_enqueue_scripts', function () {
    wp_enqueue_script(
        'alpinejs', // name
        "https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js", // url
        [], // dependencies
        '3', // version
        true // in footer
    );
});

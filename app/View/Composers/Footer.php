<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class Footer extends Composer
{
    protected static $views = [
        'sections.footer',
    ];

    public function with()
    {
        // Repeater field
        $links = [];
        while (have_rows('links', 'option')) {
            the_row();
            $links[] = [
                'icon' => get_sub_field('icon'),
                'link' => get_sub_field('link'),
            ];
        }

        return [
            'logo_footer' => get_field('logo_footer', 'option'),
            'footer_text' => get_field('footer_text', 'option'),
            'links' => $links,
        ];
    }
}

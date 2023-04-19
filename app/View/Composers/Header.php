<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class Header extends Composer
{
    protected static $views = [
        'sections.header',
    ];

    public function with()
    {
        return [
            'logo_header' => get_field('logo_header', 'option'),
            'cta_header' => get_field('cta_header', 'option'),
        ];
    }
}

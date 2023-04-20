<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class CaseStudy extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        'single-case-study',
    ];

    /**
     * Data to be passed to view before rendering.
     *
     * @return array
     */
    public function with()
    {
        return [
            'title' => get_the_title(),
            'teaser' => get_field('teaser'),
            'excerpt' => get_the_excerpt(),
            'thumbnail' => has_post_thumbnail() ? get_the_post_thumbnail(null, 'large', ['class' => 'w-[48rem] max-w-none rounded-xl bg-gray-900 shadow-xl ring-1 ring-gray-400/10 sm:w-[57rem]']) : '',
            'content' => get_the_content(),
        ];
    }
}

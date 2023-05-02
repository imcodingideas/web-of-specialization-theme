<?php
if (!defined('ABSPATH')) {
    exit;
}
/*
* Template Name: Block contact 1
*/
?>
<!-- requires alpinejs -->
<div x-data="{ open: false }">
    <div class="text-center">
        <button type="button" x-show="!open" @click="open = ! open" class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Get started</button>
    </div>

    <!-- form -->
    <div x-show="open" @click.outside="open = false" x-transition>
        <div class="grid grid-cols-1 gap-x-8 gap-y-6">
            <div>
                <label for="my-name" class="block text-sm font-semibold leading-6 text-gray-900">Name</label>
                <div class="mt-2.5">
                    [text* my-name]
                </div>
            </div>
            <div>
                <label for="email" class="block text-sm font-semibold leading-6 text-gray-900">Email</label>
                <div class="mt-2.5">
                    [email* my-email]
                </div>
            </div>
            <div>
                <label for="email" class="block text-sm font-semibold leading-6 text-gray-900">Service</label>
                <div class="mt-2.5">
                    [select* service "AI Classes" "Idea Exploration" "AI Implementation" "AI Customization" "Other"]
                </div>
            </div>
            <div>
                <label for="message" class="block text-sm font-semibold leading-6 text-gray-900">More Info</label>
                <div class="mt-2.5">
                    [textarea message maxlength:250]
                </div>
            </div>
        </div>

        <div class="mt-10">
            [submit class:btn-submit "Let's go!"]
        </div>

    </div>
</div>

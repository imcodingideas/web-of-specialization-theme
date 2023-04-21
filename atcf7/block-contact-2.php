<?php
if (!defined('ABSPATH')) {
    exit;
}
/*
* Template Name: Block contact 2
*/
?>
<div class="grid grid-cols-1 gap-x-8 gap-y-6 sm:grid-cols-2 mt-4">
    <div>
        <label for="first-name" class="block text-sm font-semibold leading-6 text-gray-900">First name</label>
        <div class="mt-2.5">
            [text* first-name]
        </div>
    </div>
    <div>
        <label for="last-name" class="block text-sm font-semibold leading-6 text-gray-900">Last name</label>
        <div class="mt-2.5">
            [text* last-name]
        </div>
    </div>
    <div class="sm:col-span-2">
        <label for="company" class="block text-sm font-semibold leading-6 text-gray-900">Company</label>
        <div class="mt-2.5">
            [text company]
        </div>
    </div>
    <div class="sm:col-span-2">
        <label for="email" class="block text-sm font-semibold leading-6 text-gray-900">Email</label>
        <div class="mt-2.5">
            [email* my-email]
        </div>
    </div>
    <div class="sm:col-span-2">
        <label for="phone-number" class="block text-sm font-semibold leading-6 text-gray-900">Phone number</label>
        <div class="relative mt-2.5">
            <div class="mt-2.5">[tel phone-number]</div>
        </div>
    </div>
    <div class="sm:col-span-2">
        <label for="message" class="block text-sm font-semibold leading-6 text-gray-900">How can we help you?</label>
        <div class="mt-2.5">
            [textarea message class:class1 class:class2]
        </div>
    </div>
    <div class="sm:col-span-2">
        <div class="leading-6 text-gray-600 text-sm">
            [acceptance conditions] <span class="ml-2">By selecting this, you agree to our <a href="#" class="font-semibold text-indigo-600">privacy&nbsp;policy</a>.</span> [/acceptance]
        </div>
    </div>
</div>

<div class="mt-10">
    [submit class:btn-submit "Send message"]
</div>

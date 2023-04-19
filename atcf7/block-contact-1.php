<?php
if (!defined('ABSPATH')) {
    exit;
}
/*
* Template Name: Block contact 1
*/
?>
<div class="grid grid-cols-1 gap-x-8 gap-y-6 sm:grid-cols-2">
    <div>
        <label for="first-name" class="block text-sm font-semibold leading-6 text-gray-900">First name</label>
        <div class="mt-2.5">
            <input type="text" name="first-name" id="first-name" autocomplete="given-name" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
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
        <label for="message" class="block text-sm font-semibold leading-6 text-gray-900">Message</label>
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
    [submit class:btn-submit "Let's talk"]
</div>

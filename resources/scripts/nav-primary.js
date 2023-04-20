import 'jquery';

export default function () {
  jQuery(document).ready(function ($) {
    // close button
    $('#nav-primary-mobile__close').click(() => {
      $('.nav-primary-mobile').removeClass('block').addClass('hidden');
    });

    // open button
    $('#nav-primary-mobile__open').click(() => {
      $('.nav-primary-mobile').removeClass('hidden').addClass('block');
    });
  });
}

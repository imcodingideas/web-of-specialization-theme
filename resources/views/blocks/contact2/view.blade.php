{{--

Requires:

- @tailwindcss/forms

Recommended:

- add-template-for-contact-form-7
--}}
<div class="form-contact2 relative bg-white {{ $class }}">
  <div class="lg:absolute lg:inset-0 lg:left-1/2">
    @if (!empty($image))
      {!! wp_get_attachment_image($image['id'], 'full', false, ['class' => 'h-64 w-full bg-gray-50 object-cover sm:h-80 lg:absolute lg:h-full']) !!}
    @endif
  </div>
  <div class="pb-24 pt-16 sm:pb-32 sm:pt-24 lg:mx-auto lg:grid lg:max-w-7xl lg:grid-cols-2 lg:pt-32">
    <div class="px-6 lg:px-8">
      <div class="mx-auto max-w-xl lg:mx-0 lg:max-w-lg">

        @if (!empty($title))
          <h2 class="text-3xl font-bold tracking-tight text-gray-900">{{ $title }}</h2>
        @endif

        @if (!empty($text))
          <div class="mt-2 text-lg leading-8 text-gray-600">{!! nl2br(htmlspecialchars($text)) !!}</div>
        @endif

        @if (!empty($shortcode))
          {!! do_shortcode($shortcode) !!}
        @endif

      </div>
    </div>
  </div>
</div>

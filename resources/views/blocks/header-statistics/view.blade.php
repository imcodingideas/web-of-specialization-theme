<div class="relative isolate overflow-hidden bg-gray-900 py-24 sm:py-32 {{ $class }}">
  @if (!empty($background))
    {!! wp_get_attachment_image($background['id'], 'full', false, ['class' => 'absolute inset-0 -z-10 h-full w-full object-cover object-right md:object-center']) !!}
  @endif
  <div class="hidden sm:absolute sm:-top-10 sm:right-1/2 sm:-z-10 sm:mr-10 sm:block sm:transform-gpu sm:blur-3xl" aria-hidden="true">
    <div class="aspect-[1097/845] w-[68.5625rem] bg-gradient-to-tr from-[#ff4694] to-[#776fff] opacity-20" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
  </div>
  <div class="absolute -top-52 left-1/2 -z-10 -translate-x-1/2 transform-gpu blur-3xl sm:top-[-28rem] sm:ml-16 sm:translate-x-0 sm:transform-gpu" aria-hidden="true">
    <div class="aspect-[1097/845] w-[68.5625rem] bg-gradient-to-tr from-[#ff4694] to-[#776fff] opacity-20" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
  </div>
  <div class="mx-auto max-w-7xl px-6 lg:px-8">
    <div class="mx-auto max-w-2xl lg:mx-0">

      @if (!empty($title))
        <h2 class="text-4xl font-bold tracking-tight text-white sm:text-6xl">{{ $title }}</h2>
      @endif
      @if (!empty($text))
        <div class="mt-6 text-lg leading-8 text-gray-300">{!! nl2br(htmlspecialchars($text)) !!}</div>
      @endif

    </div>
    <div class="mx-auto mt-10 max-w-2xl lg:mx-0 lg:max-w-none">
      @if (!empty($links))
        <div class="grid grid-cols-1 gap-x-8 gap-y-6 text-base font-semibold leading-7 text-white sm:grid-cols-2 md:flex lg:gap-x-10">

          @foreach ($links as $link)
            <a href="<?php echo $links['link']['url']; ?>" target="<?php echo $links['link']['target']; ?>">
              <?php echo htmlspecialchars($links['link']['title']); ?>
              <span aria-hidden="true">&rarr;</span>
            </a>
          @endforeach

        </div>
      @endif

      @if (!empty($cards))
        <dl class="mt-16 grid grid-cols-1 gap-8 sm:mt-20 sm:grid-cols-2 lg:grid-cols-4">
          @foreach ($cards as $card)
            <div class="flex flex-col-reverse">

              @if (!empty($card['title']))
                <dt class="text-base leading-7 text-gray-300">{{ $card['title'] }}</dt>
              @endif

              @if (!empty($card['text']))
                <dd class="text-2xl font-bold leading-9 tracking-tight text-white">{!! nl2br(htmlspecialchars($card['text'])) !!}</dd>
              @endif

            </div>
          @endforeach
        </dl>
      @endif

    </div>
  </div>
</div>

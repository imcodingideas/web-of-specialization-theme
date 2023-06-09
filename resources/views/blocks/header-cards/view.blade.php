<div id="services" class="relative isolate overflow-hidden bg-gray-900 py-24 sm:py-32 {{ $class }}">
  @if (!empty($background))
    {!! wp_get_attachment_image($background['id'], 'full', false, ['class' => 'absolute inset-0 -z-20 h-full w-full object-cover object-right md:object-center']) !!}
    {{-- overlay --}}
    <div class="absolute top-0 right-0 -z-10 h-full w-full bg-black opacity-80"></div>
  @endif
  <div class="hidden sm:absolute sm:-top-10 sm:right-1/2 sm:-z-10 sm:mr-10 sm:block sm:transform-gpu sm:blur-3xl">
    <div class="aspect-[1097/845] w-[68.5625rem] bg-gradient-to-tr from-[#ff4694] to-[#776fff] opacity-20" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
  </div>
  <div class="absolute -top-52 left-1/2 -z-10 -translate-x-1/2 transform-gpu blur-3xl sm:top-[-28rem] sm:ml-16 sm:translate-x-0 sm:transform-gpu">
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
  </div>

  <div class="mx-auto mt-16 grid max-w-2xl grid-cols-1 gap-6 sm:mt-20 lg:max-w-7xl lg:grid-cols-2 lg:gap-8 px-6 lg:px-8">

    @foreach ($cards as $card)
      <div class="flex gap-x-4 rounded-xl bg-white/5 p-6 ring-1 ring-inset ring-white/10">

        @if (!empty($card['icon']))
          {!! wp_get_attachment_image($card['icon']['id'], 'full', false, ['class' => 'h-7 w-5 flex-none text-indigo-400']) !!}
        @endif

        <div class="text-base leading-7">

          @if (!empty($card['title']))
            <h3 class="font-semibold text-white">{{ $card['title'] }}</h3>
          @endif

          @if (!empty($card['text']))
            <div class="mt-2 text-gray-300">{!! nl2br(htmlspecialchars($card['text'])) !!}</div>
          @endif

        </div>
      </div>
    @endforeach

  </div>
</div>

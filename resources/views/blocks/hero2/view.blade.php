<div class="relative isolate pt-14 {{ $class }}">
  <div class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80" aria-hidden="true">
    <div class="relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
  </div>
  <div class="py-24 sm:py-32 lg:pb-40">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
      <div class="mx-auto max-w-2xl text-center">

        @if (!empty($title))
          <h1 class="text-4xl font-bold tracking-tight text-gray-900 sm:text-6xl">{!! nl2br(htmlspecialchars($title)) !!}</h1>
        @endif

        @if (!empty($text))
          <p class="mt-6 text-lg leading-8 text-gray-600">{!! nl2br(htmlspecialchars($text)) !!}</p>
        @endif

        <div class="mt-10 flex items-center justify-center gap-x-6">

          @if (!empty($link1))
            <a href="<?php echo $link1['url']; ?>" target="<?php echo $link1['target']; ?>" class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
              <?php echo htmlspecialchars($link1['title']); ?>
            </a>
          @endif

          @if (!empty($link2))
            <a href="<?php echo $link2['url']; ?>" target="<?php echo $link2['target']; ?>" class="text-sm font-semibold leading-6 text-gray-900">
              <?php echo htmlspecialchars($link2['title']); ?>
              <span aria-hidden="true">→</span>
            </a>
          @endif

        </div>
      </div>

      @if (!empty($image))
        <div class="mt-16 flow-root sm:mt-24">
          <div class="-m-2 rounded-xl bg-gray-900/5 p-2 ring-1 ring-inset ring-gray-900/10 lg:-m-4 lg:rounded-2xl lg:p-4">
            {!! wp_get_attachment_image($image['id'], 'full', false, ['class' => '']) !!}
          </div>
        </div>
      @endif
    </div>
  </div>
  <div class="absolute inset-x-0 top-[calc(100%-13rem)] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[calc(100%-30rem)]" aria-hidden="true">
    <div class="relative left-[calc(50%+3rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%+36rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
  </div>
</div>

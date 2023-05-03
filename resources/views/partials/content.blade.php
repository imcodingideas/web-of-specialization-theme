<article class="relative isolate flex flex-col justify-end overflow-hidden rounded-2xl bg-gray-900 px-8 pb-8 pt-80 sm:pt-48 lg:pt-80 {{ implode(' ', get_post_class()) }}">
  <header>
    @if (has_post_thumbnail())
      {!! get_the_post_thumbnail(false, 'thumbnail', ['class' => 'absolute inset-0 -z-10 h-full w-full object-cover']) !!}
    @endif
    <div class="absolute inset-0 -z-10 bg-gradient-to-t from-gray-900 via-gray-900/40"></div>
    <div class="absolute inset-0 -z-10 rounded-2xl ring-1 ring-inset ring-gray-900/10"></div>
    <div class="flex flex-wrap items-center gap-y-1 overflow-hidden text-sm leading-6 text-gray-300">
      <time datetime="2020-03-16" class="mr-8">{{ get_the_date() }}</time>
      <div class="-ml-4 flex items-center gap-x-4">
        <svg viewBox="0 0 2 2" class="-ml-0.5 h-0.5 w-0.5 flex-none fill-white/50">
          <circle cx="1" cy="1" r="1" />
        </svg>
        <div class="flex gap-x-2.5">
          <img src="{{ get_avatar_url(get_the_author()) }}" alt="" class="h-6 w-6 flex-none rounded-full bg-white/10">
          {{ get_the_author() }}
        </div>
      </div>
    </div>
    <h2 class="mt-3 text-lg font-semibold leading-6 text-white">
      <a href="{{ get_permalink() }}">
        <span class="absolute inset-0"></span>
        {!! $title !!}
      </a>
    </h2>
  </header>
</article>

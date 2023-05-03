<footer class="content-info">

  {{-- first section --}}
  <div class="container flex flex-col gap-4 items-center py-16 mx-auto">
    {{-- logo --}}
    <a class="brand" href="{{ home_url('/') }}">
      @if (!empty($logo_footer))
        {!! wp_get_attachment_image($logo_footer['id'], 'full', false, ['class' => 'h-[65px] w-auto']) !!}
      @endif
    </a>

    {{-- menu --}}
    @if (has_nav_menu('footer_navigation'))
      <nav class="nav-footer mt-3" aria-label="{{ wp_get_nav_menu_name('footer_navigation') }}">
        {!! wp_nav_menu(['theme_location' => 'footer_navigation', 'menu_class' => 'nav', 'echo' => false]) !!}
      </nav>
    @endif
  </div>

  {{-- second section --}}
  <div class="container mx-auto">
    <div class="flex flex-col items-center border-t border-slate-400/10 py-10 px-3 sm:flex-row-reverse sm:justify-between">
      {{-- icons --}}

      @if (!empty($links))
        <div class="flex gap-x-6">
          @foreach ($links as $link)
            @if (!empty($link['icon']) && !empty($link['link']))
              <a class="group" href="{{ $link['link']['url'] }}" target="{{ $link['link']['target'] }}">
                @if (!empty($link['icon']))
                  {!! wp_get_attachment_image($link['icon']['id'], 'full', false, ['class' => 'h-6 w-6 fill-slate-500 group-hover:fill-slate-700']) !!}
                @else
                  {{ $link['link']['title'] }}
                @endif
              </a>
            @endif
          @endforeach
        </div>
      @endif
      {{-- widgets --}}
      @if (!empty($footer_text))
        <div class="mt-6 text-sm text-slate-500 sm:mt-0">
          {!! $footer_text !!}
        </div>
      @endif

      {{-- widgets --}}
      @if (is_active_sidebar('sidebar-footer'))
        <div class="mt-6 text-sm text-slate-500 sm:mt-0">
          @php(dynamic_sidebar('sidebar-footer'))
        </div>
      @endif
    </div>
  </div>
</footer>

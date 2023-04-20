<div class="nav-primary-mobile hidden">
  <!-- overlay -->
  <div class="mobile-menu bg-white fixed flex flex-col h-full overflow-hidden right-0 top-0 z-50 w-screen transform duration-300">
    <div class="p-4 h-full">

      {{-- close --}}
      <div class="flex w-full justify-end">
        <svg id="nav-primary-mobile__close" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
          <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
        </svg>
      </div>

      {{-- logo --}}
      <a class="brand block mt-10 flex justify-center" href="{{ home_url('/') }}">
        @if (!empty($logo_header))
          {!! wp_get_attachment_image($logo_header['id'], 'full', false, ['class' => 'w-20']) !!}
        @endif
      </a>

      {{-- menu --}}
      @if (has_nav_menu('primary_navigation'))
        <nav class="nav-primary-mobile mt-6" aria-label="{{ wp_get_nav_menu_name('primary_navigation') }}">
          {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav', 'echo' => false]) !!}
        </nav>
      @endif

    </div>
  </div>
</div>
<script>
</script>

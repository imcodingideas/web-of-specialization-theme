<header class="banner absolute top-0 left-0 right-0 z-50">
  <div class="container content-center flex items-center justify-between md:py-2 mx-auto px-4 py-4 relative">

    <a class="brand" href="{{ home_url('/') }}" class="flex-1">
      <img src="@asset('images/logo.svg')" alt="logo" class="md:mx-0 mx-auto">
    </a>

    @if (has_nav_menu('primary_navigation'))
      <nav class="nav-primary" aria-label="{{ wp_get_nav_menu_name('primary_navigation') }}">
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav', 'echo' => false]) !!}
      </nav>
    @endif

  </div>
</header>

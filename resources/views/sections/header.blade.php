<header class="banner py-10">
  <div class="container content-center flex items-center justify-between md:py-2 mx-auto px-4 py-4 relative">

    {{-- logo --}}
    <a class="brand" href="{{ home_url('/') }}" class="flex-1">
      <img src="@asset('images/logo.svg')" alt="logo" class="w-20">
    </a>

    {{-- menu --}}
    @if (has_nav_menu('primary_navigation'))
      <nav class="hidden md:block nav-primary" aria-label="{{ wp_get_nav_menu_name('primary_navigation') }}">
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav', 'echo' => false]) !!}
      </nav>
    @endif

    {{-- call to action --}}
    <div class="flex items-center gap-x-5 md:gap-x-8">
      <div class="hidden md:block">
        <a class="inline-block rounded-lg px-2 py-1 text-sm text-slate-700 hover:bg-slate-100 hover:text-slate-900" href="/wp-admin">Sign in</a>
      </div>
      <a class="group inline-flex items-center justify-center rounded-full py-2 px-4 text-sm font-semibold focus:outline-none focus-visible:outline-2 focus-visible:outline-offset-2 bg-blue-600 text-white hover:text-slate-100 hover:bg-blue-500 active:bg-blue-800 active:text-blue-100 focus-visible:outline-blue-600" href="/">
        <span>Get started</span>
      </a>
      <div class="-mr-1 md:hidden">
        <div data-headlessui-state="">
          <button class="relative z-10 flex h-8 w-8 items-center justify-center [&amp;:not(:focus-visible)]:focus:outline-none" aria-label="Toggle Navigation" type="button" aria-expanded="false" data-headlessui-state="" id="headlessui-popover-button-:R3p6:">
            <svg aria-hidden="true" class="h-3.5 w-3.5 overflow-visible stroke-slate-700" fill="none" stroke-width="2" stroke-linecap="round">
              <path d="M0 1H14M0 7H14M0 13H14" class="origin-center transition"></path>
              <path d="M2 2L12 12M12 2L2 12" class="origin-center transition scale-90 opacity-0"></path>
            </svg>
          </button>
        </div>
      </div>
    </div>

  </div>
</header>

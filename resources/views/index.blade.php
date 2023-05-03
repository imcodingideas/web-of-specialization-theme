@extends('layouts.app')

@section('content')
  @include('partials.page-header')

  <div class="container px-4 mx-auto">

    @if (!have_posts())
      <h3 class="text-lg lg:text-2xl font-semibold text-gray-500 uppercase text-center mt-12 mb-12 leading-none">
        {!! __('Sorry, no results were found.', 'sage') !!}
      </h3>
      <div class="flex justify-center w-full">
        {!! get_search_form(false) !!}
      </div>
    @endif

    <div class="grid md:grid-cols-2 xl:grid-cols-3 gap-8 xl:gap-12 justify-center mt-12">
      @while (have_posts())
        @php(the_post())
        @includeFirst(['partials.content-' . get_post_type(), 'partials.content'])
      @endwhile
    </div>

    {{-- pagination --}}
    @if (function_exists('wp_pagenavi'))
      @php(wp_pagenavi())
    @else
      {!! get_the_posts_navigation() !!}
    @endif

  </div>
@endsection

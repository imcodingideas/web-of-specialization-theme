@extends('layouts.app')

@section('content')
  <div class="container mx-auto py-8 md:flex space-y-10">
    <main class="main md:w-8/12 px-4 prose lg:prose-xl">
      @while (have_posts())
        @php(the_post())
        @includeFirst(['partials.content-single-' . get_post_type(), 'partials.content-single'])
      @endwhile
    </main>
    <aside class="sidebar md:w-4/12 px-4">
      @php(dynamic_sidebar('sidebar-primary'))
    </aside>
  </div>
@endsection

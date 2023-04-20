@extends('layouts.app')

@section('content')
  @while (have_posts())
    @php(the_post())
    <div class="px-4 mx-auto py-8 prose lg:prose-lg">
      @include('partials.page-header')
      @includeFirst(['partials.content-page', 'partials.content'])
    </div>
  @endwhile
@endsection

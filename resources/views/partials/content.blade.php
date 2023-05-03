<article @php(post_class())>
  <header>
    <a href="{{ get_permalink() }}">
      @if (has_post_thumbnail())
        {!! get_the_post_thumbnail(false,'thumbnail',['class'=>'aspect-[6/5] w-full rounded-3xl object-cover']) !!}
      @elseif($blog_default_image_option)
        <img src="{{$blog_default_image_option['sizes']['thumbnail']}}" title="{{ $blog_default_image_option['title'] }}" class="entry-thumbnail animated fadeIn img-fluid mb-2 w-100">
      @endif
    </a>
    <h2 class="entry-title text-lg font-semibold text-darkblue mt-3 uppercase leading-none">
      <a href="{{ get_permalink() }}">
        {!! $title !!}
      </a>
    </h2>
  </header>
</article>

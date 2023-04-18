@if (!empty($title))
  <div class="">{{ $title }}</div>
@endif

@if (!empty($text))
  <div class="">{!! nl2br(htmlspecialchars($text)) !!}</div>
@endif

@if (!empty($link1))
  <a class="" href="<?php echo $link1['url']; ?>" target="<?php echo $link1['target']; ?>">
    <?php echo htmlspecialchars($link1['title']); ?>
  </a>
@endif


@if (!empty($link2))
  <a class="" href="<?php echo $link2['url']; ?>" target="<?php echo $link2['target']; ?>">
    <?php echo htmlspecialchars($link2['title']); ?>
  </a>
@endif

@if (!empty($image))
  {!! wp_get_attachment_image($image['id'], 'full', false, ['class' => '']) !!}
@endif

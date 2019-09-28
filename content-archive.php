<time pubdate="pubdate" datetime="<?php the_time('Y-m-d'); ?>" class="entry-date">
  <?php the_time(get_option('date_format')); ?></time>
<h2 class="">
  <a href="<?php the_permalink();?>">
    <?php the_title(); ?>
  </a>
</h2>
<p>
  <?php the_excerpt();?>
</p>

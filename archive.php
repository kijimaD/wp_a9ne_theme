<?php get_header(); ?>

<!-- 左サイドバー -->
<div class="col-lg-2 d-none d-lg-block">
<?php get_template_part('left-sidebar'); ?>
</div>
<!-- /左サイドバー -->

<!-- 空間 -->
<div class="col-lg-1">
</div>
<!-- /空間 -->

<!-- 本文 -->

<div class="col-lg-7">
  <div class="contents">
    <h5 class="">
      <?php
    if (is_author()) :
      echo esc_html(get_the_author_meta('display_name', get_query_var('author')));
    else:
     single_cat_title();
   endif;
     ?>
    </h5>
    <hr>

    <?php
if (have_posts()) :
  while (have_posts()):
    the_post();
    get_template_part('content-archive');
  endwhile;
  get_template_part('pagination');
  endif;
  ?>
  </div>
</div>

<!-- /本文 -->

<!-- 未定・右 -->
<div class="col-lg-3">
</div>
<!-- /未定・右 -->

</div>
</div>
<?php get_footer(); ?>

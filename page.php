<?php get_header(); ?>

<!-- 空間 -->
<div class="col-lg-1 order-lg-2">
</div>
<!-- /空間 -->

<!-- 本文 -->
<div class="col-lg-7 order-lg-3">
  <?php
if (have_posts()) :
  while (have_posts()):
    the_post();
    get_template_part('content');
  endwhile;
  endif;
  ?>

  <!-- ペジネーション -->
  <nav class="mx-auto">
  </nav>
  <!-- /ペジネーション -->

</div>
<!-- /本文 -->

<!-- 左サイドバー -->
<div class="col-lg-2 order-lg-1">
  <?php get_template_part('left-sidebar'); ?>
</div>
<!-- /左サイドバー -->

<!-- 未定・右 -->
<div class="col-lg-2 order-lg-4">
</div>
<!-- /未定・右 -->

</div>
</div>
<?php get_footer(); ?>

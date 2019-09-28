<?php get_header(); ?>

<!-- 未定・左 -->
<div class="col-lg-2">
</div>
<!-- /未定・左 -->

<!-- 本文 -->

<div class="col-lg-7">

<?php
if (have_posts()) :
  while (have_posts()):
    the_post();
    the_content();
  endwhile;
endif;
?>

  <!-- ペジネーション -->
  <nav class="mx-auto">
  </nav>
  <!-- /ペジネーション -->

</div>

<!-- /本文 -->

<!-- 未定・右 -->
<div class="col-lg-3">
</div>
<!-- /未定・右 -->

</div>
</div>
<?php get_footer(); ?>

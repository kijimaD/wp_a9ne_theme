<?php get_header(); ?>

<!-- 未定・左 -->
<div class="col-lg-2">
</div>
<!-- /未定・左 -->

<!-- 本文 -->

<div class="col-lg-7">
  <div class="contents">
    <h5 class="">
「<?php the_search_query(); ?>」の検索結果
    </h5>
    <hr>

    <?php
if (have_posts() && get_search_query()) :
  while (have_posts()):
    the_post();
    get_template_part('content-archive');
  endwhile;
  get_template_part('pagination');
else:
  ?>
  該当する記事が存在しません。
<?php
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

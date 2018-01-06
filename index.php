<!DOCTYPE html>
<html lang="ja">
<?php get_template_part('head'); ?>
<body>
  <?php get_header(); ?>

  <main class="top">
    <h1 class="top__heading">最新記事</h1>
    <?php if (have_posts()) : ?>  
      <?php while (have_posts()) : the_post(); ?>
        <article class="post-list">
          <h2 class="post-list__items"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        </article>
      <?php endwhile; ?>
    <?php else : ?>
    <?php endif; ?>
  </main>

  <?php
    the_posts_pagination( array(
      'prev_text' => '前へ',
      'next_text' => '次へ',
      'screen_reader_text' => 'ページネーション',
    ) );
  ?>

  <?php get_footer(); ?>
  <?php wp_footer(); ?>
</body>
</html>
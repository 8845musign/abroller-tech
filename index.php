<!DOCTYPE html>
<html lang="ja">
<?php get_template_part('head'); ?>
<body>
  <?php get_header(); ?>

  <p>
    このページは工事中です。腹筋しといてください。
  </p>

  <main>
    <?php if (have_posts()) : ?>  
      <?php while (have_posts()) : the_post(); ?>
        <article>
          <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
        </article>
      <?php endwhile; ?>
    <?php else : ?>
    <?php endif; ?>
  </main>

  <?php get_footer(); ?>
  <?php wp_footer(); ?>
</body>
</html>
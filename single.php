<!DOCTYPE html>
<html lang="ja">
<?php get_template_part('head'); ?>
<body>
  <?php get_header(); ?>



  <main>
    <div class="content">
      <?php if (have_posts()) : ?>  
        <?php while (have_posts()) : the_post(); ?>
          <article>
            <div class="post-title">
              <h1><?php the_title(); ?></h1>

              <?php the_category() ?>
            </div>

            <time class="post-date" datetime="<?php echo get_the_date(); ?>">
              <span class="post-date__month"><?php echo get_the_date("Y"); ?></span>
              <span class="post-date__date"><?php echo get_the_date("n/j"); ?></span>
            </time>

            <div class="post-content">
              <?php the_content(); ?>
            </div>
          </article>
        <?php endwhile; ?>
      <?php else : ?>
      <?php endif; ?>
    </div>
  </main>

  <?php get_footer(); ?>
  <?php wp_footer(); ?>
</body>
</html>
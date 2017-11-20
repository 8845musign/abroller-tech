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

            <footer class="post-footer">
              <dl class="post-footer__author">
                <div class="post-footer__author__name">
                  <dt class="post-footer__author__name-label">著者</dt>
                  <dd class="post-footer__author__name-value">
                    腹筋ローラーの力を信じろ
                  </dd>
                </div>
                <dd class="post-footer__author__twitter"><a href="https://twitter.com/8845musign">@8845musign</a></dd>
              </dl>

              <p class="post-footer__description">
                デザイナーとエンジニアをいったりきたりする腹筋信者です。<br>
                休日は主に低温で肉をアレしています。
              </p>
            </footer>
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
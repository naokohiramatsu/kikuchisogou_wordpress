<?php get_header(); ?>

<main class="l-content">

<section class="section l-content" id="news">
  <div class="p-news">
    <h2 class="section__ttl__news">
      <span class="section__ttl__news--en">News</span>
      <span class="section__ttl__news--jp">最新情報</span>
    </h2>

    <?php if (have_posts()) : ?>
      <?php while (have_posts()) : the_post(); ?>
        <article class="news-item">
          <a href="<?php the_permalink(); ?>" class="news-item__link">
            <time class="news-item__date"><?php the_time('Y.m.d'); ?></time>
            <h3 class="news-item__title"><?php the_title(); ?></h3>
          </a>
        </article>
      <?php endwhile; ?>
    <?php endif; ?>

  </div>
</section>

<div class="pagination">
  <?php
  the_posts_pagination([
    'mid_size'  => 1,
    'prev_text' => '←',
    'next_text' => '→',
  ]);
  ?>
</div>

</main>

<?php get_footer(); ?>








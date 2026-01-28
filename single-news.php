<?php get_header(); ?>

<main class=" news-detail l-container">

  <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>

      <article class="news-single l-content">

        <header class="news-single__header">
          <time class="news-single__date">
            <?php the_time('Y.m.d'); ?>
          </time>
          <h1 class="news-single__title">
            <?php the_title(); ?>
          </h1>
        </header>

        <div class="news-single__content">
          <?php the_content(); ?>
        </div>

        <a class="news-single__back btn" href="<?php echo esc_url(home_url('/#news')); ?>">
          News TOPへ戻る ＞
        </a>


      </article>

    <?php endwhile; ?>
  <?php endif; ?>

</main>

<?php get_footer(); ?>
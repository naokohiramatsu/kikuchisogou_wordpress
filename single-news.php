<?php get_header(); ?>

<main class="l-content">

<?php if (have_posts()) : ?>
  <?php while (have_posts()) : the_post(); ?>

    <article class="news-single">

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

      <div class="news-single__back">
        <a href="<?php echo get_post_type_archive_link('news'); ?>">
          ← 一覧へ戻る
        </a>
      </div>

    </article>

  <?php endwhile; ?>
<?php endif; ?>

</main>

<?php get_footer(); ?>



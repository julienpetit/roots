

<article <?php post_class(); ?>>
<header>
  <h1 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
  <?php get_template_part('templates/entry-meta'); ?>
</header>
<div class="entry-content">
  <?php the_content(); ?>
</div>
<footer>
  <?php wp_link_pages(array('before' => '<nav class="page-nav"><p>' . __('Pages:', 'roots'), 'after' => '</p></nav>')); ?>
</footer>
<?php comments_template('/templates/comments.php'); ?>
</article>

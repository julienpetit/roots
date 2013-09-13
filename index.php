<?php
/*
Template Name: index.php
*/
?>
<?php get_template_part('templates/page', 'header'); ?>

<?php if (!have_posts()) : ?>
  <div class="alert">
    <?php _e('Sorry, no results were found.', 'roots'); ?>
  </div>
  <?php get_search_form(); ?>
<?php endif; ?>

<?php
$columns = array();
$columns[0] = array();
$columns[1] = array();
$columns[2] = array();

$i = 0;

foreach ($posts as $key => $post) {
  $post->post_permalink = get_permalink($post->ID);
  if($i == count($columns))
    $i = 0;

  array_push($columns[$i], $post);
  $i++;
}
?>


<?php if(is_front_page()) : ?>
<div class="row hidden-phone">
  <div class="span4"><?php dynamic_sidebar('sidebar-homeleft'); ?></div>
  <div class="span4"><?php dynamic_sidebar('sidebar-homecenter'); ?></div>
  <div class="span4"><?php dynamic_sidebar('sidebar-homeright'); ?></div>
</div>
<hr />

<?php endif; ?>

<div class="row">
<?php foreach($columns as $column) : ?>
<div class="span4">
  <?php foreach($column as $post) : ?>
    <?php get_template_part('templates/content', 'tiled'); ?>
  <?php endforeach; ?>
</div>
<?php endforeach; ?>
</div>




<?php if ($wp_query->max_num_pages > 1) : ?>
  <nav class="post-nav">
    <ul class="pager">
      <li class="next"><?php next_posts_link(__('Page Suivante &rarr;', 'roots')); ?></li>
      <li class="previous"><?php previous_posts_link(__('&larr; Page précédente', 'roots')); ?></li>
    </ul>
  </nav>
<?php endif; ?>

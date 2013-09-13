<?php
/*
Template Name: template-tiled.php
*/

$query = new WP_Query(array(
                        'post_type' => 'post', 
                        'post_status' => 'publish',
                        'posts_per_page' => get_option('posts_per_page'),
                        'paged' => get_query_var('paged')
                        ));
$posts = $query->get_posts();

?>


<div class="row">
<?php get_template_part('templates/sidebar', 'home'); ?>
</div>


<?php get_template_part('templates/page', 'header'); ?>


<?php
$columns = array();
$columns[0] = array();
$columns[1] = array();
$columns[2] = array();

$i = 0;

foreach ($posts as $key => $post) {
  $post->post_permalink = get_permalink($post->ID);
  if($i == 3)
    $i = 0;

  array_push($columns[$i], $post);
  $i++;


}

// echo "<pre>";
// print_r($columns);
// echo "</pre>";
?>

<div class="row">
<?php foreach($columns as $column) : ?>
<div class="span4">
  <?php foreach($column as $post) : ?>
    <?php get_template_part('templates/content', 'tiled'); ?>
  <?php endforeach; ?>
</div>
<?php endforeach; ?>
</div>




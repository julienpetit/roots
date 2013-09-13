<?php if(isset($post)) : ?>
<article class="well-white post-tiled">
  <?php if(isset($post->featured_image) && $post->featured_image != "") : ?>
    <section class="post-featured-image">
      <a href="<?php echo $post->post_permalink; ?>"><?php echo $post->featured_image; ?></a>
    </section>
  <?php endif; ?>
  <header><h3 class="text-center"><a href="<?php echo $post->post_permalink; ?>"><?php echo $post->post_title; ?></a></h3></header>

  <section class="post-content"><?php echo $post->post_excerpt; ?></section>

  <footer>
    <a class="btn btn-black btn-mini" href="<?php echo $post->post_permalink; ?>">Voir l'article</a>
  </footer>
</article>
<?php endif; ?> 

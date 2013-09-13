<?php if(isset($post)) : ?>
<article class="post-tiled">
  <header><h2 class="text-center"><a href="<?php echo $post->post_permalink; ?>"><?php echo $post->post_title; ?></a></h2></header>
  <div class="well-white">


    <section class="post-content"><?php echo $post->post_excerpt; ?></section>

    <hr />
    <footer>
      <a class="btn btn-black btn-mini" href="<?php echo $post->post_permalink; ?>">Voir l'article</a>
    </footer>


  </div>
</article>
<?php endif; ?> 

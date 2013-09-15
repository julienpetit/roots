<footer id="footer" class="content-info container-fluid" role="contentinfo">

  <div class="container">
    <div class="row">
    <?php dynamic_sidebar('sidebar-footer'); ?>
    </div>
  </div>

  <div class="container">
    <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?></p>
  </div>
</footer>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/fr_FR/all.js#xfbml=1&appId=528164940566303";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
</script>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script type='text/javascript' src='<?php echo get_template_directory_uri() . "/assets/js/vendor/modernizr-2.6.2.min.js"; ?>'></script>
<script type='text/javascript' src='<?php echo get_template_directory_uri() . "/assets/js/plugins.js"; ?>'></script>
<script type='text/javascript' src='<?php echo get_template_directory_uri() . "/assets/js/main.js"; ?>'></script>

<?php wp_footer(); ?>





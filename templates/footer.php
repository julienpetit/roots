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

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script type='text/javascript' src='<?php echo get_template_directory_uri() . "/assets/js/vendor/modernizr-2.6.2.min.js"; ?>'></script>
<script type='text/javascript' src='<?php echo get_template_directory_uri() . "/assets/js/plugins.js"; ?>'></script>
<script type='text/javascript' src='<?php echo get_template_directory_uri() . "/assets/js/main.js"; ?>'></script>

<?php wp_footer(); ?>



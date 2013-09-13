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

<?php wp_footer(); ?>

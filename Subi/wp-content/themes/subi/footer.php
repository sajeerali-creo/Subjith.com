 <!--Footer-->

  <footer>
    <div class="footer-margin">
      <div class="social-footer">
        <a href="https://www.facebook.com/thomsooncom"><i class="fa fa-facebook"></i></a>
        <a href="https://www.behance.net/TomaszMazurczak"><i class="fa fa-behance"></i></a>

      </div>
      <div class="copyright">Â© Copyright 2015 Thomsoon.com. All Rights Reserved.</div>
    </div>
  </footer>

<!--Scripts-->
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.easing.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/modernizr.custom.42534.js" type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.waitforimages.js" type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/typed.js" type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/masonry.pkgd.min.js" type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/imagesloaded.pkgd.min.js" type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.jkit.1.2.16.min.js"></script>

<script src="<?php echo get_template_directory_uri(); ?>/js/script.js" type="text/javascript"></script>

<script>
  $('#button, #buttons').on('click', function() {
    $( ".opacity-nav" ).fadeToggle( "slow", "linear" );
  // Animation complete.
  });
</script>
<?php wp_footer(); ?>
	</body>
</html>

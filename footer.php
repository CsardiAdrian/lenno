
<!-- Footer -->
<footer class="text-center text-lg-start text-muted">
  <!-- Section: Links  -->
  <section>
    <div class="container text-center text-md-start mt-5">
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <!-- Content -->
		  <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer 1') ) : ?> <?php endif; ?>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Content -->
		  <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer 2') ) : ?> <?php endif; ?>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Content -->
          <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer 3') ) : ?> <?php endif; ?>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <!-- Content -->
		  <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer 4') ) : ?> <?php endif; ?>
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>
  <!-- Section: Links  -->

  <!-- Copyright -->
  <div class="copyright-container text-center p-4">
    <?php echo add_custom_field() ?>
		<a  class="copyright" href="https://<?php echo add_custom_link_field(); ?>" target="_blank"><?php echo add_custom_link_field(); ?></a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->

<?php wp_footer(); ?>
</body>
</html>

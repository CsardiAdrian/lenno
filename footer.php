<!-- FOOTER -->
<footer>
        <div class="container-lg">
            <div class="row">
                <div class="col-12 col-md-12">
                    <div class="row">
                        <div class="col-12 col-lg-4">
                        <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer 1') ) : ?> <?php endif; ?>
                        </div>
                        <div class="col-12 col-lg-4">
                        <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer 2') ) : ?> <?php endif; ?>
                        </div>
                        <div class="col-12 col-lg-2">
                        <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer 3') ) : ?> <?php endif; ?>
                        </div>
                        <div class="col-12 col-md-6 col-lg-2">
                        <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer 4') ) : ?> <?php endif; ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
      <!-- Copyright -->
      <div class="copyright-container text-center p-3">
          <?php echo add_custom_field() ?>
              <a  class="copyright" href="https://<?php echo add_custom_link_field(); ?>" target="_blank"><?php echo add_custom_link_field(); ?></a>
      </div>
      <!-- Copyright -->
    </footer>
    <?php wp_footer(); ?>
    <!-- jQuery forrásfájl Google CDN-ről -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js">
    </script>
    <script src="<?php echo home_url('wp-content/themes/lenno/build/js/main.min.js'); ?>"></script>
</body>

</html>
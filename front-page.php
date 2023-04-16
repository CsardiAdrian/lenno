<?php get_header(); ?>
    <section id="hero">
        <div class="container-lg">
            <?php
                echo do_shortcode('[smartslider3 slider="1"]');
            ?>
        </div>
    </section>
    <section class="main">
        <div class="container-lg">
         <?php the_content(); ?>

          <?php
          if(woocommerce_content()){
              woocommerce_content(); 
          }
          ?>
        </div>
    </section>
    <?php get_footer(); ?>
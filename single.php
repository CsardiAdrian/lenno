<?php get_header(); ?>
<section id="content">
    <div class="container single-post-container">
        <div class="row">
            <div class="col-12 col-lg-8 col-xl-9"> 
                <article class="single-post">
                    <?php if(have_posts()) : ?>
                    <?php while(have_posts()) : the_post(); ?>
                    <div class="header">
                    <h1 class="page-title"><?php the_title(); ?></h1>  
                    <!-- <label class="category-label"><?php the_category(); ?> </label>  -->
                    </div>
                    <section class="content">
                        <div class="thumbnail">
                            <?php
                                if ( has_post_thumbnail() ) { 
                                    the_post_thumbnail( 'full', array( 'class'  => 'img-fluid img-thumbnail' ) );
                                } 
                            ?>
                        </div>
                        <div>
                            <?php the_content(); ?>
                        </div>
                    </section>
                    <?php endwhile; ?>
                    <?php endif; ?>
                </article>
            </div>
            <div class="col-12 col-lg-4 col-xl-3">
            <div id="sidebar">
                <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('sidebar') ) : ?> 
                    <?php endif; ?>
                </div>
            </div>
        </div>
        </div>   
    </div>
</section>
<?php get_footer(); ?>

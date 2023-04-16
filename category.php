<?php get_header(); ?>
<section id="content" class="category-page">
    <div class="container-lg">
        <div class="row">
            <div class="col-12 col-lg-8 col-xl-9">
                <h1 class="page-title"><?php $current_category = single_cat_title("", true); ?></h1>
                <article class="card-container row">
                    <?php if(have_posts()) : ?>
                    <?php while(have_posts()) : the_post(); ?>
                    <div class="card card--articles-post col-sm-6 col-lg-6 col-xl-4">
                    <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="card__link">
                    <figure class="card-image">
                    <?php the_post_thumbnail(); ?> 
                    </figure>  
                    </a>
                    <div class="card-content">
                    <h2 class="card-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <!--<?php// the_date(); ?>  -->
                   <p><?php the_excerpt(); ?></p>
                        <button class="card-readmore">
                            <a href="<?php the_permalink(); ?>">Tovább</a>
                        </button>
                    </div>
                    </div>
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

<?php get_header(); ?>
<section id="content">
    <div class="container">
        <article>
            <?php if(have_posts()) : ?>
            <?php while(have_posts()) : the_post(); ?>
            <h1><?php the_title(); ?></h1>  
            <?php the_post_thumbnail(); ?>
            <p><?php the_date(); ?> </p> 
            <?php the_content(); ?>
            <?php endwhile; ?>
            <?php endif; ?>
        </article>
        <?php get_sidebar(); ?>
    </div>
</section>
<?php get_footer(); ?>

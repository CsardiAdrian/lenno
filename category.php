<?php get_header(); ?>
<section id="content">
    <div class="container">
        <article>
            <?php if(have_posts()) : ?>
            <?php while(have_posts()) : the_post(); ?>
            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
            <?php the_post_thumbnail(); ?>   
            </a>
            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <?php the_date(); ?>  
            <p><?php the_excerpt(); ?></p>
            <p><a href="<?php the_permalink(); ?>">Tovább</a></p>
            <?php endwhile; ?>
            <?php endif; ?>
        </article>
        <?php get_sidebar(); ?>
    </div>
</section>
<?php get_footer(); ?>

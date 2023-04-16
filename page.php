<?php get_header(); ?>
<section id="content">
    <div class="container container--page">
        <article>
            <?php the_title( '<h1 class="page-title">', '</h1>' ); ?>
            <?php the_content(); ?>
        </article>
    </div>
</section>
<?php get_footer(); ?>
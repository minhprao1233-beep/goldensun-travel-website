<?php
/*
 * The main template file. This is the fallback file for the theme.
 */

get_header(); ?>

<div class="container mx-auto px-6 py-12">
    <h1 class="text-4xl font-bold mb-6">Blog</h1>
    
    <?php if ( have_posts() ) : ?>
        
        <?php while ( have_posts() ) : the_post(); ?>
            <article class="mb-8">
                <h2 class="text-2xl font-bold"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <div class="prose">
                    <?php the_excerpt(); ?>
                </div>
            </article>
        <?php endwhile; ?>

    <?php else : ?>
        <p>Sorry, no posts matched your criteria.</p>
    <?php endif; ?>
    
</div>

<?php get_footer(); ?>

<?php get_header(); ?>

<main class="container">
  <section class="services-we-offer">

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

      <p><?php the_content(); ?></p>

  	<?php endwhile; else : ?>

  	  <p><?php _e( 'Lo siento, págian no encontrada', 'treehouse-portfolio' ); ?></p>

  	<?php endif; ?>

  </section>
</main>


<?php get_footer(); ?>

<?php
/*
  Template Name: About
*/
?>

<?php get_header(); ?>

<?php
$args = array(
  'post_type' => 'about_us'
);
$query = new WP_Query($args);
?>

<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
  <!-- latest updates -->
  <section class="covers-container lastest-updates about-us">
    <div class="container top-out-bg">
    </div>
    <h1>
      <span><?php the_title(); ?></span>
    </h1>

    <div class="container">
      <p class="lastest-updates_text">
        <?php
        the_field('Description');
        ?>
      </p>
    </div>
  </section>

<section class="container">
  <div class="about-us_content">
    <p>
      <?php
      the_field('Content');
      ?>
    </p>
  </div>
</section>

<?php endwhile; else : ?>

  <div class="container ">
    <p><?php _e( 'Lo siento, contenido no encontrada' ); ?></p>
  </div>

<?php endif; wp_reset_postdata(); ?>

<?php get_footer(); ?>

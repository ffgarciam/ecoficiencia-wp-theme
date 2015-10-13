<?php
/*
  Template Name: About
*/
?>

<?php get_header(); ?>

<?php
$args = array(
  'post_type' => 'home',
);
$query = new WP_Query($args);
?>

<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>

<!-- main image -->
<div class="covers-container">

  <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
   <!-- Indicators
   <ol class="carousel-indicators">
     <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
     <li data-target="#carousel-example-generic" data-slide-to="1"></li>
     <li data-target="#carousel-example-generic" data-slide-to="2"></li>
     <li data-target="#carousel-example-generic" data-slide-to="3"></li>
     <li data-target="#carousel-example-generic" data-slide-to="4"></li>
     <li data-target="#carousel-example-generic" data-slide-to="5"></li>
     <li data-target="#carousel-example-generic" data-slide-to="6"></li>
   </ol>
   -->

   <!-- Wrapper for slides -->
   <div class="carousel-inner" role="listbox">
     <div class="item active">
       <img src="<?php the_field('image_energia_eolica'); ?>" class="header-bg-img" alt="<?php _e('Energia eolica'); ?>" />
       <div class="carousel-caption">
         Energía Eólica
       </div>
     </div>
     <div class="item">
       <img src="<?php the_field('image_eficiencia_energetica'); ?>" class="header-bg-img" alt="<?php _e('Eficiencia Energetica'); ?>" />
       <div class="carousel-caption">
         Eficiencia Energética
       </div>
     </div>
     <div class="item">
       <img src="<?php the_field('image_energia_hidroelectrica'); ?>" class="header-bg-img" alt="<?php _e('Energia Hidroelectrica'); ?>" />
       <div class="carousel-caption">
         Energía Hidroeléctrica
       </div>
     </div>
     <div class="item">
       <img src="<?php the_field('image_energia_solar'); ?>" class="header-bg-img" alt="<?php _e('Energia Solar'); ?>" />
       <div class="carousel-caption">
         Energía Solar
       </div>
     </div>
     <div class="item">
       <img src="<?php the_field('image_supervision_proyectos'); ?>" class="header-bg-img" alt="<?php _e('Supervision de Proyectos'); ?>" />
       <div class="carousel-caption">
         Supervisión de Proyectos
       </div>
     </div>
     <div class="item">
       <img src="<?php the_field('imagen_de_portada'); ?>" class="header-bg-img" alt="<?php _e('Imagen de Portada'); ?>" />
       <div class="carousel-caption">
         Energía Hidráulica
       </div>
     </div>
     <div class="item">
       <img src="<?php the_field('imagen_de_portada2'); ?>" class="header-bg-img" alt="<?php _e('Imagen de Portada 2'); ?>" />
       <div class="carousel-caption">
         Eficiencia Energética
       </div>
     </div>
   </div>

   <!-- Controls -->
   <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
     <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
     <span class="sr-only">Previous</span>
   </a>
   <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
     <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
     <span class="sr-only">Next</span>
   </a>
 </div>

</div>

<?php endwhile; else : ?>

  <div class="container ">
    <p><?php _e( 'Lo siento, servicio no encontrado' ); ?></p>
  </div>

<?php endif; wp_reset_postdata(); ?>

<?php

$args = array(
  'post_type' => 'about_us'
);
$query = new WP_Query($args);
?>

<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
  <!-- latest updates -->
  <section class="covers-container lastest-updates about-us">
    <!-- <div class="container top-out-bg"> -->
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

<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme and one of the
 * two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * For example, it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Ecoficiencia
 * @since Ecoficiencia 1.0
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

<!-- latest updates -->
<section class="covers-container lastest-updates">
  <!-- <div class="container top-out-bg"></div> -->
  <h1>
    <span><?php the_field('news_title'); ?></span>
  </h1>

  <div class="container">
    <p class="lastest-updates_text">
      <?php the_field('news_description'); ?>
    </p>

    <a href="/noticias" class="btn btn-eco btn-lg" type="button" name="more-news"><?php the_field('news_button'); ?></a>

    <?php
    $bottomTitle = get_field('bottom_title');
    $bottomContent = get_field('bottom_content');
    ?>
  </div>
</section>

<?php endwhile; else : ?>

  <div class="container ">
    <p><?php _e( 'Lo siento, servicio no encontrado' ); ?></p>
  </div>

<?php endif; wp_reset_postdata(); ?>

<!-- main content: services we offer -->
<main class="container">
  <section class="services-we-offer">
    <h1><?php _e('Servicios que Ofrecemos'); ?></h1>

    <?php
    $args = array(
      'post_type' => 'service_page',
    );
    $query = new WP_Query($args);
    $i = 0;
    ?>

    <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
      <?php
      $serviceUrl = sanitize_title(get_field('page_title'));

      if ($i == 0) { ?>
        <div class="row">
      <?php } ?>

      <div class="col-sm-4">
        <section class="eco-service">
          <div class="eco-service_header">
            <h1><?php the_field('page_title'); ?></h1>
          </div>
          <div class="eco-service_body">
            <p>
              <?php the_field('title_description'); ?>
            </p>
            <a href="/servicios/<?php echo $serviceUrl; ?>"><?php _e('mas &gt;'); ?></a>
          </div>
        </section>
      </div>

    <?php
    if ($i == 2) { ?>
    </div>
    <?php
    $i = 0;
    } else {
      $i++;
    }?>

  <?php endwhile; else : ?>

    <div class="container ">
      <p><?php _e( 'Lo siento, servicios no encontrados' ); ?></p>
    </div>

  <?php endif; wp_reset_postdata(); ?>

  <?php
  if ($i != 2) { ?>
  </div>
  <?php
  }?>

  </section>

<!--
  <section class="services-we-offer">
    <h1><?php // echo $bottomTitle; ?></h1>

    <div class="eco-service">
      <div class="eco-service_body">
        <p>
          <?php // echo $bottomContent; ?>
        </p>
        <a href="/responsabilidad-social/"><?php // _e('mas Información &gt;'); ?></a>
      </div>
    </div>
  </section>
-->

</main> <!-- /main content -->

 <?php get_footer(); ?>

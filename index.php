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
   <img src="<?php the_field('image'); ?>" class="header-bg-img" alt="<?php the_field('title'); ?>" />
 </div>

<!-- latest updates -->
<section class="covers-container lastest-updates">
  <div class="container top-out-bg"></div>
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
    <h1><?php _e('Services we offer'); ?></h1>

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
            <a href="/servicios/<?php echo $serviceUrl; ?>"><?php _e('learn more &gt;'); ?></a>
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

  <section class="services-we-offer">
    <h1><?php echo $bottomTitle; ?></h1>

    <div class="eco-service">
      <div class="eco-service_body">
        <p>
          <?php echo $bottomContent; ?>
        </p>
        <a href="/responsabilidad-social/"><?php _e('mas Información &gt;'); ?></a>
      </div>
    </div>
  </section>

</main> <!-- /main content -->

 <?php get_footer(); ?>

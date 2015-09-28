<?php
/*
  Template Name: Service
*/
?>

<?php get_header(); ?>

<?php
global $wp_query;
$post_id = $wp_query->post->ID;

$title = get_the_title( $post_id );

$args = array(
  'post_type' => 'service_page',
  'meta_key' => 'page_title',
  'meta_value' => $title
);
$query = new WP_Query($args);
?>

<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
  <!-- latest updates -->

  <!-- main image -->
  <div class="covers-container">
    <img src="<?php the_field('image'); ?>" class="header-bg-img" alt="<?php the_field('title'); ?>" />
  </div>

  <section class="covers-container lastest-updates">
    <div class="container top-out-bg">
    </div>
    <h1>
      <span><?php the_field('title'); ?></span>
    </h1>

    <div class="container">
      <p class="lastest-updates_text">
        <?php
        the_field('title_description');
        ?>
      </p>
    </div>
</section>

<section class="container page-service">
  <section class="content-section">
    <h1><?php the_field('content_title') ?></h1>

    <div class="row m-bottom">
      <?php
      $item = get_field('content_item');
      if (!empty( $item )){
      ?>
      <div class="col-sm-4 ">
        <section class="eco-service">
          <div class="eco-service_body">
            <div class="media">
              <div class="media-left">
                <i class="fa fa-check-circle-o"></i>
              </div>
              <div class="media-body">
                <p>
                  <?php echo $item ?>
                </p>
              </div>
            </div>
          </div>
        </section>
      </div>
      <?php } ?>

      <?php
      $item = get_field('content_item2');
      if (!empty( $item )){
      ?>
      <div class="col-sm-4 ">
        <section class="eco-service">
          <div class="eco-service_body">
            <div class="media">
              <div class="media-left">
                <i class="fa fa-check-circle-o"></i>
              </div>
              <div class="media-body">
                <p>
                  <?php echo $item ?>
                </p>
              </div>
            </div>
          </div>
        </section>
      </div>
      <?php } ?>

      <?php
      $item = get_field('content_item3');
      if (!empty( $item )){
      ?>
      <div class="col-sm-4 ">
        <section class="eco-service">
          <div class="eco-service_body">
            <div class="media">
              <div class="media-left">
                <i class="fa fa-check-circle-o"></i>
              </div>
              <div class="media-body">
                <p>
                  <?php echo $item ?>
                </p>
              </div>
            </div>
          </div>
        </section>
      </div>
      <?php } ?>
    </div>

    <div class="row m-bottom">
      <?php
      $item = get_field('content_item4');
      if (!empty( $item )){
      ?>
      <div class="col-sm-4 ">
        <section class="eco-service">
          <div class="eco-service_body">
            <div class="media">
              <div class="media-left">
                <i class="fa fa-check-circle-o"></i>
              </div>
              <div class="media-body">
                <p>
                  <?php echo $item ?>
                </p>
              </div>
            </div>
          </div>
        </section>
      </div>
      <?php } ?>

      <?php
      $item = get_field('content_item5');
      if (!empty( $item )){
      ?>
      <div class="col-sm-4 ">
        <section class="eco-service">
          <div class="eco-service_body">
            <div class="media">
              <div class="media-left">
                <i class="fa fa-check-circle-o"></i>
              </div>
              <div class="media-body">
                <p>
                  <?php echo $item ?>
                </p>
              </div>
            </div>
          </div>
        </section>
      </div>
      <?php } ?>

      <?php
      $item = get_field('content_item6');
      if (!empty( $item )){
      ?>
      <div class="col-sm-4 ">
        <section class="eco-service">
          <div class="eco-service_body">
            <div class="media">
              <div class="media-left">
                <i class="fa fa-check-circle-o"></i>
              </div>
              <div class="media-body">
                <p>
                  <?php echo $item ?>
                </p>
              </div>
            </div>
          </div>
        </section>
      </div>
      <?php } ?>
    </div>

    <div class="row">
      <?php
      $item = get_field('content_item7');
      if (!empty( $item )){
      ?>
      <div class="col-sm-12">
        <section class="eco-service">
          <div class="eco-service_body">
            <div class="media">
              <div class="media-left">
                <i class="fa fa-check-circle-o"></i>
              </div>
              <div class="media-body">
                <p>
                  <?php echo $item ?>
                </p>
              </div>
            </div>
          </div>
        </section>
      </div>
      <?php } ?>
    </div>

  </section>
</section>

<?php endwhile; else : ?>

  <div class="container ">
    <p><?php _e( 'Lo siento, servicio no encontrado' ); ?></p>
  </div>

<?php endif; wp_reset_postdata(); ?>

<?php get_footer(); ?>

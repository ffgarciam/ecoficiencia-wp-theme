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

<!-- latest updates -->
<section class="covers-container lastest-updates">
  <h1>
    <span>Latest Updates</span>
  </h1>

  <div class="container">
    <p class="lastest-updates_text">
      Ecoficiencia launches the latest hydro power project in Central America
    </p>

    <button class="btn btn-eco btn-lg" type="button" name="more-news">More News</button>
  </div>
</section>

<!-- main content: services we offer -->
<main class="container">
  <section class="services-we-offer">
    <h1>Services we offer</h1>

    <div class="row">
      <div class="col-sm-4">
        <section class="eco-service">
          <div class="eco-service_header">
            <h1>Hydro</h1>
          </div>
          <div class="eco-service_body">
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit,
              sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
              Ut enim ad minim veniam, quis nostrud
            </p>
            <a href="#">learn more &gt;</a>
          </div>
        </section>
      </div>
      <div class="col-sm-4">
        <section class="eco-service">
          <div class="eco-service_header">
            <h1>Wind</h1>
          </div>
          <div class="eco-service_body">
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit,
              sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
              Ut enim ad minim veniam, quis nostrud
            </p>
            <a href="#">learn more &gt;</a>
          </div>
        </section>
      </div>
      <div class="col-sm-4">
        <section class="eco-service">
          <div class="eco-service_header">
            <h1>Energy Effiency</h1>
          </div>
          <div class="eco-service_body">
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit,
              sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
              Ut enim ad minim veniam, quis nostrud
            </p>
            <a href="#">learn more &gt;</a>
          </div>
        </section>
      </div>
    </div>

    <div class="row">
      <div class="col-sm-4">
        <section class="eco-service">
          <div class="eco-service_header">
            <h1>Biomass</h1>
          </div>
          <div class="eco-service_body">
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit,
              sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
              Ut enim ad minim veniam, quis nostrud
            </p>
            <a href="#">learn more &gt;</a>
          </div>
        </section>
      </div>
      <div class="col-sm-8">
        <section class="eco-service">
          <div class="eco-service_header">
            <h1>Project supervision & due dilligence</h1>
          </div>
          <div class="eco-service_body">
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit,
              sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
              Ut enim ad minim veniam, quis nostrud exercitation. Lorem
              ipsum dolor sit amet dolor ipsum lorem.
            </p>
            <a href="#">learn more &gt;</a>
          </div>
        </section>
      </div>
    </div>
  </section>

  <section class="content-section">
    <h1>Corporate social Responsibility</h1>
    <div class="row">
      <div class="col-sm-4">
        <section class="eco-service">
          <div class="eco-service_header">
            <h1>Beneffiting Communities</h1>
          </div>
          <div class="eco-service_body">
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit,
              sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
              Ut enim ad minim veniam, quis nostrud
            </p>

          </div>
        </section>
      </div>

      <div class="col-sm-4">
        <section class="eco-service">
          <div class="eco-service_header">
            <h1>Our Involvement</h1>
          </div>
          <div class="eco-service_body">
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit,
              sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
              Ut enim ad minim veniam, quis nostrud
            </p>

          </div>
        </section>
      </div>

      <div class="col-sm-4">
        <section class="eco-service">
          <div class="eco-service_header">
            <h1>Lorem Ipsum</h1>
          </div>
          <div class="eco-service_body">
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit,
              sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
              Ut enim ad minim veniam, quis nostrud
            </p>

          </div>
        </section>
      </div>
    </div>
  </section>

</main> <!-- /main content -->

 <?php get_footer(); ?>

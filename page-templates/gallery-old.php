<?php
/*
 Template Name: Gallery Old
 */
 if ( ! defined( 'ABSPATH' ) ) {
   exit; // Exit if accessed directly.
 }
 ?>

    <?php get_header(); ?>
    <section id="inner-page-header">
        <div class="container">
            <div class="row justify-content-center wow fadeInUp" data-wow-delay=".4s">
                <div class="col-lg-8">
                    <h1 class="title text-center">Dock Design Gallery</h1>

                    <div class="vertical-divider"></div>
                    <!-- <h2 class="text-center">Learn More or Get Answers</h2> -->
                    <h3 class="text-center">On Instagram: @kroegermarine</h3>
                </div>
            </div>
        </div>
    </section>
   <section id="gallery">
        <div class="row gallery-grid">
            <a href="https://www.instagram.com/kroegermarine/" target="_blank" class="gallery-item">
                <div class="gallery-img">
                    <img src="https://www.kroegermarine.com/wp-content/uploads/2021/05/106701386_1220905528251364_5047864247942589180_n.jpg" alt="">
                </div>
            </a>
        </div>
   </section>
    <section>
      <?php get_template_part( '/template-parts/cta'); ?>
    </section>


    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/tooltipster/3.3.0/js/jquery.tooltipster.min.js"></script> -->

            <?php get_footer(); ?>

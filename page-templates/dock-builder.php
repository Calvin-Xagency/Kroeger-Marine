<?php
/*
 Template Name: Dock Builder
 */
 if ( ! defined( 'ABSPATH' ) ) {
   exit; // Exit if accessed directly.
 }
 ?>

    <?php get_header(); ?>
    <section id="inner-page-header">
        <div class="container">
            <div class="row justify-content-center wow fadeInUp" data-wow-delay=".4s">
                <div class="col-lg-10">
                    <!-- <h1 class="title text-center">Contact Us</h1>

                    <div class="vertical-divider"></div> -->
                    <h1 class="text-center">Let's Get Started</h1>
                    <h3 class="text-center">The questions below will allow our team to understand your needs
better and will help guide us in crafting your perfect dock</h3>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row justify-content-center my-5">
                <div class="col-9">
                  <?php echo FrmFormsController::get_form_shortcode( array( 'id' => 20, 'title' => false, 'description' => false ) ); ?>
                </div>
            </div>
        </div>
    </section>

    <section>
      <?php get_template_part( '/template-parts/cta'); ?>
    </section>


    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/tooltipster/3.3.0/js/jquery.tooltipster.min.js"></script> -->

            <?php get_footer(); ?>

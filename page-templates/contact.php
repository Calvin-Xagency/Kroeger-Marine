<?php
/*
 Template Name: Contact
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
                    <h1 class="title text-center">Contact Us</h1>

                    <div class="vertical-divider"></div>
                    <h2 class="text-center">Learn More Or Get Answers</h2>
                    <h3 class="text-center">Our team is available to help answer any questions
or provide guidance on building your dock</h3>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row justify-content-center my-5">
                <div class="col-9">
                    <?php echo FrmFormsController::get_form_shortcode( array( 'id' => 15, 'title' => false, 'description' => false ) ); ?>
                </div>
            </div>
        </div>
    </section>
    <section>
      <div class="container-fluid p-0">
        <div class="map" style="padding: 1px 0">
          <iframe src="https://snazzymaps.com/embed/219108" width="100%" height="500px" style="border:none;"></iframe>
        </div>        
      </div>
    </section>
    <section>
      <?php get_template_part( '/template-parts/cta'); ?>
    </section>


    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/tooltipster/3.3.0/js/jquery.tooltipster.min.js"></script> -->

            <?php get_footer(); ?>

<script>
  jQuery(document).ready(function($) {
    $('.map').on('mouseenter', function() {
      $('.custom-cursor .cursor--canvas').css("opacity", "0");
    }).on('mouseleave', function() {
      $('.custom-cursor .cursor--canvas').css("opacity", "1");
    })
  })
</script>

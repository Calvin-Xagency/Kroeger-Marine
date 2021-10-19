<?php
/*
 Template Name: Gallery 
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
        <?php
            // Check rows exists.
            if( have_rows('gallery') ):
                // Loop through rows.
                while( have_rows('gallery') ) : the_row();
                    // Load sub field value.
                    $image = get_sub_field('image');
                    // Do something...
                    ?>
                    <div class="gallery-item">
                    <a href="https://www.instagram.com/kroegermarine/" target="_blank">
                        <div class="gallery-img">
                            <img src="<?php echo $image; ?>" alt="">
                        </div>
                    </a>
                </div>

                <?php
                // End loop.
                endwhile;

            else :

            endif;
        ?>
           
   </section>
    <section>
      <?php get_template_part( '/template-parts/cta'); ?>
    </section>


    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/tooltipster/3.3.0/js/jquery.tooltipster.min.js"></script> -->

            <?php get_footer(); ?>


<?php
/*
 Template Name: Process
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
                    <h1 class="title text-center">Our Procecss</h1>

                    <div class="vertical-divider"></div>
                    <h2 class="text-center">Planning the Perfect Dock</h2>
                    <!-- <h3 class="text-center">We offer innovative dock styles, features, and options to suit your lifestyle and budget.</h3> -->
                </div>
            </div>
        </div>
    </section>
    <section id="process-sec-1">
        <div class="page-content">
            <div class="container-fluid">
              <div class="row mb-5 wow fadeInUp" data-wow-delay=".3s">
                <div class="col-xl-4 px-xl-5 mt-4 mt-xl-0 wow fadeInUp pt-5 offset-lg-1" data-wow-delay=".2s">
                    <h1 class="mb-5">Experience Matters.</h1>
                    <p>Based on 35+ years of experience, we have developed a system that will help guide you through the dock building
                    process. At the center of everything we do is ensuring that we
                    customize your dock to your lifestyle now and in the future.
                    Below are the steps that will guide you through the process.</p>
                </div>
                  <div class="col-xl-7 px-xl-5">
                      <div class="p-xl-0 p-4"><img class="img-shadow w-100" src="/wp-content/themes/kroeger-marine/img/process-img-1.jpg" alt=""></div>
                  </div>

              </div>
            </div>
            <!-- Process Bubbles Loop -->

            <div class="container process-wrapper">
            <?php if( have_rows('process_list') ): ?>
              <?php while( have_rows('process_list') ): the_row();
              // vars
          		$image = get_sub_field('procecss_image');
          		$title = get_sub_field('process_title');
          		$number = get_sub_field('process_number');
              $content = get_sub_field('process_content');

          		?>
                <div class="row justify-content-center wow fadeInUp" data-wow-delay=".2s">
                    <div class="col-lg-2 col-8">
                        <div class="pt-lg-0 pt-4"><img class="img-shadow" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" /></div>
                    </div>
                    <div class="px-lg-5 px-1 mt-lg-0 mt-5 col-lg-9 process-text">
                        <h1><span><?php echo $number; ?>. </span><?php echo $title; ?></h1>
                        <p><?php echo $content; ?></p>
                    </div>
                </div>
                <?php endwhile; ?>
              <?php endif; ?>
            </div>
        </div>
        <?php get_template_part( '/template-parts/top-5'); ?>
    </section>
    <section class="mountain-spacer" style="margin-top: -300px;">
      
    </section>
    <section>
      <?php get_template_part( '/template-parts/cta'); ?>
    </section>


    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/tooltipster/3.3.0/js/jquery.tooltipster.min.js"></script> -->

            <?php get_footer(); ?>

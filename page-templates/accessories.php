<?php
/*
 Template Name: Accessories
 */
 if ( ! defined( 'ABSPATH' ) ) {
   exit; // Exit if accessed directly.
 }
 ?>

<?php get_header(); ?>
<section id="inner-page-header">
    <div class="container wow fadeInUp" data-wow-delay=".4s">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <h1 class="title text-center"><?php the_field('page_title'); ?></h1>
                <div class="vertical-divider"></div>
                <h3 class="text-center"><?php the_field('page_subtitle'); ?></h3>
            </div>  
        </div>
    </div>
</section>

<section id="accessories">
<?php /******ACF Repeater Section*******/

// Check rows exists.
if( have_rows('accessories_content') ):

    $i = 1;
    // Loop through rows.
    while( have_rows('accessories_content') ) : the_row();

        // Load sub field value.
        $featured_img = get_sub_field('featured_image');
        $sub_img1 = get_sub_field('sub_image_1');
        $sub_img2 = get_sub_field('sub_image_2');

        $title = get_sub_field('title');
        $text = get_sub_field('text');
        $features = get_sub_field('features');
        $show_dimensions = get_sub_field('show_dimensions');
        $dimensions = get_sub_field('dimensions');
        $download = get_sub_field('download');

        $promo = get_sub_field('promo');
        
        ?>
        <div class="container-fluid">
            <div id="<?php echo $title; ?>" style="position: absolute; margin-top: -10rem;"></div>
            <div class="row justify-content-center <?php if ($i % 2 == 0) echo 'flex-row-reverse';?>">
                <?php if ($promo) : ?>
                    <div class="col-12 mb-5">
                        <div class="promo-container">
                            <?php echo get_sub_field('promo_text'); ?>
                        </div>
                    </div>
                <?php endif; ?>
                <div class="col-md-5 images">
                    <h2><?php echo $title; ?></h2>
                    <img src="<?php echo esc_url($featured_img['url']);?>" alt="<?php echo esc_attr($featured_img['alt']); ?>" />
                    <div class="sub-images <?php if ($i % 2 != 0) echo 'flex-row-reverse';?>">
                      <?php if ( !empty ($sub_img1) ): ?>
                        <img src="<?php echo esc_url($sub_img1['url']);?>" alt="<?php echo esc_attr($sub_img1['alt']); ?>" />
                      <?php endif;

                      if ( !empty( $sub_img2 ) ): ?>
                        <img src="<?php echo esc_url($sub_img2['url']);?>" alt="<?php echo esc_attr($sub_img2['alt']); ?>" />
                      <?php endif; ?>
                    </div>
                </div>
                <div class="col-md-5 content">
                    <div class="accessory-info">
                        <h2><?php echo $title; ?></h2>
                        <p><?php echo $text; ?></p>
                    </div>
                    <div class="features">
                      <h3><?php /*if ($i != 5) {*/ echo 'Key Features:'; /*}*/?></h3>
                      <?php echo $features; ?>
                    </div>

                    <?php if($show_dimensions == true) : ?>
                        <div class="dimensions">
                            <h3><?php //if ( $i == 10 ) { echo 'Includes:'; } else { echo 'Dimensions:'; }?>Dimensions:</h3>
                            <?php 
                                echo $dimensions; 
                            ?>
                        </div>
                    <?php endif; ?>

                    <?php if ( $download ): ?>
                        <div class="text-md-left text-center">
                            <a class="btn btn-brown" target="_blank" href="<?php echo $download['url']; ?>">Download PDF</a>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <?php

    // End loop.
    $i++;
    endwhile;
endif;

?>
</section>
<section>
  <!-- used for the dock counter, leave blank -->
</section>
<section id="accessories-footer">
  <h2>To learn more about these featured accessories,<br/>
  contact us at <a href="tel:864.882.7671">864.882.7671</a> a or click <a href="https://www.kroegermarine.com/dock-builder/">Build Your Dock</a> below.</h2>
  <?php get_template_part( '/template-parts/cta'); ?>
</section>

<?php get_footer(); ?>

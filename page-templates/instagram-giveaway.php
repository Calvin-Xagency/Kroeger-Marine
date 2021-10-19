<?php
/*
 Template Name: Instagram Giveaway
 */
 if ( ! defined( 'ABSPATH' ) ) {
   exit; // Exit if accessed directly.
 }
 ?>

<?php get_header(); ?>
<section id="inner-page-header">
    <div class="container wow fadeInUp" data-wow-delay=".4s">
        <div class="row justify-content-center">
            <div class="col-12">
                <h1 class="title text-center"><?php the_field('page_title'); ?></h1>
                <div class="vertical-divider"></div>
                <h3 style="color: #091f40;" class="text-center"><?php the_field('page_subtitle'); ?></h3>
            </div>  
        </div>
    </div>
</section>

<section class="container terms my-5">
    <img src="https://www.kroegermarine.com/wp-content/uploads/2021/08/texture-bg.png">
    <div class="row">
        <div class="col">
            <?php the_field('terms'); ?>
        </div>
    </div>
</section>

<section>
  <!-- used for the dock counter, leave blank -->
</section>
  <?php get_template_part( '/template-parts/cta'); ?>
</section>

<?php get_footer(); ?>

<style>
    #dock-counter {
        display: none;
    }

    span.title {
        color: #ba906c;
        font-weight: bold;
    }

    .uppercase {
        text-transform: uppercase;
    }

    .terms {
        position: relative;
    }

    .terms img {
        position: absolute;
        top: 12.5%;
        left: 50%;
        transform: translateX(-50%);
        max-width: unset;
    }
</style>
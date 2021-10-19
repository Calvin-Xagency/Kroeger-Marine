<?php
/*
 Template Name: Video Page
 */
 if ( ! defined( 'ABSPATH' ) ) {
   exit; // Exit if accessed directly.
 }
 ?>
<!-- Header -->
<?php get_header(); ?>
<?php
  // vars
  $videoid = get_field('video_id');
?>
    <!-- Page Body -->
    <div class="video-page-content">
        <div class="container-fluid video-wrapper mx-auto">
            <div class="row mx-auto">
                <div class="col-12 embed-container">
                   <iframe src="https://player.vimeo.com/video/<?php echo $videoid; ?>" width="640" height="360" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
               </div>
            </div>
        </div>
    </div>

<!-- Footer -->
<?php get_footer(); ?>

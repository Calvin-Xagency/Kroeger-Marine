<?php
/*
 Template Name: popup
 */
 if ( ! defined( 'ABSPATH' ) ) {
   exit; // Exit if accessed directly.
 }
 ?>

    <?php get_header(); ?>
    <!-- Modal -->
    <div class="modal fade" id="covidPopup" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" style="background-color: rgba(0,0,0,0.8);">
      <div class="modal-dialog modal-dialog-centered" role="document" style="max-width: 50%;">
        <div class="modal-content" style="background-image: url(/wp-content/themes/kroeger-marine/img/kroeger-popup-bg.jpg); background-size: cover;">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="position: absolute; right: -50px; top: -25px; color: white; font-size: 30px;">
              <span aria-hidden="true">&times;</span>
            </button>
            <div class="text-center"><img style="width: 50px" src="/wp-content/themes/kroeger-marine/img/popup-icon.png" alt=""></div>
            <h5>KROEGER MARINE</h5>
            <h1 style="color: #b78d6b; text-align: center;">COVID-19 Update</h1>
            <div style="width: 70px; background-color: white; height: 2px; margin: 15px auto;"></div>
            <p style="color: white" class="text-center mb-4">During these unprecendented times, the Kroeger Marine team is still working hard to maintain the highest level of customer service. Please call us with any questions or concerns.</p>
            <div class="text-center" style="color: #b78d6b; font-family: poppins, sans-serif; font-weight: 700; font-style: normal; font-size: 18px;"><span>CONTACT US AT</span></div>
            <div class="text-center" style="color: white; font-family: poppins, sans-serif; font-weight: 700; font-style: normal; font-size: 16px;">864-822-7671 &nbsp;&nbsp;•&nbsp;&nbsp; dockandrock@kroegermarine.com</div>



        </div>
      </div>
    </div>
    <?php get_footer(); ?>

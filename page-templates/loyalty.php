<?php
/*
 Template Name: Loyalty
 */
 if ( ! defined( 'ABSPATH' ) ) {
   exit; // Exit if accessed directly.
 }
 ?>

<?php get_header(); ?>
<section class="hero">
    <img src="/wp-content/themes/kroeger-marine/img/loyalty/loyalty-hero.jpg" alt="">
    <h1>A Custom Dock Has Its Rewards</h1>
    <img src="/wp-content/themes/kroeger-marine/img/loyalty/logo.jpg" alt="" class="logo">
</section>

<section class="members container-fluid my-5 pt-5">
    <img src="/wp-content/uploads/2021/02/bg-texture.png" alt="">
    <img src="/wp-content/uploads/2021/02/bg-texture.png" alt="">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 mb-4 my-lg-5 py-lg-5">
                <h1>Join The Kroeger Marine Dockside Member’s Club For Exclusive Offers.</h1>
                <div class="enter-cta mt-5 mb-4">
                    <!--p>Enter To Win An <span>Easy Climb Ladder™</span> ($850 Value)* And Get <span>$100 Off Any Product or Service</span>.</p>
                    <p>NOW THROUGH JUNE 30, 2021</p>
                    <p class="note">*Installation not included.</p-->
                    <p>Receive quarterly promotional product or service discounts, special <br>SWAG giveaways, new product and innovation announcements, and more. <br>Sign up to get rewarded <span>NOW</span>.</p>
                </div>
                <!-- <p>Receive quarterly promotional product or service discounts, special SWAG giveaways, new product and innovation announcements, and more. Sign up to get rewarded <strong>NOW</strong>. </p> -->
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col-md-7">
                <img src="/wp-content/themes/kroeger-marine/img/loyalty/swag.png" alt="">
            </div>
            <div class="col-md-5 perk mb-5 mb-md-0 text-center text-md-left">
                <img src="/wp-content/themes/kroeger-marine/img/loyalty/shirt-icon.jpg" class="mb-3">
                <h3>SWAG GIVEAWAYS</h3>
                <p>Win FREE Kroeger gear, and get a chance to be entered into our exclusive Member Giveaways!</p>
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col-md-5 perk order-md-1 order-2 mb-5 mb-md-0 text-center text-md-left">
                <img src="/wp-content/themes/kroeger-marine/img/loyalty/star-icon.jpg" class="mb-3">
                <h3>FIRST ACCESS TO <br>INNOVATIVE DOCK PRODUCTS</h3>
                <p>Be the first to learn about and/or try exclusive, new products and services from Kroeger Marine.</p>
            </div>
            <div class="col-md-7 order-md-2 order-1">
                <img src="/wp-content/themes/kroeger-marine/img/first-access-new.png" alt="">
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col-md-7">
                <img src="/wp-content/themes/kroeger-marine/img/loyalty/events.png" alt="">
            </div>
            <div class="col-md-5 perk text-center text-md-left">
                <img src="/wp-content/themes/kroeger-marine/img/loyalty/ticket-icon.jpg" class="mb-3">
                <h3>exclusive events</h3>
                <p>Get industry-exclusive previews of the newest boats and accessories on the market via virtual and in-person events.</p>
                <p class="and-more">...and more.</p>
            </div>
        </div>
    </div>
</section>

<section class="loyalty-form container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 p-0">
                <img src="/wp-content/themes/kroeger-marine/img/loyalty/logo-white.png">
                <h2 class="text-center text-lg-left">Start Enjoying The Perks.</h2>
                <p class="text-center text-lg-left">We’re putting you in the Captain’s chair. Sign up now to take advantage of all the Dockside Member’s Club has to offer. </p>
            </div>
            <div class="offset-lg-1 col-lg-7 mt-5 mt-lg-0">
                <!-- <h2 class="mb-4 text-center text-lg-left">Sign Up <span>to be entered to win an Easy Climb Ladder™ and get your exclusive discount.</span></h2> -->
                <?php echo FrmFormsController::get_form_shortcode( array( 'id' => 32, 'title' => false, 'description' => false ) ); ?>
            </div>
        </div>
    </div>
</section>

<div id="cta" class="wow fadeInUp" data-wow-delay=".2s">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 p-0">
                <a href="/dock-builder/" class="box-button box-button-1">
                    <div class="box-border">
                        <h3>Build Your Dock</h3>
                    </div>
                </a>
            </div>
            <div class="col-lg-6 p-0">
                <a href="/gallery/" class="box-button box-button-2">
                    <div class="box-border">
                        <h3>Dock Design Gallery</h3>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>

<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Astra
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

?>
			<?php astra_content_bottom(); ?>

		</div> <!-- ast-containers -->

	</div><!-- #contents -->

		<?php astra_content_after(); ?>

	<?php astra_footer_before(); ?>
    <div class="footer-wrapper">
        <div class="container-fluid">
            <div class="row footer-column-wrapper">
                <div class="footer-menu col-lg-3 footer-column wow fadeInUp" data-wow-delay=".2s">
                  <h5>kroeger marine</h5>
                    <ul class="list-unstyled">
						<?php
							wp_reset_query();
							$link2 = get_field('link_2', 'option');
							$link3 = get_field('link_3', 'option');
							$link4 = get_field('link_4', 'option');
							$link5 = get_field('link_5', 'option');
							$link6 = get_field('link_6', 'option');
							$link7 = get_field('link_7', 'option');
							$link8 = get_field('link_8', 'option');
							$link9 = get_field('link_9', 'option');

							//var_dump($link2);
							//echo $link2->guid;
						?>
						<li> <a href="/">Welcome</a></li>
						<!--li><a href="/craftsmanship">Our Craftsmanship</a></li>
						<li><a href="/our-products">Our Products</a></li>
						<li> <a href="/erosion-control">Erosion Control</a></li>
						<li><a href="/our-process">Our Process</a></li>
						<li><a href="/contact">Contact Us</a></li>
						<li><a href="/dock-builder">Build Your Dock</a></li>
						<li><a href="/gallery">Dock Design Gallery</a></li-->

						<li><a href="/<?php echo $link2->post_name; ?>"><?php echo $link2->post_title; ?></a></li>
						<li><a href="/<?php echo $link3->post_name; ?>"><?php echo $link3->post_title; ?></a></li>
						<li><a href="/<?php echo $link4->post_name; ?>"><?php echo $link4->post_title; ?></a></li>
						<li><a href="/<?php echo $link5->post_name; ?>"><?php echo $link5->post_title; ?></a></li>
						<li><a href="/<?php echo $link6->post_name; ?>"><?php echo $link6->post_title; ?></a></li>
						<li><a href="/<?php echo $link7->post_name; ?>"><?php echo $link7->post_title; ?></a></li>
						<li><a href="/<?php echo $link8->post_name; ?>"><?php echo $link8->post_title; ?></a></li>
						<li><a href="/<?php echo $link9->post_name; ?>"><?php echo $link9->post_title; ?></a></li>
                    </ul>
                </div>
                <div class="col-lg-3 footer-column wow fadeInUp" data-wow-delay=".3s">
					<h5>contact info</h5>
					<!--p>2227 Blue Ridge Boulevard<br>Seneca, SC 29672</p>
					<p><a href="mailto:dockandrock@kroegermarine.com">dockandrock@kroegermarine.com</a></p>
					<p><a href="tel:18648827671">864-882-7671</a></p-->
					<?php 
						$address = get_field('address', 'option');
						$email = get_field('email', 'option');

						$number = get_field('number', 'option'); 
						$numbers = explode("-", $number);
						$phone = $numbers[0] . $numbers[1] . $numbers[2];

						//echo $phone;
						//var_dump($number);
					?>
					<p><?php echo get_field('address', 'option'); ?></p>
					<p><a href="mailto:<?php echo get_field('email', 'option');?>"><?php echo get_field('email', 'option');?></a></p>
					<p><a href="tel:<?php echo $phone;?>"><?php echo get_field('number', 'option'); ?></a></p>
                </div>
                <div class="col-lg-3 footer-column wow fadeInUp social-column" data-wow-delay=".3s">
					<h5>connect with us</h5>
					<!--a href="https://www.facebook.com/KroegerMarineConstruction/" target="_blank"><i class="fa fa-lg fa-facebook"></i></a>
					<a href="https://www.instagram.com/kroegermarine/" target="_blank"><i class="fa fa-lg fa-instagram"></i></a>
					<a href="https://www.youtube.com/user/KroegerMarine?feature=mhum" target="_blank"><i class="fa fa-lg fa-youtube-play"></i></a>
					<a href="https://www.linkedin.com/company/kroeger-marine?trk=top_nav_home" target="_blank"><i class="fa fa-lg fa-linkedin"></i></a-->

					<?php
						$fb = get_field('fb', 'option');
						$insta = get_field('insta', 'option');
						$yt = get_field('yt', 'option');
						$linkedin = get_field('linkedin', 'option');
					?>

					<a href="<?php echo $fb;?>" target="_blank"><i class="fa fa-lg fa-facebook"></i></a>
					<a href="<?php echo $insta;?>" target="_blank"><i class="fa fa-lg fa-instagram"></i></a>
					<a href="<?php echo $yt;?>" target="_blank"><i class="fa fa-lg fa-youtube-play"></i></a>
					<a href="<?php echo $linkedin;?>" target="_blank"><i class="fa fa-lg fa-linkedin"></i></a>
                </div>
                <div class="mt-md-0 mt-4 col-lg-3 footer-column wow fadeInUp latest-updates" data-wow-delay=".4s">
                  <h5>get the latest updates</h5>
                  <?php echo FrmFormsController::get_form_shortcode( array( 'id' => 13, 'title' => false, 'description' => false ) ); ?>
                </div>
            </div>
            <div class="row footer-copyright wow fadeInUp" data-wow-delay=".2s">
                <div class="col-12">
                  <p class="m-0">COPYRIGHT 2019-2021 KROEGER MARINE</p>
                  <P class="m-0"><a href="http://xagency.io" target="_blank">MADE BY <span>X</span></a></P>
                </div>
            </div>
        </div>
    </div>
		<!-- FULL SCREEN MENU -->
		<!-- Modal -->
		<div class="modal fade full-nav" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-body">
		        <div class="container menu-wrapper">
		        	<div class="menu-left menu-column">
								<?php
									wp_nav_menu(
									  array(
									    'menu' => 'Menu Left',
											'theme_location' => 'left-menu'
									  )
									);
								?>
		        	</div>
		        	<div class="menu-right menu-column">
								<?php
									wp_nav_menu(
										array(
											'menu' => 'Menu Right',
											'theme_location' => 'right-menu'
										)
									);
								?>
		        	</div>
							<div class="menu-info-wrapper mt-5">
								<div class="container-fluid modal-bottom">
										<div class="row">
											<div class="col-lg-3 footer-column social-column" >
												<h5>contact info</h5>
												<!--p>2227 Blue Ridge Boulevard<br>Seneca, SC 29672</p>
												<p>dockandrock@kroegermarine.com</p>
												<p>864-882-7671</p-->
												<p><?php echo get_field('address', 'option'); ?></p>
												<p><a style="margin: 0;" href="mailto:<?php echo get_field('email', 'option');?>"><?php echo get_field('email', 'option');?></a></p>
												<p><a style="margin: 0;" href="tel:<?php echo $phone;?>"><?php echo get_field('number', 'option'); ?></a></p>
											</div>
											<div class="col-lg-3 footer-column social-column" >
												<h5>connect with us</h5>
												<!--a href="https://www.facebook.com/KroegerMarineConstruction/" target="_blank"><i class="fa fa-lg fa-facebook"></i></a>
												<a href="https://www.instagram.com/kroegermarine/" target="_blank"><i class="fa fa-lg fa-instagram"></i></a>
												<a href="https://www.youtube.com/user/KroegerMarine?feature=mhum" target="_blank"><i class="fa fa-lg fa-youtube-play"></i></a>
												<a href="https://www.linkedin.com/company/kroeger-marine?trk=top_nav_home" target="_blank"><i class="fa fa-lg fa-linkedin"></i></a-->
												<a href="<?php echo $fb;?>" target="_blank"><i class="fa fa-lg fa-facebook"></i></a>
												<a href="<?php echo $insta;?>" target="_blank"><i class="fa fa-lg fa-instagram"></i></a>
												<a href="<?php echo $yt;?>" target="_blank"><i class="fa fa-lg fa-youtube-play"></i></a>
												<a href="<?php echo $linkedin;?>" target="_blank"><i class="fa fa-lg fa-linkedin"></i></a>
											</div>
											<div class="col-lg-3 footer-column social-column">
												<h5>Get The Latest Updates</h5>
												<p><a id="newsletter-modal-link" style="margin: 0;" href="#">Sign Up For Newsletter</a></p>
											</div>
										</div>
								</div>
							</div>
							</div>

		        </div>
		      </div>
		    </div>
		  </div>
		</div>

		<?php if ( is_page('3930') ) : ?>
		<div class="popup-custom pause-shoreline">
			<div class="popup-container">
				<button class="popup-custom-close">X</button>
				<h1 style="text-align: center;"><span style="color: #ffffff;">Shoreline Orders</span></h1>
				<div style="width: 100px; height: 2px; background-color: #bf9d64; margin: 15px auto;"></div>
				<p style="width: 75%; line-height: 1.75rem; margin: 0 auto 30px; text-align: center;">Kroeger's shoreline stabilization quality, service, and commitment to you have helped us grow exponentially. Due to challenges with material and labor shortages, we are pausing new orders so that we can better serve our current shoreline customers. However, we have established a waitlist so that we can assist you as soon as we re-open sales. Please call <a href="tel:864-882-7671">864-882-7671</a> to speak with our team. We are ready to assist you.</p>
			</div>
		</div>
        <?php endif; ?>

		<?php if ( is_page('home') ) : ?>
		<div class="popup-custom thanksgiving">
			<div class="popup-container">
				<button class="popup-custom-close">X</button>
				<img src="/wp-content/uploads/2020/12/kroeger-logo.png">
				<h3 style="text-align: center;"><span style="color: #ffffff;">KROEGER MARINE</span></h2>
				<h2 style="text-align: center;">Happy Thanksgiving</h1>
				<div style="width: 100px; height: 2px; background-color: white; margin: 25px auto 35px;"></div>
				<p style="width: 80%; line-height: 1.75rem; margin: 0 auto 50px; text-align: center;">We will be closing at 12pm on Wednesday, November 24th and will re-open Monday, November 29th at 8am.</p>
				<h4 style="width: 75%; line-height: 1.75rem; margin: 0 auto; text-align: center;">CONTACT US AT</h4>
				<p style="text-align: center; margin: 0;"><a href="mailto:dockandrock@kroegermarine.com">dockandrock@kroegermarine.com</a></p>
			</div>
		</div>
        <?php endif; ?>

		<?php /* if ( is_page('home') ) : ?>
		<div class="popup-custom storm-alert">
			<div class="popup-container">
				<button class="popup-custom-close">X</button>
				<h1 style="text-align: center;"><span style="color: #ffffff;">Severe Weather Alert</span></h1>
				<div style="width: 100px; height: 2px; background-color: #bf9d64; margin: 15px auto;"></div>
				<p style="width: 75%; line-height: 1.75rem; margin: 0 auto 30px; text-align: center;">Please take extra precautions to secure your dock and keep your dock safe from the impending storms. Due to an anticipated high volume of calls and phone issues relating to weather, please email <a href="mailto:service@kroegermarine.com">service@kroegermarine.com</a> with any service issues requiring attention and we will get back to you as soon as possible.</p>
			</div>
		</div>
        <?php endif; ?>

		<!-- labor day modal -->	
		<?php if ( !is_page('3930') ) : ?>
		<div class="popup-custom labor-day">
			<div class="popup-container" style="padding: 1rem 0 1.5rem;">
				<button class="popup-custom-close">X</button>
				<img src="/wp-content/uploads/2020/12/kroeger-logo.png">
				<h2 style="text-align: center;"><span style="color: #ffffff;">KROEGER MARINE</span></h2>
				<h1 style="text-align: center;">Happy Labor Day</h1>
				<div style="width: 100px; height: 4px; background-color: white; margin: 45px auto 30px;"></div>
				<p style="width: 75%; line-height: 1.75rem; margin: 0 auto 30px; text-align: center;">Kroeger Marine will be closed on Monday, September 6 in observance of Labor Day. We will reopen Tuesday, September 7 at 8am. Thank you.</p>
				<h3 style="width: 75%; line-height: 1.75rem; margin: 0 auto; text-align: center;">CONTACT US AT</h3>
				<p style="text-align: center; margin: 1.5em auto 0;"><!--a href="tel:864-882-7671">864-882-7671</a> <span style="font-size: 2em; vertical-align: -0.125em;">•</span--> <a href="mailto:dockandrock@kroegermarine.com">dockandrock@kroegermarine.com</a></p>
			</div>
		</div>
		<?php endif; ?>
		<!-- end labor day modal -->
		
		<!-- covid modal >					
		<div class="popup-custom covid">
			<div class="popup-container">
				<button class="popup-custom-close">X</button>
				<img src="/wp-content/uploads/2020/12/kroeger-logo.png">
				<h2 style="text-align: center;"><span style="color: #ffffff;">KROEGER MARINE</span></h2>
				<h1 style="text-align: center;">COVID-19 Update</h1>
				<div style="width: 100px; height: 4px; background-color: white; margin: 15px auto 30px;"></div>
				<p style="width: 75%; line-height: 1.75rem; margin: 0 auto 30px; text-align: center;">The Kroeger Marine team is still working hard to maintain the highest level of customer service. To ensure your safety, please schedule an appointment to visit our showroom or call us with any questions or concerns.</p>
				<h3 style="width: 75%; line-height: 1.75rem; margin: 0 auto; text-align: center;">CONTACT US AT</h3>
				<p><a href="tel:864-882-7671">864-882-7671</a> <span style="font-size: 2em; vertical-align: -0.125em;">•</span> <a href="mailto:dockandrock@kroegermarine.com">dockandrock@kroegermarine.com</a></p>
			</div>
		</div>
		<!-- end covid modal -->

		<!-- july 4 modal -->	
		<?php if (is_page(192)) : ?>
		<div class="popup-custom july-4">
			<div class="popup-container">
				<button class="popup-custom-close">X</button>
				<img src="/wp-content/uploads/2020/12/kroeger-logo.png">
				<h2 style="text-align: center;"><span style="color: #ffffff;">KROEGER MARINE</span></h2>
				<h1 style="text-align: center;">Happy July 4th</h1>
				<div style="width: 100px; height: 4px; background-color: white; margin: 45px auto 30px;"></div>
				<p style="width: 75%; line-height: 1.75rem; margin: 0 auto 30px; text-align: center;">We are closed Monday, July 5th in observance of the holiday. We will reopen on Tuesday, July 6th at 8:00am.</p>
				<h3 style="width: 75%; line-height: 1.75rem; margin: 0 auto; text-align: center;">CONTACT US AT</h3>
				<p><!--a href="tel:864-882-7671">864-882-7671</a> <span style="font-size: 2em; vertical-align: -0.125em;">•</span--> <a href="mailto:dockandrock@kroegermarine.com">dockandrock@kroegermarine.com</a></p>
			</div>
		</div>
		<?php endif; ?>
		<!-- end july 4 modal -->

		<!-- lookbook modal -->
		<!-- <div class="lookbook-modal popup-custom" style="display: none;">
			<div class="lookbook-container popup-container">
				<button class="popup-custom-close">X</button>
				<h1 style="text-align: center;"><span style="color: #ffffff;">View Lookbook</span></h1>
				<p style="width: 75%; line-height: 1.75rem; margin: 0 auto 30px; text-align: center;">Please fill out the below information to view the lookbook.</p>
				<?php echo FrmFormsController::get_form_shortcode( array( 'id' => 30, 'title' => false, 'description' => false ) ); ?>
			</div>
		</div> -->
		<!-- end lookbook modal --> */?>

		<!-- newsletter modal -->
		<div class="newsletter-modal popup-custom" style="display: none;">
			<div class="newsletter-container popup-container">
				<button class="popup-custom-close">X</button>
				<h1 style="text-align: center;"><span style="color: #ffffff;">Yes, Sign Me Up!</span></h1>
				<p style="width: 75%; line-height: 1.75rem; margin: 0 auto 30px; text-align: center;">Get care & maintenance tips, product updates, & special promotions.</p>
				<?php echo FrmFormsController::get_form_shortcode( array( 'id' => 13, 'title' => false, 'description' => false ) ); ?>
			</div>
		</div>
		<!-- end newsletter modal -->


		<?php astra_footer(); ?>

		<?php astra_footer_after(); ?>

	</div><!-- #page -->

	<?php astra_body_bottom(); ?>

	<?php wp_footer(); ?>
	<script>
               new WOW().init();
               </script>
							 <!-- Google Tag Manager -->
							 <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
							 new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
							 j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
							 'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
							 })(window,document,'script','dataLayer','GTM-WTVW5JQ');</script>
							 <!-- End Google Tag Manager -->
			
	</body>
</html>
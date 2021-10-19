<?php
/**
 * The header for Astra Theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Astra
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$number = get_field('number', 'option'); 
$numbers = explode("-", $number);
$phone = $numbers[0] . $numbers[1] . $numbers[2];

?><!DOCTYPE html>
<?php astra_html_before(); ?>
<html <?php language_attributes(); ?>
<head>
	<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-WTVW5JQ');</script>
<!-- End Google Tag Manager -->
<?php astra_head_top(); ?>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="ahrefs-site-verification" content="0ae5425659162d245baa247d00ad2fc9c3dbb5c4aab7eb29d81033b39d8783f5">
<link rel="profile" href="https://gmpg.org/xfn/11">
<!-- <link rel="stylesheet" type="text/css" href="/wp-content/themes/kroeger-marine/dist/	jquery.background-video.css"> -->
<!-- Fonts -->
<link rel="stylesheet" href="https://use.typekit.net/duv0ars.css">
<link rel="stylesheet" href="https://use.typekit.net/duv0ars.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://use.typekit.net/duv0ars.css">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="/wp-content/themes/kroeger-marine/dist/owl.carousel.min.css">
<!-- <link rel="stylesheet" href="/wp-content/themes/kroeger-marine/dist/owl.theme.default.min.css"> -->
<link rel="stylesheet" href="/wp-content/themes/kroeger-marine/dist/tooltipster.bundle.css">
<link rel="stylesheet" href="/wp-content/themes/kroeger-marine/dist/tooltipster-sideTip-shadow.min.css">
<link rel="stylesheet" href="/wp-content/themes/kroeger-marine/dist/animate.css">
<?php wp_head(); ?>
<?php astra_head_bottom(); ?>
</head>

<body <?php astra_schema_body(); ?> <?php body_class(); ?>>

<?php astra_body_top(); ?>
<?php wp_body_open(); ?>
<div
	<?php
	echo astra_attr(
		'site',
		array(
			'id'    => 'page',
			'class' => 'hfeed site',
		)
	);
	?>
>
	<a class="skip-link screen-reader-text" href="#content"><?php echo esc_html( astra_default_strings( 'string-header-skip-link', false ) ); ?></a>

	<?php astra_header_before(); ?>

	<?php astra_header(); ?>

	<div class="custom-cursor" style="opacity: 0;">
	  <span class="cursor--canvas"></span>
	</div>

	<div class="preloader">
		<div class="loader-icon">
			  <?php echo file_get_contents("wp-content/themes/kroeger-marine/img/loader-icon.svg"); ?>
		</div>
	</div>

  <div class="navigation container-fluid">
      <div class="row">
          <div class="col-md-4 col-6 d-flex align-items-center order-2 order-md-1">
						<div class="hamburger">
							<a data-toggle="modal" data-target="#exampleModal">
									<ul>
										<li></li>
										<li></li>
										<li></li>
									</ul>
									<span class="menu-text">menu</span>
							</a>
						</div>
          </div>
          <div class="col-6 col-md-4 order-1 order-md-2">
              <div class="navbar-brand">
                  <a href="/"><img class="navbar-brand-img" src="/wp-content/themes/kroeger-marine/img/kroeger-logo.svg" alt=""></a>
              </div>
          </div>
          <div class="header-btn-wrapper order-md-3 col-4 d-flex align-items-center justify-content-end">
		  		<div class="mt-0">
					<div class="mt-3"><a href="/wp-content/uploads/2020/09/KRO20_Brand-Lookbook.pdf" target="_blank" class="btn-header">View Lookbook</a></div>
				</div>		
		  		<div class="mt-0 ml-3 mr-md-3 header-dock-btn">
					<div class="mb-3 text-center"><a href="tel:<?php echo $phone;?>" class="link-header"><?php echo get_field('number', 'option'); ?></a></div>
					<div class="mb-4"><a href="/dock-builder" class="btn-header">Build Your Dock</a></div>
				</div>
          </div>
      </div>
  </div>

	<?php astra_header_after(); ?>

	<?php astra_content_before(); ?>

	<div id="content" class="site-content">

		<div class="ast-container">

		<?php astra_content_top(); ?>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-158879649-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-158879649-1');
</script>

			<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-N7B6ZMX');</script>
<!-- End Google Tag Manager -->

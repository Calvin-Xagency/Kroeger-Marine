<?php
/*
 Template Name: Our Custom Docks
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
                    <h1 class="title text-center">Our Custom Docks</h1>

                    <div class="vertical-divider"></div>
                    <h3 class="text-center">We offer innovative dock styles, features, and options to suit your lifestyle and budget.</h3>
                </div>
            </div>
        </div>
    </section>
    <section>
      <div class="page-content mt-5 kroeger-docks pr-lg-0">
          <div class="container-fluid justify-content-center p-0 m-0">
              <div class="row">
                  <div class="order-2 order-lg-1 col-lg-4 mt-lg-0 mt-5 px-3 wow fadeInUp" data-wow-delay=".5s">
                        <h5>QUALITY + INTEGRITY + LONGEVITY</h5>
                        <h1>Designed For Living. <br> Built For Life.</h1>
                        <p>Our reputation for service and for crafting world-class products is paramount. Because of this, we invest heavily in our people, our process, and in the finest, high-quality materials available. But we don’t stop there.</p>
                        <p>We go a step farther in blending both form and function to construct the finest waterfront products, such as new docks, <a href="/accessories" target="_blank" rel="noreferrer">dock accessories</a>, and <a href="/erosion-control/" target="_blank" rel="noreferrer">shoreline stabilization</a>. Our beautiful docks are crafted locally in our own facilities with sustainable and low or no-maintenance materials that will last for years to come. There are no products of higher quality, better materials, or finer aesthetics.</p>
                        <p>However, there are many significant differences in structure and quality between a Kroeger Marine dock and docks from other manufacturers. The true, tangible value and integrity of our custom docks and accessories lies in the details. And this is where Kroeger Marine shines above the rest.</p>
                  </div>
                  <div class="order-1 order-lg-2 col-lg-8 pl-lg-5 wow fadeInUp" data-wow-delay=".6s">
                        <div class="pl-lg-4"><img class="img-shadow w-100" src="/wp-content/themes/kroeger-marine/img/deck-product-new.jpg" alt=""></div>
                  </div>
              </div>
          </div>
      </div>
    </section>
    <section id="interactive-dock">
      <div class="page-content interactive-header wow fadeInUp" data-wow-delay=".2s">
        <ul class="list-unstyled">
            <li class="interactive-item">heavy-duty</li>
            <li class="interactive-item">maintenance-free</li>
            <li class="interactive-item">aluminum</li>
            <li class="interactive-item">durable</li>
            <li class="interactive-item">focus on affordability</li>
            <li class="interactive-item">optional upgrades</li>
            <li class="interactive-item">beautiful aesthetic</li>
        </ul>
      </div>
      <?php get_template_part( '/template-parts/dock'); ?>
    </section>
    <section id="dock-features">
        <div class="page-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 wow fadeInUp" data-wow-delay=".2s">
                    <h2 class="text-center">Dock Features</h2>
                    <h3 class="text-center">We offer several feature options with your custom Kroeger Marine dock.</h3>
                    </div>
                </div>
                <div class="vertical-divider my-0 mx-auto"></div>
                <div class="row justify-content-center mt-4 wow fadeInUp" data-wow-delay=".2s">
                    <h3 class="dark-blue">Roof Styles</h3>
                </div>
                <?php if( have_rows('roof_style') ): ?>
                    <?php while( have_rows('roof_style') ): the_row();
                        $image = get_sub_field('roof_image');
                        $title = get_sub_field('roof_title');
                        $desc = get_sub_field('roof_desc');
                        ?>

                        <div class="row justify-content-center mt-5">
                            <div class="col-lg-6 roof-style wow fadeInUp" data-wow-delay=".3s">
                                <div class="p-lg-0 p-4"><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" /></div>
                            </div>
                            <div class="col-lg-6 roof-desc wow fadeInUp" data-wow-delay=".3s">
                                <h2><?php echo $title; ?></h2>
                                <p><?php echo $desc; ?></p>
                            </div>
                        </div>

                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </section>
    <section class="ramp">
        <div class="page-content">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-lg-6 roof-style wow fadeInUp" data-wow-delay=".3s">
                        <div class="p-lg-0 p-4"><img src="https://d5n4b2b9.stackpathcdn.com/wp-content/uploads/2020/02/Flared-Ramp-2.jpg" alt="Boat sitting in a dock on a lake at sunset" /></div>
                    </div>
                    <div class="col-lg-6 ramp-desc wow fadeInUp" data-wow-delay=".3s">
                        <h3>Ramp Style</h3>
                        <h2>Flared Ramp</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="mountain-spacer"></section>
    <section>
        <?php get_template_part( '/template-parts/cta'); ?>
    </section>
  <?php get_footer(); ?>

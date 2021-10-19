<?php
/*
 Template Name: Products
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
                    <h1 class="title text-center">Our Products</h1>

                    <div class="vertical-divider"></div>
                    <h2 class="text-center">Custom Docks</h2>
                    <h3 class="text-center">We offer innovative dock styles, features, and options to suit your lifestyle and budget.</h3>
                </div>
            </div>
        </div>
    </section>
    <section>
      <div class="page-content mt-5 kroeger-docks ">
          <div class="container-fluid justify-content-center">
              <div class="row">
                  <div class="order-2 order-lg-1 col-lg-4 mt-lg-0 mt-5 offset-lg-1 px-3 wow fadeInUp" data-wow-delay=".5s">
                      <h5>QUALITY + INTEGRITY + LONGEVITY</h5>
                      <h1>Designed For Living. <br> Built For Life.</h1>
                      <p>Our reputation for service and for crafting world-class products is paramount. Because of this, we invest heavily in our people, our process, and in the finest, high-quality materials available. But we don’t stop there.</p>
                      <p>We go a step farther in blending both form and function to construct the finest waterfront products, such as new docks, dock accessories, and shoreline stabilization. Our beautiful docks are crafted locally in our own facilities with sustainable and low or no-maintenance materials which will last for years to come. There are no products of higher quality, better materials, or finer aesthetics.</p>
                      <p>However, there are many significant differences in structure and quality between a Kroeger Marine dock and docks from other manufacturers. The true, tangible value and integrity of our custom docks and accessories lies in the details. And this is where Kroeger Marine shines above the rest.</p>
                  </div>
                  <div class="order-1 order-lg-2 col-lg-7 px-5 wow fadeInUp" data-wow-delay=".6s">
                    <div class="p-4"><img class="img-shadow w-100" src="/wp-content/themes/kroeger-marine/img/deck-product-new.jpg" alt=""></div>
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
          <div class="row justify-content-center">
            <?php if( have_rows('roof_style') ): ?>

            	<?php while( have_rows('roof_style') ): the_row();
            		// vars
            		$image = get_sub_field('roof_image');
            		$title = get_sub_field('roof_title');
            		?>

                    <div class="col-lg-4 roof-style wow fadeInUp" data-wow-delay=".3s">
                    <div class="p-lg-0 p-4"><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" /></div>
                    <div class="roof-btn-wrapper">
                      <div class="roof-btn">
                        <a class="nohover" href="javascript:;"><?php echo $title; ?></a>
                      </div>
                    </div>
                  </div>

            	<?php endwhile; ?>

            <?php endif; ?>
          </div>
          <div class="vertical-divider my-0 mx-auto"></div>
          <div class="row justify-content-center my-4 wow fadeInUp" data-wow-delay=".2s">
            <h3 class="dark-blue">Ramp</h3>
          </div>
          <div class="row justify-content-center">
            <?php if( have_rows('ramp') ): ?>

            	<?php while( have_rows('ramp') ): the_row();
            		// vars
            		$image = get_sub_field('ramp_image');
            		$title = get_sub_field('ramp_title');
            		?>

                  <div class="col-lg-4 roof-style wow fadeInUp" data-wow-delay=".3s">
                    <div class="p-lg-0 p-4"><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>"  /></div>
                    <div class="roof-btn-wrapper">
                      <div class="roof-btn">
                        <a class="nohover" href="javascript:;"><?php echo $title; ?></a>
                      </div>
                    </div>
                  </div>

            	<?php endwhile; ?>

            <?php endif; ?>
          </div>
          <div class="vertical-divider my-0 mx-auto"></div>
          <div class="row justify-content-center my-4 wow fadeInUp" data-wow-delay=".2s">
            <h3 class="dark-blue">Boat Lifts</h3>
          </div>
          <div class="row justify-content-center">
            <?php if( have_rows('lift') ): ?>

            	<?php while( have_rows('lift') ): the_row();
            		// vars
            		$lift_image = get_sub_field('lift_image');
            		$title = get_sub_field('lift_title');
            		?>

                  <div class="col-lg-4 roof-style wow fadeInUp" data-wow-delay=".3s">
                    <div class="p-lg-0 p-4"><img src="<?php echo $lift_image['url']; ?>" alt="<?php echo $lift_image['alt'] ?>" /></div>
                    <div class="roof-btn-wrapper">
                      <div class="roof-btn">
                        <a class="nohover" href="javascript:;"><?php echo $title; ?></a>
                      </div>
                    </div>
                  </div>

            	<?php endwhile; ?>

            <?php endif; ?>
          </div>
        </div>
      </div>

    </section>
    <section id="accessories">
      <div class="page-content pt-0">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              <h2 class="text-center">Accessories</h2>
              <h3 class="text-center">Boat dock add-ons, accessories & innovations</h3>
            </div>
            <!-- <div class="col-12">
              <div class="special-box">
                <div class="box-text"><span>Now through May 31, 2020,</span><br> <span>$100 off</span> the retail price of the Easy climb ladder™ & kayak stow & go®</div>
                <a href="/contact" class="btn mt-3">Contact Us</a>
              </div>
            </div> -->
          </div>
          <div class="row justify-content-center">
            <?php if( have_rows('accessory_icon') ): ?>

              <?php while( have_rows('accessory_icon') ): the_row();
                // vars
                $lift_image = get_sub_field('accessory_image');
                $title = get_sub_field('accessory_title');
                ?>

                  <div class="col-lg-2 dock-accessories wow fadeInUp" data-wow-delay=".3s">
                    <div class="p-lg-0 p-4"><img src="<?php echo $lift_image['url']; ?>" alt="<?php echo $lift_image['alt'] ?>" /></div>
                    <div class="acacessories-text">
                      <span><?php echo $title; ?></span>
                    </div>
                  </div>

              <?php endwhile; ?>

            <?php endif; ?>
          </div>

          <!-- Accessories List Items -->
          <div class="row justify-content-center mt-5">
            <div class="col-md-3 accesories-list">
              <ul class="list-unstyled">
              <?php $i = 0; $j = count( get_field('accessories_list') );?>

                <?php if( have_rows('accessories_list') ): ?>

                    <?php while( have_rows('accessories_list') ): the_row();

                      // vars
                      $listItem = get_sub_field('accessories_list_item'); ?>

                    <li><?php echo $listItem; ?></li>
                    <?php if ( ( $i + 1 ) == ceil($j / 2) ) echo '</ul></div><div class="col-md-3 accesories-list"><ul class="list-unstyled list-2">'; ?>

                    <?php $i++;?>

                  <?php endwhile; ?>

                <?php endif; ?>
                  </ul>
            </div>
          </div>
      <!-- End Accesories List -->
      
      <!-- Full accessories CTA -->
          <div class="col-md-12 text-center">
            <a class="btn btn-brown text-center mt-5" href="../accessories">See Our Full Line</a>
          </div>
        </div>
      </div>
    </section>
    <section class="mountain-spacer"></section>
    <section>
      <?php get_template_part( '/template-parts/cta'); ?>
    </section>


    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/tooltipster/3.3.0/js/jquery.tooltipster.min.js"></script> -->

            <?php get_footer(); ?>

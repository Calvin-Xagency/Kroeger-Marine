  <div id="hotspot-image">
        <div class="container-fluid wow fadeInUp" data-wow-delay=".2s">
            <div class="row">
                <div class="image">
                    <img src="https://kroegermarine.com/wp-content/themes/kroeger-marine/img/dock-info.jpg" alt="">
                    <div class="contain">
                      <!-- Interactive Dock Add Items Loop -->
                      <?php if( have_rows('interactive_dock') ): ?>
                        <?php $i = 1;?>
	                      <?php while( have_rows('interactive_dock') ): the_row();

                        		// interactive dock vars
                        		$docktitle = get_sub_field('dock_title');
                            $modaltitle = get_sub_field('dock_title');
                        		$posleft = get_sub_field('pos_left');
                        		$postop = get_sub_field('pos_top');
                            $image = get_sub_field('modal_image');

		                      ?>
                          <!-- Dock Item -->
                          <div class="hotspot tooltips"  data-toggle="modal" data-target="#dock-modal-<?php echo $i; ?>" title="<?php echo $docktitle; ?>" data-left="<?php echo $posleft; ?>" data-top="<?php echo $postop; ?>">
                              <div class="hotspot-outer">
                                  <div class="hotspot-inner"></div>
                              </div>
                          </div>
                          <!-- Dock Item Modal -->
                          <div class="modal fade dockmodal" id="dock-modal-<?php echo $i; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                              <div class="modal-content">
                                <div class="dock-modal modal-body">
                                  <button type="button" class="dock-modal-close close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                  <div class="dock-modal-img">
                                    <img class="test" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />
                                  </div>
                                  <div class="dock-modal-text">
                                    <h2><?php echo $docktitle; ?></h2>
                                    <?php if( have_rows('modal_list_items') ): ?>

	                                      <ul class="modal-list">

                                        	<?php while( have_rows('modal_list_items') ): the_row();

                                        		// vars
                                        		$listItem = get_sub_field('modal_list_item');

                                        		?>
                                        		<li class="modal-list-item">
                                        				<?php echo $listItem; ?>
                                        		</li>

                                        	<?php endwhile; ?>

                                        	</ul>

                                        <?php endif; ?>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <?php $i++; ?>
                        <?php endwhile; ?>

                      <?php endif; ?>
                      <!-- End Loop -->
                  </div>
              </div>
          </div>
      </div>
  </div>

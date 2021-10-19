<!-- Dock Counter START-->
<div id="dock-counter" class="container wow fadeInUp" data-wow-delay=".4s">
    <div class="row text-center">
        <div class="col-md-12">
            <h2><?php the_field('dock_counter_title', 'option'); ?></h2>
            <h3><?php the_field('dock_counter_description', 'option'); ?></h3>
        </div>

        <?php
            $dock_counters = get_field('dock_counters', 'option');
            if ($dock_counters) :
        ?>
            <?php foreach ($dock_counters as $counter) : ?>
                <div class="col-md-4">
                    <h2 class="number"><span class="counter"><?php echo $counter['number']; ?></span><?php echo $counter['after_number']; ?></h2>
                    <h5><?php echo $counter['number_description']; ?></h5>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>
</div>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/jquery.counterup/1.0/jquery.counterup.min.js"></script>
<script type="text/javascript">
    (function($) {
        $(document).ready(function() {
            var $dockCounter = $('#dock-counter');
            var $prevSection = $('#cta').closest('section').prev('section');
            $prevSection.find('div').first().append($dockCounter);
            $('.counter').counterUp({
              delay: 10,
              time: 2000
            });
        });
    })(jQuery);
</script>
<!-- Dock Counter END -->

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

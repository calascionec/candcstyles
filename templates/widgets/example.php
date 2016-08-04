<?php


    $side_one_copy = "Twenty years of expertise. One incredible gem.";
    $side_one_cta = "";
    $side_one_cta_link = "";
    $side_one_size = 2;
    $side_two_copy = 'Revolutionary Brilliance. Colorless Beuty.';
    $side_two_cta = 'Shop Forever One';
    $side_two_cta_link = 'www.google.com';
    $side_two_size = 1;
    $side_one_image = '/assets/images/two_thirds.jpg';
    $side_two_image = '/assets/images/logo_rings.png';
    $side_two_ring = '/assets/images/ring.png';


 ?>


<section class="example-widget home-page-widget">

    <div class="side side-one" style='
    <?php if ( $side_one_size ) { echo "flex-grow: " . $side_one_size . ";";} ?>
    <?php if ( $side_one_image ) { echo "background-image: url(" . $side_one_image . ");";}?>'>

        <div class="side-one-padding-wrapper">

            <?php if ( $side_one_copy ): ?>
                <h2 class="side-one-copy cc-h2">
                    <?php echo $side_one_copy; ?>
                </h2>
            <?php endif; ?>

            <?php if ($side_one_cta && $side_one_cta_link ): ?>
                <a class="button-cta" href="<?php echo $side_one_cta_link; ?>"><?php echo $side_one_cta ?></a>
            <?php endif; ?>

        </div><!--side-one-padding-wrapper-->

    </div><!-- side-one -->

    <div class=" side side-two" style='
    <?php if ( $side_two_size ) { echo "flex-grow: " . $side_two_size . ";";} ?>
    <?php if ( $side_two_image ) { echo "background-image: url(" . $side_two_image . ");";}?>'>

        <div class="side-two-padding-wrapper">

            <?php if ( $side_two_ring ): ?>
                <img src="<?php echo $side_two_ring ?>" alt="Ring" />
            <?php endif; ?>

            <?php if ( $side_two_copy ): ?>
                <p class="side-two-copy cc-h6">
                    <?php echo $side_two_copy; ?>
                </p>
            <?php endif; ?>

            <?php if ($side_two_cta && $side_two_cta_link ): ?>
                <a class="button-cta" href="<?php echo $side_two_cta_link; ?>"><?php echo $side_two_cta ?></a>
            <?php endif; ?>

        </div><!--side-two-padding-wrapper-->

    </div><!-- side-two -->

</section><!-- example-widget -->

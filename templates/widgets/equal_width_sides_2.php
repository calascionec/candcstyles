<?php


    $side_one_image = '/assets/images/smile.jpg';
    $side_one_copy_text = 'Brilliant.';
    $side_one_cta_text = 'Shop Earrings';
    $side_one_cta_link = 'www.google.com';
    $side_two_image = '/assets/images/plant.jpg';
    $side_two_copy_text = 'Made with care<br />for those who choose with care.';
    $side_two_cta_text = 'Sustainability >';
    $side_two_cta_link = 'www.google.com';


 ?>


<section class="equal-width-sides-widget-two home-page-widget">

    <div class="side side-one" style='
    <?php if ( $side_one_image ) { echo "background-image: url(" . $side_one_image . ");";}?>'>

        <div class="side-one-padding-wrapper">

            <?php if ( $side_one_copy_text ): ?>
                <h2 class="cc-h1 side-one-heading">
                    <?php echo $side_one_copy_text; ?>
                </h2>
            <?php endif; ?>

            <?php if ($side_one_cta_text && $side_one_cta_link ): ?>
                <a class="button-cta inverse" href="<?php echo $side_one_cta_link; ?>"><?php echo $side_one_cta_text; ?></a>
            <?php endif; ?>

        </div><!-- side-one-padding-wrapper-->

    </div><!-- side-one -->

    <div class="side side-two" style='
    <?php if ( $side_two_image ) { echo "background-image: url(" . $side_two_image . ");";}?>'>

        <div class="centered-text">

            <?php if ( $side_two_copy_text ): ?>
                <h2 class="copy-text cc-h6">
                    <?php echo $side_two_copy_text; ?>
                </h2>
            <?php endif; ?>

            <?php if ($side_two_cta_text && $side_two_cta_link ): ?>
                <a class="link-cta" href="<?php echo $side_two_cta_link; ?>"><?php echo $side_two_cta_text; ?></a>
            <?php endif; ?>

        </div><!-- centered-text -->

    </div><!-- side-two -->

</section><!-- equal-width-sides-widget-two -->

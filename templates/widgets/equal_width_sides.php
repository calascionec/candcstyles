<?php

    $side_one_image = '/assets/images/hand.jpg' ;
    $side_two_image = '/assets/images/measure.jpg' ;
    $cta_text = 'Quality & Craftsmanship >';
    $cta_link = 'www.google.com';
    $copy_text = 'Grown, cut,<br />polished and set.<br/>Brilliantly.'


 ?>


<section class="equal-width-sides-widget home-page-widget">

    <div class="side side-one" style='
    <?php if ( $side_one_image ) { echo "background-image: url(" . $side_one_image . ");";}?>'>

    </div><!-- side-one -->

    <div class="side side-two" style='
    <?php if ( $side_two_image ) { echo "background-image: url(" . $side_two_image . ");";}?>'>

    </div><!-- side-two -->

    <div class="centered-text">

        <?php if ( $copy_text ): ?>
            <h2 class="copy-text cc-h3">
                <?php echo $copy_text; ?>
            </h2>
        <?php endif; ?>

        <?php if ($cta_text && $cta_link ): ?>
            <a class="link-cta" href="<?php echo $cta_link; ?>"><?php echo $cta_text; ?></a>
        <?php endif; ?>

    </div><!-- centered-text -->

</section><!-- equal-width-sides-widget -->

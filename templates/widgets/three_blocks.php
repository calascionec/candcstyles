<?php


    $block_one_image = '/assets/images/leaves.jpg';
    $block_one_alt_text = '';
    $block_one_ring = '/assets/images/ring_2.png';
    $block_two_copy = 'The person you choose says everything about who you are. Your ring should too.';
    $block_two_cta = 'SHop engagement Rings';
    $block_two_cta_link = 'www.google.com';
    $block_three_image = '/assets/images/block3.jpg';


 ?>


<section class="three-blocks-widget home-page-widget">

    <div class="widget-block block-one" style='
    <?php if ( $block_one_image ) { echo "background-image: url(" . $block_one_image . ");";}?>'>

        <img src="<?php echo $block_one_ring; ?>" alt="<?php echo $block_one_alt_text; ?>" />

    </div><!-- block-one -->

    <div class="widget-block block-two">

        <div class="block-two-padding-wrapper">

            <?php if ( $block_two_copy ): ?>
                <h2 class="block-two-copy cc-h3">
                    <?php echo $block_two_copy; ?>
                </h2>
            <?php endif; ?>

            <?php if ($block_two_cta && $block_two_cta_link ): ?>
                <a class="button-cta" href="<?php echo $block_two_cta_link; ?>"><?php echo $block_two_cta ?></a>
            <?php endif; ?>

        </div><!--block-two-padding-wrapper-->

    </div><!-- block-two -->

    <div class="widget-block block-three" style='
    <?php if ( $block_three_image ) { echo "background-image: url(" . $block_three_image . ");";}?>'>

    </div><!-- block-three -->

</section><!-- three-blocks-widget -->

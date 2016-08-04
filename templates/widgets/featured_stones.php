<?php

    $widget_heading = 'A cut above the rest. Shop jewelry by shape';
    $background_image = '/assets/images/background_rings.png';
    $image_one = '/assets/images/round.png';
    $link_text_one = 'Round >';
    $link_url_one = 'www.google.com';
    $image_two = '/assets/images/square.png';
    $link_text_two = 'Square >';
    $link_url_two = 'www.google.com';
    $image_three = '/assets/images/cushion.png';
    $link_text_three = 'Cusion >';
    $link_url_three = 'www.google.com';
    $image_four = '/assets/images/oval.png';
    $link_text_four = 'Oval >';
    $link_url_four = 'www.google.com';
    $image_five = '/assets/images/asscher.png';
    $link_text_five = 'Asscher >';
    $link_url_five = 'www.google.com';

$featured_stones = array(
    [$image_one, $image_one_alt, $link_text_one, $link_url_one],
    [$image_two, $image_two_alt, $link_text_two, $link_url_two],
    [$image_three, $image_three_alt, $link_text_three, $link_url_three],
    [$image_four, $image_four_alt, $link_text_four, $link_url_four],
    [$image_five, $image_five_alt, $link_text_five, $link_url_five],
    );
 ?>
<section class="featured-stones-widget" style='
<?php if ( $background_image ) { echo "background-image: url(" . $background_image . ");";}?>'>

    <div class="featured-stones-padding-wrapper">

        <?php if ( $widget_heading ): ?>
            <h2 class="widget-heading cc-h3"><?php echo $widget_heading; ?></h2>
        <?php endif; ?>

        <div class="featured-stones">

            <?php foreach ( $featured_stones as $stone ): ?>

                <div class="featured-stone">

                    <img class="stone-image" src="<?php echo $stone[0]; ?>" alt="<?php echo $stone[1]; ?>" />
                    <a class="link-cta" href="<?php echo $stone[3]; ?>"><?php echo $stone[2]; ?></a>

                </div><!--featured-stone-->

            <?php endforeach; ?>

        </div><!--featured-stones-->

    </div><!--featured-stones-padding-wrapper-->

</section><!--featured-stones-widget-->

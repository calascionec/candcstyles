<!DOCTYPE html>
<html>
    <head>
        <?php include('templates/head.php'); ?>
    </head>
    <body>
        <?php include('templates/blog-header.php'); ?>

        <div class="cc-container">
            <?php include('templates/blog/blog-post-preview-large.php'); ?>

            <div class="single-post-container">

                <div class="connect-container">
                    <img src="assets/images/blog/connect.svg" alt="" />
                </div>
                <div class="content">
                    <p class="intro-text">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur in tortor nec enim blandit gravida vel a nisl. Morbi sed nibh lectus. Etiam blandit eu nunc ut gravida. Ut blandit id erat id blandit.
                    </p>

                    <figure>
                        <img class="img-responsive" src="assets/images/blog/single-post.jpg" alt="" />
                        <figcaption>
                            Moissanite &amp; Moonstone - <a href="#">Luxuring</a>
                        </figcaption>
                    </figure>

                    <p class="single-post-copy">
                        This handmade ring from Luxuring is interstellar, pairing a magical rainbow moonstone next to a sparkling moissanite to orbit its bezel setting. The double shank eliminates any need for a wedding band, but feel free to add one for that ever-so-popular three-banded look. Pick you favorite in white, yellow, or rose gold.
                    </p>

                    <figure>
                        <img class="img-responsive" src="assets/images/blog/single-post.jpg" alt="" />
                        <figcaption>
                            Moissanite &amp; Moonstone - <a href="#">Luxuring</a>
                        </figcaption>
                    </figure>

                    <p>
                        This handmade ring from Luxuring is interstellar, pairing a magical rainbow moonstone next to a sparkling moissanite to orbit its bezel setting. The double shank eliminates any need for a wedding band, but feel free to add one for that ever-so-popular three-banded look. Pick you favorite in white, yellow, or rose gold.
                    </p>

                </div><!--content-->

                <div class="social-sidebar">
                    <?php include('templates/blog/social-feed.php') ?>
                </div><!--social-sidebar-->

            </div><!--single-post-container-->

            <div class="comments-section">

            </div>

        </div><!--cc-container-->

        <?php include('templates/blog/most-recent.php'); ?>

        <?php include('templates/footer-top.php'); ?>
        <?php include('templates/footer-nav.php'); ?>
        <?php include('templates/footer-bottom.php'); ?>
    </body>
</html>

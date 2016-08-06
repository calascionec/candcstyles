<!DOCTYPE html>
<html>
    <head>
        <?php include('templates/head.php'); ?>
    </head>
    <body>

        <?php include('templates/blog-header.php'); ?>

        <div class="cc-container">

            <?php include('templates/blog/blog-post-preview-large.php'); ?>

            <section class="featured-blog-post-previews post-preview-container">

                <?php include('templates/blog/blog-post-preview.php'); ?>
                <?php include('templates/blog/blog-post-preview.php'); ?>
                <?php include('templates/blog/blog-post-preview.php'); ?>

            </section><!--featured-blog-posts-->

        </div><!--cc-container-->

        <?php include('templates/blog/blog-instagram-feed.php'); ?>

        <div class="cc-container">

            <section class="post-preview-container recent-posts">

                <?php include('templates/blog/blog-post-preview.php'); ?>
                <?php include('templates/blog/blog-post-preview.php'); ?>
                <?php include('templates/blog/blog-post-preview.php'); ?>
                <?php include('templates/blog/blog-post-preview.php'); ?>
                <?php include('templates/blog/blog-post-preview.php'); ?>
                <?php include('templates/blog/blog-post-preview.php'); ?>

            </section><!--recent-posts-->
        </div><!--cc-container-->



        <?php include('templates/footer-top.php'); ?>
        <?php include('templates/footer-nav.php'); ?>
        <?php include('templates/footer-bottom.php'); ?>
    </body>
</html>

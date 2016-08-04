<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
        <link  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css" />
        <link  href="https://fonts.googleapis.com/css?family=Alegreya|Roboto:500,300,400|Inconsolata:400,700|Buenard:400,700" />
        <link rel="stylesheet" href="/build/style.css" media="screen" title="no title" charset="utf-8">
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.js"></script>
    </head>
    <body>
        <?php include('templates/footer-top.php'); ?>
        <?php include('templates/footer-nav.php'); ?>
        <?php include('templates/footer-bottom.php'); ?>

        <script>

            $('document').ready(function() {
                $('.footer-nav-title').on('click', function() {
                    nextElement = $(this).next();
                    if (!nextElement.hasClass('open')) {
                        nextElement.addClass('open');
                    } else if (nextElement.hasClass('open')) {
                        nextElement.removeClass('open');
                    }
                })

            })


        </script>
    </body>
</html>

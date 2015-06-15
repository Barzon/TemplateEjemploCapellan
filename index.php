<?php
error_reporting(E_ALL && ~E_NOTICE);
include('includes/SystemUtil.php'); //clase de funcionalidades
include('includes/menu.php'); //definiciones de menu
?>
<!DOCTYPE html>
<html>
    <head>
        <script src="scripts/jquery/jquery-2.0.3.min.js" type="text/javascript"></script>
        <link href="css/bootstrap/bootstrap-3.3.4-dist/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="css/bootstrap/bootstrap-3.3.4-dist/js/bootstrap.min.js" type="text/javascript"></script>
        <link href="css/style.css" rel="stylesheet" type="text/css"/>
        <link href="css/dropdown.css" rel="stylesheet" type="text/css"/>		
        <link href="css/font-awesome/font-awesome-4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>        
        <link href="css/style-bootstrap.css" rel="stylesheet" type="text/css"/>
        <title>Titulo</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script>
            (function ($) {
                $(document).ready(function () {
                    $('ul.dropdown-menu [data-toggle=dropdown]').on('click', function (event) {
                        event.preventDefault();
                        event.stopPropagation();
                        $(this).parent().siblings().removeClass('open');
                        $(this).parent().toggleClass('open');
                    });
                });
            })(jQuery);
        </script>		
    </head>
    <body>
        <div class="container-fluid">
            <?php include('html/header.php'); ?>
            <?php include('html/content/slider.php'); ?>
            <main><!-- contenedor main -->
                <?php include('html/content/inicio.php'); ?>         
            </main><!-- fin contenedor principal/main -->
            <?php include('html/footer.php'); ?>
        </div>
    </body>
</html>

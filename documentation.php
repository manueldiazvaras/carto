<!DOCTYPE HTML>
<html lang="es-es">

<head>
<title>Documentation - Manuel Díaz</title>
<!-- INSERT LINKS -->
<?php 
    require_once ('/home/mdv31226572/public_html/carto/include/links.html');
?>

</head>
    <body>      
        <!-- MOBILE MENU -->
        <?php 
            require_once ('/home/mdv31226572/public_html/carto/include/mobile-menu.php');
        ?>

            <!-- NAV MENU -->
            <?php 
                require_once ('/home/mdv31226572/public_html/carto/include/header.php');
            ?>


        <!-- SUBMENU -->
        <?php 
            require_once ('/home/mdv31226572/public_html/carto/include/submenu.php');
        ?>

        <section>
            <!-- CONTENT WRAPPER -->
            <div class="uk-grid main-wrapper">

                <!-- SECTION 1 || SIDE BAR LEFT -->
                <div class="uk-width-1-4 section-1">

                    <!-- INSERT CONTENT: SECTION 1-->
                    <?php 
                        require_once ('/home/mdv31226572/public_html/carto/include/section-1.php');
                    ?>

                </div>

                <!-- SECTION 2 || MAIN CONTENT -->
                <div class="uk-width-2-4 section-2">

                    <?php

                        // Leemos url
                        $url= $_SERVER["REQUEST_URI"];
                        // echo htmlentities($url) . '<br />';
                        $id_page = substr($url, -5, 2);
                        $uri = $id_page;


                        // INSERT CONTENT: SECTION 2
                        if ($uri == "n.") {
                            $uri = "00";

                            require_once ('/home/mdv31226572/public_html/carto/include/documentation/documentation-' . $uri . '.php'); 
                        }
                        else {
                            require_once ('/home/mdv31226572/public_html/carto/include/documentation/documentation-' . $uri . '.php');
                        }
                    ?>

                </div>

                <!-- SECTION 3 || SIDE BAR RIGHT -->
                <div class="uk-width-1-4 section-3">

                    <!-- INSERT CONTENT: SECTION 3 -->
                    <?php 
                        require_once ('/home/mdv31226572/public_html/carto/include/section-3.php');
                    ?>

                </div>
            </div>
        </section>
    </body>
</html>







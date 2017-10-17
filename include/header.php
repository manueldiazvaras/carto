<!-- OFFCANVAS MAIN MENU -->
<div id="offcanvas-3" class="uk-offcanvas">

    <div class="uk-offcanvas-bar uk-offcanvas-bar-flip">

        <ul class="uk-nav uk-nav-offcanvas uk-nav-parent-icon" data-uk-nav>
            <li class="uk-nav-header uk-text-center"><a class="margin-logo" href="/carto/index.php"><img src="http://manueldiaz.com/carto/images/blanco.svg" width="80px"/></a></li>

            <li class="uk-parent">
                <a class="raleway trescientos small" href="#"><i class="uk-icon uk-icon-bookmark-o icon-margin-right carto-green"></i> Documentation</a>
                    <ul class="raleway cuatrocientos clean-list list-height x-small grey-text margin-li-section-3">


                        <!-- INSERT LIST MENU SECTION - 1 -->
                        <?php 
                            include ('/home/mdv31226572/public_html/carto/include/menu-section-1.php');
                        ?>

                    </ul>
            </li>

            <li class="uk-parent">
                <a class="raleway trescientos small" href="#"><i class="uk-icon uk-icon-file-o icon-margin-right carto-green"></i> Related content</a>
                    <ul class="raleway cuatrocientos clean-list list-height x-small grey-text margin-li-section-3">

                        <li id='<?php $id_page = "20"; ?>' class=""><a href="documentation.php?id='<?php echo $id_page; ?>' ">Related content 1</a></li>
                        <li id='<?php $id_page = "21"; ?>' class=""><a href="documentation.php?id='<?php echo $id_page; ?>' ">Related content 2</a></li>
                        <li id='<?php $id_page = "22"; ?>' class=""><a href="documentation.php?id='<?php echo $id_page; ?>' ">Related content 3</a></li>
                        <li id='<?php $id_page = "23"; ?>' class=""><a href="documentation.php?id='<?php echo $id_page; ?>' ">Related content 4</a></li>
                        <li id='<?php $id_page = "24"; ?>' class=""><a href="documentation.php?id='<?php echo $id_page; ?>' ">Related content 5</a></li>
                        <li id='<?php $id_page = "25"; ?>' class=""><a href="documentation.php?id='<?php echo $id_page; ?>' ">Related content 6</a></li>
                        <li id='<?php $id_page = "26"; ?>' class=""><a href="documentation.php?id='<?php echo $id_page; ?>' ">Related content 7</a></li>
                        <li id='<?php $id_page = "27"; ?>' class=""><a href="documentation.php?id='<?php echo $id_page; ?>' ">Related content 8</a></li>
                        <li id='<?php $id_page = "28"; ?>' class=""><a href="documentation.php?id='<?php echo $id_page; ?>' ">Related content 9</a></li>

                    </ul>
            </li>

        </ul>
    </div>
</div>

<!-- MAIN MENU HEADER -->
<nav>
    <ul class="montserrat x-small md-fixed-menu menulist">
        <li><a href="http://manueldiaz.com/carto/index.php"><img class="image-margin-top" src="http://manueldiaz.com/carto/images/logo.svg" width="125px"/></a></li>
        <li class="menu-margin">Builder</li>
        <li class="menu-margin">Engine</li>
        <li class="menu-margin">Solutions</li>
        <li class="menu-margin">Blog</li>
    </ul>
</nav>

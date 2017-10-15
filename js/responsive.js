<!-- LEEMOS ID_PAGE DE URL -->
<?php

    // Leemos url
    $url= $_SERVER["REQUEST_URI"];
    // echo htmlentities($url) . '<br />';
    // Leemos la id de la url
    $id_page = substr($url, -4, 1);
    //echo $rest;
?>


<!-- MENU CATEGORY 1 -->
<h2 class="raleway quinientos small"><i class="uk-icon uk-icon-bookmark-o icon-margin-right carto-green"></i>DOCUMENTATION</h2>

    <hr class="margin-line"/>

<ul class="raleway cuatrocientos clean-list full-height list-height x-small grey-text">

    <li id='<?php $id_page = "1"; ?>' class=""><a href="documentation.php?id='<?php echo $id_page; ?>' ">Documentation 1</a></li>
    <li id='<?php $id_page = "2"; ?>' class=""><a href="documentation.php?id='<?php echo $id_page; ?>' ">Documentation 2</a></li>
    <li id='<?php $id_page = "3"; ?>' class=""><a href="documentation.php?id='<?php echo $id_page; ?>' ">Documentation 3</a></li>
    <li id='<?php $id_page = "4"; ?>' class=""><a href="documentation.php?id='<?php echo $id_page; ?>' ">Documentation 4</a></li>
    <li id='<?php $id_page = "5"; ?>' class=""><a href="documentation.php?id='<?php echo $id_page; ?>' ">Documentation 5</a></li>
    <li id='<?php $id_page = "6"; ?>' class=""><a href="documentation.php?id='<?php echo $id_page; ?>' ">Documentation 6</a></li>
    <li id='<?php $id_page = "7"; ?>' class=""><a href="documentation.php?id='<?php echo $id_page; ?>' ">Documentation 7</a></li>
    <li id='<?php $id_page = "8"; ?>' class=""><a href="documentation.php?id='<?php echo $id_page; ?>' ">Documentation 8</a></li>
    <li id='<?php $id_page = "9"; ?>' class=""><a href="documentation.php?id='<?php echo $id_page; ?>' ">Documentation 9</a></li>

</ul>
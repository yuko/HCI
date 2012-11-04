<?php
    include 'Nav.php';
    include 'Page.php';

    // Navbars
    $nav_add = new Nav(0);
    $nav_view = new Nav(1);
    $nav_settings = new Nav(2);



    // Add 
    $page_add = new Page('add', 'Add', $nav_add); 
    $page_add->render();



    /*
    $nav = new Nav();
    $nav->render();

    echo '-----<br>';
    $nav2 = new Nav(2);
    $nav2->render();
    */


    /*
    printHeader();

    function printHeader() {
        echo '';
    }
     */


?>

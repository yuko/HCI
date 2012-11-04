<?php
    include 'Nav.php';
    include 'Page.php';

    // Navbars
    $nav_add = new Nav(0);
    $nav_view = new Nav(1);
    $nav_settings = new Nav(2);



    $page_add = new Page('add', 'Add', $nav_add); 
    $page_view = new Page('view', 'View', $nav_view); 
    $page_settings = new Page('settings', 'Settings', $nav_settings); 


    ////////// render page
    echo '<html>';
    printHeader();
    echo '<body>';

    $page_add->render();
    $page_view->render();
    $page_settings->render();

    echo '</body>';
    echo '</html>';

    /*
    $nav = new Nav();
    $nav->render();

    echo '-----<br>';
    $nav2 = new Nav(2);
    $nav2->render();
    */



    function printHeader() {
        echo '<head>';
        echo '<meta charset="utf-8">';
        echo '<meta name="viewport" content="width=device-width, initial-scale=1">';
        echo '<title>Money track</title>'; 
        echo '<link rel="stylesheet" type="text/css" href="http://dl.dropbox.com/u/7834011/HCI/main.css" />';
        echo '<link rel="stylesheet" href="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.css" />';
        echo '<script src="http://code.jquery.com/jquery-1.8.2.min.js"></script>';
        echo '<script src="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.js"></script>';
        echo '</head>'; 
    }

?>

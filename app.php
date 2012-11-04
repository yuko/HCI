<?php
    include 'Nav.php';
    include 'Page.php';

    // Navbars
    $nav_add = new Nav(0);
    $nav_view = new Nav(1);
    $nav_settings = new Nav(2);

    $pages = array();
    $pages['add'] = new Page('add', 'Add', $nav_add); 
    $pages['add-date'] = new Page('add-date', 'Add date', $nav_add); 
    $pages['add-card'] = new Page('add-card', 'Add card', $nav_add); 
    $pages['add-category'] = new Page('add-category', 'Add category', $nav_add); 
    $pages['view'] = new Page('view', 'View', $nav_view); 
    $pages['view-cards'] = new Page('view-cards', 'View cards', $nav_view); 
    $pages['view-categories'] = new Page('view-categories', 'View categories', $nav_view); 
    $pages['settings'] = new Page('settings', 'Settings', $nav_settings); 

    $pages['view']->setHeader('View');
    $pages['view']->setContent(
        ''
    );

    $pages['view-categories']->setHeader('View');
    $pages['view-categories']->setSubheader('Balance by Categories');
    $pages['view-categories']->setContent(
        ''
    );

    ////////// render page
    echo '<html>';
    printHeader();
    echo '<body>';

    foreach ($pages as $key => $value) {
        $value->render();
    }

    echo '</body>';
    echo '</html>';

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

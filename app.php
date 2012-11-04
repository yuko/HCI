<?php
    include 'Module.php';
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
    $pages['settings-cards'] = new Page('settings-cards', 'Settings > Cards', $nav_settings); 
    $pages['settings-cards-add'] = new Page('settings-cards-add', 'Settings > Cards > Add', $nav_settings); 
    $pages['settings-categories'] = new Page('settings-categories', 'Settings > Categories', $nav_settings); 
    $pages['settings-categories-add'] = new Page('settings-categories-add', 'Settings > Categories > Add', $nav_settings); 
    $pages['settings-preferences'] = new Page('settings-preferences', 'Settings > Preferences', $nav_settings); 


    $pages['add']->setHeader('Add');
    $pages['add']->setSubheader('How much did you spend? (step 1 of 4)');

    $pages['add-date']->setHeader('Add');
    $pages['add-date']->setSubheader('When did you buy? (Step 2 of 4)');
    $pages['add-card']->setHeader('Add');
    $pages['add-card']->setSubheader('Which card/bank account did you use? (step 3 of 4)');
    $pages['add-category']->setHeader('Add');
    $pages['add-category']->setSubheader('When category does the purchase fall into? (step 4 of 4)');

    $pages['view']->setHeader('View');
    $pages['view']->setContent(
        '<div data-role="view_btn">
        <a href="#view-cards" data-role="button" data-icon="arrow-r" data-iconpos="right">Balance by Cards/Bank Accounts</a>
        <a href="#view-categories" data-role="button" data-icon="arrow-r" data-iconpos="right">Balance by Categories</a>
        </div>'
    );


    $pages['view-cards']->setHeader('View');
    $pages['view-cards']->setSubheader('Balance by Cards');
    $pages['view-cards']-addModule(new Button('#', 'true', 'back', 'Back'));

    $pages['view-categories']->setHeader('View');
    $pages['view-categories']->setSubheader('Balance by Categories');
    $pages['view-categories']->setContent(
        ''
    );


    $pages['settings']->setHeader('Settings');
    $pages['settings']->setContent(
        '<div data-role="settings_btn">
        <a href="#settings-cards" data-role="button" data-icon="arrow-r" data-iconpos="right">Cards/Bank Accounts</a>
        <a href="#settings-categories" data-role="button" data-icon="arrow-r" data-iconpos="right">Categories</a>
        <a href="#settings-preferences" data-role="button" data-icon="arrow-r" data-iconpos="right">Preferences</a>
        </div>');

    $pages['settings-cards']->setHeader('Settings');
    $pages['settings-cards']->setSubheader('Cards/Bank Accounts');

    $pages['settings-cards-add']->setHeader('Settings');
    $pages['settings-cards-add']->setSubheader('Cards/Bank Accounts > Add New');

    $pages['settings-categories']->setHeader('Settings');
    $pages['settings-categories']->setSubheader('Categories');

    $pages['settings-categories']->setHeader('Settings');
    $pages['settings-categories-add']->setSubheader('Categories > Add');

    $pages['settings-preferences']->setHeader('Settings');
    $pages['settings-preferences']->setSubheader('Preferences');




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

<?php
    include 'Controller.php';
    include 'Entity.php';
    include 'PaymentAccount.php';
    include 'Category.php';
    include 'Module.php';
    include 'Nav.php';
    include 'Page.php';
    include 'Button.php';
    include 'Form.php';
    include 'FormInput.php';
    include 'FormInputSinglePageAdd.php';
    include 'Dropdown.php';
    include 'Table.php';

    // init controller
    $controller = new Controller();
    $controller->setCategories();

    // init cards
    $cards = array();
    $cards[] = new PaymentAccount('12345678', 'Visa #1234');
    $cards[] = new PaymentAccount('23456789', 'Amex #2345');
    $cards[] = new PaymentAccount('34567890', 'Citibank #3456');
    $cards[] = new PaymentAccount('00000000', 'Cash');

    // init categories
    $categories = array();
    $categories[] = new Category(0, 'Utilities');
    $categories[] = new Category(1, 'Transportation');
    $categories[] = new Category(2, 'Groceries');
    $categories[] = new Category(3, 'Entertainment');
    $categories[] = new Category(4, 'Eating out');
    $categories[] = new Category(5, 'Miscellaneous');

    // "Back" button
    $button_back = new Button('#', 'true', 'back', 'Back');
 
    // Navbars
    $nav_add = new Nav(0);
    $nav_view = new Nav(1);
    $nav_settings = new Nav(2);

    // init pages
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
    $pages['settings-cards-edit'] = new Page('settings-cards-edit', 'Settings > Cards > Add', $nav_settings); 
    $pages['settings-categories'] = new Page('settings-categories', 'Settings > Categories', $nav_settings); 
    $pages['settings-categories-add'] = new Page('settings-categories-add', 'Settings > Categories > Add', $nav_settings); 
    $pages['settings-categories-edit'] = new Page('settings-categories-edit', 'Settings > Categories > Edit', $nav_settings); 
    $pages['settings-preferences'] = new Page('settings-preferences', 'Settings > Preferences', $nav_settings); 

    // set up pages
    $pages['add']->setHeader('Add');
    $pages['add']->setSubheader('How much did you spend? (step 1 of 4)');
    $pages['add']->addModule(new FormInput('app.php#add-date', 'Next', array(
                array(
                    'selectId' => 'add-amount', 
                    'labelText' => null, 
                    'inputType' => 'text',
                    'placeHolder' => '00.00',
                ))
            ));


/*
<form action="#" method="post">

<div data-role="fieldcontain">
<label for="title">Title:</label>
<input type="text" name="title" id="title" placeholder="diashow title"value="" />
</div>

<div data-role="fieldcontain">
<label for="timeout">Timeout:</label>
<input type="range" name="timeout" id="timeout" value="0" min="0" max="150" step="10" data-highlight="true"  />
</div>

<button type="submit" name="submit" value="submit" data-theme="b">Submit</button>
</form>       
 */
//<a href="#add-date" data-role="button" data-inline="true">Next</a>


    $pages['add-date']->setHeader('Add');
    $pages['add-date']->setSubheader('When did you buy? (Step 2 of 4)');
    $pages['add-date']->addModule(new FormInput('app.php#add-card', 'Next', array(
                array(
                    'selectId' => 'add-date', 
                    'labelText' => null, 
                    'inputType' => 'date',
                    'placeHolder' => null,
                )
            )
        ));
    $pages['add-date']->addModule($button_back);
    /********* works. testing Form class
    $pages['add-date']->setContent('
<form action="app.php#add-card" method="get" data-ajax="false">

<div data-role="fieldcontain" class="ui-field-contain ui-body ui-br">
<label for="date" class="ui-input-text">Date:</label>
<input type="date" name="date" id="date" value="" class="ui-input-text ui-body-c ui-corner-all ui-shadow-inset"/>
</div>

<button type="submit" name="submit" value="submit" data-inline="true">Next</button>
</form>
'
);
****************/

    $pages['add-card']->setHeader('Add');
    $pages['add-card']->setSubheader('Which card/bank account did you use? (step 3 of 4)'); 
    $pages['add-card']->addModule(
        new Dropdown('app.php#add-category', 'Next', 0, true, 'add-card', null, $cards, array(
            array(
                'selectId' => 'add-card-id', 
                'labelText' => null, 
                'inputType' => 'text',
                'placeHolder' => 'Or Add New Card? Enter card number (0000-0000)',
            ),
            array(
                'selectId' => 'add-card-name', 
                'labelText' => null, 
                'inputType' => 'text',
                'placeHolder' => "Name it so it's easy to remember later",
            )
        )    
    ));
    $pages['add-card']->addModule($button_back);
    //$pages['add-card']->setContent('');
/*        
<form action="app.php#add-category" method="get" data-ajax="false">

<label for="select-choice-0" class="select">Select Card/Bank acct:</label>
<select data-inline="true" name="select-choice-0" id="select-choice-0">
<option>Visa #1234</option>
<option>Amex #5678</option>
<option>Citibank #1234</option>
</select>
<label for="add-card-name">Or add new card:</label>
<input type="text" name="add-card-name" id="add-card-name" value="" placeholder="New Card Name"/>

<button type="submit" name="submit" value="submit" data-inline="true">Next</button>
</form>
 */

    $pages['add-category']->setHeader('Add');
    $pages['add-category']->setSubheader('When category does the purchase fall into? (step 4 of 4)');
    $pages['add-category']->addModule(
        new Dropdown('#', "I'm ready to add", 0, true, 'add-category', null, $categories, array(
            array(
                'selectId' => 'add-category-name', 
                'labelText' => null, 
                'inputType' => 'text',
                'placeHolder' => 'Or Add New Category',
            )
        )
    ));
    $pages['add-category']->addModule($button_back);

    $pages['view']->setHeader('View');
    $pages['view']->addModule(new Button('#view-cards', null, null, 'Balance by Cards/Bank Accounts', 'arrow-r', 'right'));
    $pages['view']->addModule(new Button('#view-categories', null, null, 'Balance by Categories', 'arrow-r', 'right'));

    $pages['view-cards']->setHeader('View');
    $pages['view-cards']->setSubheader('Balance by Cards');
    $pages['view-cards']->addModule($button_back);

    $pages['view-categories']->setHeader('View');
    $pages['view-categories']->setSubheader('Balance by Categories');
    $pages['view-categories']->addModule($button_back);

    $pages['settings']->setHeader('Settings'); 
    $pages['settings']->addModule(new Button('#settings-cards', null, null, 'Cards/Bank Accounts', 'arrow-r', 'right'));
    $pages['settings']->addModule(new Button('#settings-categories', null, null, 'Categories', 'arrow-r', 'right'));
    $pages['settings']->addModule(new Button('#settings-preferences', null, null, 'Preferences', 'arrow-r', 'right'));

    $pages['settings-cards']->setHeader('Settings');
    $pages['settings-cards']->setSubheader('Cards/Bank Accounts');
    $pages['settings-cards']->addModule(new Table($cards, '#settings-cards-edit'));
    $pages['settings-cards']->addModule(new Button('#settings-cards-add', 'true', null, 'Add New'));
    $pages['settings-cards']->addModule($button_back);

    $pages['settings-cards-add']->setHeader('Settings');
    $pages['settings-cards-add']->setSubheader('Cards/Bank Accounts > Add New');
    $pages['settings-cards-add']->addModule(new FormInputSinglePageAdd('app.php#settings-cards-add', 'Add', array(
                array(
                    'selectId' => 'settings-add-card-id', 
                    'labelText' => null, 
                    'inputType' => 'text',
                    'placeHolder' => 'Card Number: 0000-0000',
                ),
                array(
                    'selectId' => 'settings-add-card-name', 
                    'labelText' => null, 
                    'inputType' => 'text',
                    'placeHolder' => "Nick name: name it so it's ready to remember",
                )
            )
        ));
    $pages['settings-cards-add']->addModule($button_back);

    $pages['settings-cards-edit']->setHeader('Settings');
    $pages['settings-cards-edit']->setSubheader('Cards/Bank Accounts > Edit');
    $pages['settings-cards-edit']->addModule($button_back);




    $pages['settings-categories']->setHeader('Settings');
    $pages['settings-categories']->setSubheader('Categories');
    $pages['settings-categories']->addModule(new Table($categories, '#settings-categories-edit'));
    $pages['settings-categories']->addModule(new Button('#settings-categories-add', 'true', null, 'Add New'));
    $pages['settings-categories']->addModule($button_back);

    $pages['settings-categories-add']->setHeader('Settings');
    $pages['settings-categories-add']->setSubheader('Categories > Add');
    $pages['settings-categories-add']->addModule(new FormInputSinglePageAdd('app.php#settings-categories-add', 'Add', array(
                array(
                    'selectId' => 'settings-add-category', 
                    'labelText' => null, 
                    'inputType' => 'text',
                    'placeHolder' => 'Category Name',
                ),
            )
        ));
    $pages['settings-categories-add']->addModule($button_back);

    /*
    $pages['settings-categories-edit']->setHeader('Settings');
    $pages['settings-categories-edit']->setSubheader('Categories > Edit');
    $pages['settings-categories-edit']->addModule($button_back);
     */
    $pages['settings-categories-edit']->setHeader('Settings');
    $pages['settings-categories-edit']->setSubheader('Categories > Edit');
    $pages['settings-categories-edit']->addModule($button_back);



    $pages['settings-preferences']->setHeader('Settings');
    $pages['settings-preferences']->setSubheader('Preferences');
    $pages['settings-preferences']->addModule($button_back);




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

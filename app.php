<?php
    include 'Nav.php';

    echo 'hello world'; 
    
    $nav = new Nav();
    $nav->render();

    if(empty($nav)) 
        echo 'nav empty';
    else 
        echo 'nav is present';

?>

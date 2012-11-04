<?php
    include 'Nav.php';

    echo '=====<br>';
    echo 'hello world<br>'; 
    
    $nav = new Nav();
    $nav->render();

    if(empty($nav)) 
        echo 'nav empty';
    else 
        echo 'nav is present';

    echo '=============';

?>

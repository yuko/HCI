<?php
    include 'Nav.php';
   
    $nav = new Nav();
    $nav->render();

    echo '-----<br>';
    $nav2 = new Nav(2);
    $nav2->render();

    printHtmlTagStart();


    function printHtmlTagStart() {
        echo 'yo';
    }

?>

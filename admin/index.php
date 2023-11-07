<?php
session_start();

include("./header.php");

if (isset($_GET['act']) && $_GET['act'] != '') {
    $act = $_GET['act'];

    switch ($act) {
        case 'value':
            
            break;

        default:

            break;
    }
} else {
    include("main.php");
}






include("./footer.php");
?>
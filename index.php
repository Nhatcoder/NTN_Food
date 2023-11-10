<?php
session_start();
include("./model/");
include("./views/header/header.php");

if (isset($_GET["act"]) && $_GET["act"] != "") {
    $act = $_GET["act"];
    
}

include("./views/main/main.php");
include("./views/footer/footer.php");

?>
<?php
    $username = $_GET['firstName'] ?? "Gabriel";

    if(array_key_exists("lastName", $_GET) && $_GET["lastName"]){
        $username = $username . " " . $_GET["lastName"];
    }

    $currentTab = 'home';

    require ROOT . '/views/home.view.php';
?>
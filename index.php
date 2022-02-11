<?php


    if (!isset($_GET['base'])) {
        require("Controller/index.php");
    } else if ($_GET['base'] == "componentes") {
        require("Controller/componentes.php");
    } else if ($_GET['base'] == "perifericos") {
        require("Controller/perifericos.php");
    } else if ($_GET['base'] == "extras") {
        require("Controller/extras.php");
    } else if ($_GET['base'] == "login"){
        require("Controller/login.php");
    }
?>
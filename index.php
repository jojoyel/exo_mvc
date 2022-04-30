<?php

require("controllers/controller.php");

if (isset($_GET["page"]) && !empty($_GET["page"])) {
    $page = $_GET["page"];

    if ($page == "edit") {
        displayEdit();
    } else if ($page == "seeall") {
        displayView();
    }
} else {
    displayHome();
}
<?php

require("controllers/controller.php");

if (isset($_GET["page"]) && !empty($_GET["page"])) {
    $page = htmlspecialchars($_GET["page"]);

    if ($page == "home") {
        displayHome();
    }
} else {
    displayHome();
}
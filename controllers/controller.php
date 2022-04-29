<?php

require("models/model.php");

function displayHome(): void
{
    require("views/home.php");
}

function displayEdit(): void
{
    require("views/edit.php");
}

function displayView(): void
{
    require("views/view.php");
}
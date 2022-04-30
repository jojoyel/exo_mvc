<?php
function dbConnection()
{
    try {
        return new PDO('mysql:host=localhost;dbname=mvc;charset=utf8', 'root', '');
    } catch (Exception $e) {
    }
}

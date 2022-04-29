<?php
function dbConnection()
{
    try {
        $db = new PDO('mysql:host=localhost;dbname=mvc;charset=utf8', 'root', '');
        return $db;
    } catch (Exception $e) {
        die('DB Error: ' . $e->getMessage());
    }
}

<?php

require("models/model.php");

function displayHome(): void
{
    require("views/home.php");
}

function displayEdit(): void
{
    if (isset($_POST['edit_type'])) {
        $pdo = dbConnection();

        if ($_POST['edit_type'] == "insert") {
            $query = "INSERT INTO `books` (`name`, `author`, `year`, `summary`) VALUES (:name, :author, :year, :summary)";
            $preparation = $pdo->prepare($query);

            $preparation->execute([
                "name" => $_POST['name'],
                "author" => $_POST['author'],
                "year" => $_POST['year'],
                "summary" => $_POST['summary']
            ]);
        } else if ($_POST['edit_type'] == "update") {
            $query = "UPDATE `books` SET `name` = :name, `author` = :author, `year` = :year, `summary` = :summary WHERE `id` = :id";
            $preparation = $pdo->prepare($query);

            $preparation->execute([
                "name" => $_POST['name'],
                "author" => $_POST['author'],
                "year" => $_POST['year'],
                "summary" => $_POST['summary'],
                "id" => $_POST['id']
            ]);
        } else if ($_POST['edit_type'] == "delete") {
            $query = "DELETE FROM `books` WHERE `id` = :id";
            $preparation = $pdo->prepare($query);

            $preparation->execute([
                "id" => $_POST['id']
            ]);
        }
    }
    require("views/edit.php");
}

function displayView(): void
{
    $pdo = dbConnection();

    $books = $pdo->prepare('SELECT * FROM books');
    $books->execute();
    $books = $books->fetchAll();
    require("views/see_all.php");
}
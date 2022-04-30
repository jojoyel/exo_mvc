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

        if ($_POST['edit_type'] == "add") {
            $query = "INSERT INTO `books` (`name`, `author`, `year`, `summary`) VALUES (:name, :author, :year, :summary)";
            $insertion = $pdo->prepare($query);

            $insertion->execute([
                "name" => $_POST['name'],
                "author" => $_POST['author'],
                "year" => $_POST['year'],
                "summary" => $_POST['summary']
            ]);
            if ($insertion->rowCount() > 0) {
                $result_type = "success";
                $result = "Livre ajouté";
            } else {
                $result_type = "error";
                $result = "Erreur lors de l'ajout";
            }
        } else if ($_POST['edit_type'] == "edit") {
            echo "C'est pour modifier";
        } else if ($_POST['edit_type'] == "search") {
            $query = "SELECT * FROM `books` WHERE `id` LIKE :id";
            $search = $pdo->prepare($query);
            $search->execute([
                "id" => $_POST['id']
            ]);
            $search_result = $search->fetch();
            if ($search->rowCount() > 0) {
                $result_type = "success";
                $result = "Livre recherché avec succès";
                $search_name = $search_result['name'];
                $search_author = $search_result['author'];
                $search_year = $search_result['year'];
                $search_summary = $search_result['summary'];
            } else {
                $result_type = "error";
                $result = "Recherche infructueuse";
            }
        } else if ($_POST['edit_type'] == "delete") {
            $query = "DELETE FROM `books` WHERE `id` = :id";
            $deletion = $pdo->prepare($query);

            $deletion->execute([
                "id" => $_POST['id']
            ]);

            if ($deletion->rowCount() > 0) {
                $result_type = "success";
                $result = "Livre supprimé";
            } else {
                $result_type = "error";
                $result = "Erreur lors de la suppression";
            }
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
    require("views/view.php");
}
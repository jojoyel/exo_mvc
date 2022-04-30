<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edition</title>
</head>
<body>

<?php include 'navigations_links.php';
echo(display_navigation_links(2));

if (isset($result)) {
    $color = (isset($result_type) && $result_type == "success") ? 'green' : 'red';
    echo "<p style='background-color:$color;padding:18px'>$result</p>";
}
?>

<form action="" method="post">
    <fieldset>
        <legend>Ajouter un livre</legend>

        <input type="hidden" name="edit_type" value="add">
        <label for="name">Nom du livre</label>
        <input type="text" id="name" name="name" placeholder="Nom du livre">
        <label for="author">Nom de l'Auteur</label>
        <input type="text" id="author" name="author" placeholder="Auteur">
        <label for="year">Année de publication</label>
        <input type="number" id="year" value="2022" name="year" placeholder="Année de publication">
        <label for="summary">Résumé</label>
        <textarea name="summary" id="summary" placeholder="Sommaire . . ."></textarea>
        <input type="submit" value="Envoyer">
    </fieldset>
</form>

<form action="" method="post">
    <fieldset>
        <legend>Modifier un livre</legend>
        <input type="hidden" name="edit_type" value="search">
        <label for="id">Id du livre à modifier</label>
        <input type="number" id="id" name="id" placeholder="Id du livre">
        <input type="submit" value="Envoyer">
    </fieldset>
</form>

<form action="" method="post">
    <fieldset>
        <legend>Modifier un livre</legend>
        <input type="hidden" name="edit_type" value="add">
        <label for="name">Nom du livre</label>
        <input type="text" id="name" name="name"
               placeholder="Nom du livre" <?php if (isset($search_name)) echo "value='$search_name'" ?>>
        <label for="author">Nom de l'Auteur</label>
        <input type="text" id="author" name="author"
               placeholder="Auteur" <?php if (isset($search_author)) echo "value='$search_author'" ?>>
        <label for="year">Année de publication</label>
        <input type="number" id="year" <?php if (isset($search_year)) echo "value='$search_year'" ?> name="year"
               placeholder="Année de publication">
        <label for="summary">Résumé</label>
        <textarea name="summary" id="summary"
                  placeholder="Sommaire . . ."><?php if (isset($search_summary)) echo "$search_summary" ?></textarea>
        <input type="submit" value="Envoyer">
    </fieldset>
</form>

<form action="" method="post">
    <fieldset>
        <legend>Supprimer un livre</legend>

        <input type="hidden" name="edit_type" value="delete">
        <label for="id">ID du livre</label>
        <input type="number" name="id" id="id" placeholder="ID du livre">
        <input type="submit" value="Envoyer">
    </fieldset>
</form>
</body>
</html>
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
<ul>
    <li><a href="http://127.0.0.2/?page=home">Accueil</a></li>
    <li><a href="http://127.0.0.2/?page=seeall">Consultation</a></li>
    <li><a href="http://127.0.0.2/?page=edit">Ajouter modifier et supprimer</a></li>
</ul>

<form action="" method="post">
    <fieldset>
        <legend>Ajouter un livre</legend>

        <input type="hidden" name="edit_type" value="insert">
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
        <input type="hidden" name="edit_type" value="update">
        <label for="id">Id du livre</label>
        <input type="number" name="id" id="id">
        <label for="name">Nom du livre</label>
        <input type="text" id="name" name="name"
               placeholder="Nom du livre">
        <label for="author">Nom de l'Auteur</label>
        <input type="text" id="author" name="author"
               placeholder="Auteur">
        <label for="year">Année de publication</label>
        <input type="number" id="year" name="year"
               placeholder="Année de publication">
        <label for="summary">Résumé</label>
        <textarea name="summary" id="summary"
                  placeholder="Sommaire . . ."></textarea>
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
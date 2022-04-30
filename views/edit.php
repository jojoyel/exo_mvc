<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Ajouter des livres</title>
</head>
<body>
<ul>
    <li><a href="http://127.0.0.1/">Accueil</a></li>
    <li><a href="http://127.0.0.1/?page=seeall">Consultation</a></li>
    <li><a href="http://127.0.0.1/?page=edit">Ajouter modifier et supprimer</a></li>
</ul>

<form action="" method="post">
    <input type="hidden" name="edit_type" value="insert">
    <input type="text" name="name" placeholder="Nom du livre">
    <input type="text" name="author" placeholder="Auteur">
    <input type="number" value="2022" name="year" placeholder="Année de publication">
    <textarea name="summary" placeholder="Sommaire . . ."></textarea>
    <input type="submit" value="Envoyer">
</form>

<form action="" method="post">
    <input type="hidden" name="edit_type" value="delete">
    <input type="number" name="id" placeholder="ID du livre">
    <input type="submit" value="Envoyer">
</form>

<form action="" method="post">
    <input type="hidden" name="edit_type" value="update">
    <input type="number" name="id">
    <input type="text" name="name"
           placeholder="Nom du livre">
    <input type="text" name="author"
           placeholder="Auteur">
    <input type="number" name="year"
           placeholder="Année de publication">
    <textarea name="summary" placeholder="Sommaire . . ."></textarea>
    <input type="submit" value="Envoyer">
</form>
</body>
</html>
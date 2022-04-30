<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Consultation</title>
</head>
<body>

<ul>
    <li><a href="http://127.0.0.1">Accueil</a></li>
    <li><a href="http://127.0.0.1/?page=seeall">Consultation</a></li>
    <li><a href="http://127.0.0.1/?page=edit">Ajouter modifier et supprimer</a></li>
</ul>

<table>
    <thead>
    <tr>
        <th>Id</th>
        <th>Nom livre</th>
        <th>Auteur</th>
        <th>publicatoin</th>
        <th>sommaire</th>
    </tr>
    </thead>
    <tbody>
    <?php
    foreach ($result as $b) {
        echo '<tr>';
        echo '<td>' . $b['id'] . '</td>';
        echo '<td>' . $b['name'] . '</td>';
        echo '<td>' . $b['author'] . '</td>';
        echo '<td>' . $b['year'] . '</td>';
        echo '<td>' . $b['summary'] . '</td>';
        echo '</tr>';
    }
    ?>
    </tbody>
</table>

</body>
</html>
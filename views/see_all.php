<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Consultation</title>
</head>
<body>

<ul>
    <li><a href="http://127.0.0.2/?page=home">Accueil</a></li>
    <li><a href="http://127.0.0.2/?page=seeall">Consultation</a></li>
    <li><a href="http://127.0.0.2/?page=edit">Ajouter modifier et supprimer</a></li>
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
    if (isset($books)) {
        foreach ($books as $b) {
            echo '<tr>';
            echo '<td>' . htmlspecialchars($b['id']) . '</td>';
            echo '<td>' . htmlspecialchars($b['name']) . '</td>';
            echo '<td>' . htmlspecialchars($b['author']) . '</td>';
            echo '<td>' . htmlspecialchars($b['year']) . '</td>';
            echo '<td>' . htmlspecialchars($b['summary']) . '</td>';
            echo '</tr>';
        }
    }
    ?>
    </tbody>
</table>

</body>
</html>
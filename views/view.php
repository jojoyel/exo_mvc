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

<?php include 'navigations_links.php';
echo(display_navigation_links(1)) ?>

<table>
    <thead>
    <tr>
        <th>Id</th>
        <th>Nom</th>
        <th>Auteur</th>
        <th>Année de publication</th>
        <th>Résumé</th>
    </tr>
    </thead>
    <tbody>
    <?php
    if (isset($books)) {
        foreach ($books as $book) {
            echo '<tr>';
            echo '<td>' . htmlspecialchars($book['id']) . '</td>';
            echo '<td>' . htmlspecialchars($book['name']) . '</td>';
            echo '<td>' . htmlspecialchars($book['author']) . '</td>';
            echo '<td>' . htmlspecialchars($book['year']) . '</td>';
            echo '<td>' . htmlspecialchars($book['summary']) . '</td>';
            echo '</tr>';
        }
    } else {
        echo '<tr><td colspan="5">Aucun livre trouvé</td></tr>';
    }
    ?>
    </tbody>
</table>

</body>
</html>
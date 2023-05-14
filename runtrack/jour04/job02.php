<!doctype html>
<html>
<head>
<meta charset="utf-8" />
<title>Formulaire HTML</title>
</head>
<body>
<form action="#" method="GET">
Votre nom : <input type="text" name="nom" required>
Votre prénom : <input type="text" name="prenom" required>
<input type="submit" value="Envoyer">
</form>

<?php
if (!empty($_GET)) {
    echo '<table>';
    echo '<thead><tr><th>Argument</th><th>Valeur</th></tr></thead>';
    echo '<tbody>';
    foreach ($_GET as $key => $value) {
        echo '<tr><td>' . $key . '</td><td>' . $value . '</td></tr>';
    }
    echo '</tbody>';
    echo '</table>';
}
?>

</body>
</html>
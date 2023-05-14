<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    echo '<table>';
    foreach ($_POST as $key => $value) {
        echo '<tr><td>' . htmlspecialchars($key) . '</td><td>' . htmlspecialchars($value) . '</td></tr>';
    }
    echo '</table>';
}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8" />
<title>Formulaire HTML</title>
</head>
<body>
<form action="#" method="POST">
<p>Votre prénom : <input type="text" name="prenom" required></p>
<p>Votre nom : <input type="text" name="nom" required></p>
<p><input type="submit" value="Envoyer"></p>
</form>
</body>
</html>
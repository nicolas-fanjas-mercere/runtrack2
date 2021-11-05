<?php
$i = 0;
foreach($_POST as $value) {
    $i++;
    }
    echo $i;
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8" />
<title>
Formulaire html
</title>
</head>
<body>
<form action="#" method="POST">
Votre nom :<input type="text1" name="nom" required >
Votre âge :<input type="text2" name="age" required>
Date : <input type="date" name="date" required>
<p>
<input type=submit value="Envoyer">
</form>
</body>
</html>
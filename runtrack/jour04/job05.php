<?php
if (isset($_POST["username"]) && isset($_POST["password"])) {
    if ($_POST['username'] == "John" && $_POST['password'] == "Rambo") {
        echo "C'est pas ma guerre";
    } else {
        echo "Votre pire cauchemar";
    }
}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8" />
<title>Formulaire html</title>
</head>
<body>
<form action="#" method="POST">
Username :<input type="text" name="username" required >
Mot de passe :<input type="password" name="password" required>
<p>
<input type=submit value="Connexion">
</form>
</body>
</html>
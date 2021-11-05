<?php
if (isset($_POST["Username"]) && isset($_POST["mdp"])) {
    if ( $_POST['Username'] == "Jhon" && $_POST['mdp'] == "Rambo") 
    {
        echo "C'est pas ma guerre";
    }
}
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
Username :<input type="text" name="Username" required >
Mot de passe :<input type="password" name="mdp" required>
<p>
<input type=submit value="Connexion">
</form>
</body>
</html>

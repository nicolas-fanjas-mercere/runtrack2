<?php
session_start();  
        

if (!isset($_SESSION['prenom'])) 
{
$_SESSION['prenom'] = '';
}

echo '<form action="#" method="POST">';
echo 'Votre Prénom :<input type="text" name="prenom" required>';
echo '<input type=submit value="Envoyer">';
echo '</form>';


echo '<form action="crashsession.php" method="POST">';
echo '<input type="submit" value="reset">';
echo '</form>';

if (isset($_POST['prenom'])) 
    {
 $_SESSION['prenom'] .= $_POST['prenom']. "<br>"; 
    }

    echo $_SESSION['prenom'];

    if (isset($_POST['reset'])) 
    {
    session_destroy();
    }

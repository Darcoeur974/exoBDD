<?php
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}
echo $_POST['login'];
echo $_POST['message'];
//$_POST['login'] = $login;
//$_POST['message'] = $message;

/*
$req = $bdd->prepare('INSERT INTO utilisateur(login, message) VALUES(:login, :message)');
$req->execute(array(
    'login' => $login,
    'message' => $message
));
*/
//header('Location: minichat.php');
?>
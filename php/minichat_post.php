<?php
//accée à la banque de donnée
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

//recuperation d'information
$login = $_POST['login'];
$message = $_POST['message'];

$req = $bdd->prepare('INSERT INTO utilisateur(login, message) VALUES(:login, :message)'); //prepare l'envoie (vers la BDD) de nouvelle information
$req->execute(array( //execute l'import
    'login' => $login,
    'message' => $message
));

header('Location: minichat.php'); //renvoie imediatement vers la location viséé
?>
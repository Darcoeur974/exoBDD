<?php
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}
?>

<form method="post" action="minichat_post.php">
    <p>
        <label for="login">Identifiant</label>
        <input type="text" name="login" id="login">
    </p>
    <p>
        <label for="message">Message</label>
        <input type="text" name="message" id="message">
    </p>
    <input type="submit">
</form>

<?php
$reponse = $bdd->query('SELECT login,message FROM utilisateur');
while ($donnees = $reponse->fetch())
{
?>
    <p>
    <strong>Identifiant</strong> : <?php echo $donnees['login']; ?><br />
    <p><?php echo $donnees['message']?></p>
   </p>
<?php
}

$reponse->closeCursor(); // Termine le traitement de la requête
?>
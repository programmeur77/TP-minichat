<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Minichat</title>
</head>
<body>

	<form action="minichat_post.php" method="POST">
		<label>Pseudo : </label><input type="text" name="pseudo" autofocus /><br />
		<label>Votre message : </label><input type="text" name="message" /><br />
		<input type="submit" />
	</form>

</body>
</html>

<?php
$bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', 'root');

$req = $bdd->query('SELECT * FROM minichat ORDER BY id DESC');
while ($donnees = $req->fetch()) 
{
	echo '<p><strong>' . $donnees['pseudo'] . '</strong> : ' . $donnees['message'] . '</p>';
}
$req->closeCursor();
?>
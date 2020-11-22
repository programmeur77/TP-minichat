<?php
$bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', 'root');
$reponse = $bdd->prepare('INSERT INTO minichat(pseudo, message) VALUES (?, ?)');
$reponse->execute(array($_POST['pseudo'], $_POST['message']));

header('Location: minichat.php');
?>
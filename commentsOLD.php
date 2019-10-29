<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Document</title>
</head>
<body>
<?php
$bdd = new PDO('mysql:host=localhost;dbname=toudoum;charset=utf8','root','');
/* if ($bdd->connect_error) {

die("Connection failed: " . $bdd->connect_error);
}
echo "Connected successfully"; */

if(isset($_GET['id']) AND !empty($_GET['id'])) {
$getid = htmlspecialchars($_GET['id']);
$films = $bdd->prepare('SELECT * FROM film WHERE id = ?');
$films->execute(array($getid));
$films = $films->fetch();
if(isset($_POST['submit_commentaire'])) {
if(isset($_POST['nickname'],$_POST['comment']) AND !empty($_POST['nickname']) AND !empty($_POST['comment'])) {
$pseudo = htmlspecialchars($_POST['nickname']);
$commentaire = htmlspecialchars($_POST['comment']);
if(strlen($pseudo) < 25) {
$ins = $bdd->prepare('INSERT INTO espace_membre (nickname, comment, id_film) VALUES (?,?,?)');
$ins->execute(array($pseudo,$commentaire,$getid));
$c_msg = "<span style='color:green'>Votre commentaire a bien été posté</span>";
} else {
$c_msg = "Erreur: Le pseudo doit faire moins de 25 caractères";
}
} else {
$c_msg = "Erreur: Tous les champs doivent être complétés";
}
}
$commentaire = $bdd->prepare('SELECT * FROM espace_membre WHERE id_film = ? ORDER BY id DESC');
$commentaire->execute(array($getid));
?>
<h2>Article:</h2>
<p><?= $films['link'] ?></p>
<br />
<h2>Commentaires:</h2>
<form method="POST">
<input type="text" name="nickname" placeholder="Votre pseudo" /><br />
<textarea name="comment" placeholder="Votre commentaire..."></textarea><br />
<input type="submit" value="Poster mon commentaire" name="submit_commentaire" />
</form>
<?php if(isset($c_msg)) { echo $c_msg; } ?>
<br /><br />
<?php while($c = $commentaire->fetch()) { ?>
<b><?= $c['nickname'] ?>:</b> <?= $c['comment'] ?><br />
<?php } ?>
<?php
}
?>

</body>
</html>
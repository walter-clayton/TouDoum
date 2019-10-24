<?php require 'header.php'?>
<?php
if(!empty($_POST) && !empty($_POST['username']) && !empty($_POST['password'])){
require_once 'inc/db.php';
require_once 'inc/functions.php';
session_start();
$req = $pdo->prepare('SELECT id , username , password FROM users WHERE username = :username or email = :username');

$req->execute(['username' => $_POST['username']]);
$user = $req->fetch(); // permet de récuperer le première enregistrement

if($user && (password_verify($_POST['password'], $user->password))){
    echo "vous êtes logé" . "<br>";
}else{
    echo "pseudo ou mdp non valide";
}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Document</title>
</head>
<body>

<form action="" method="POST">

    <div class="form-group">
        <label for="">Username or E-mail</label>
        <input type="text" name="username"/>
    </div>

    <div class="form-group">
        <label for="">Mot de passe</label>
        <input type="password" name="password"/>
    </div>

    <button type="submit">Se connecter</button>

</form>


</body>

<?php
include "./footer.php";
?>

</html>
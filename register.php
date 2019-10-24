<?php require 'inc/functions.php' ?>
<?php require 'header.php' ?>
<?php

if(!empty($_POST)){

$errors = array();

require_once 'inc/db.php';

if(empty($_POST['firstname']) || !preg_match('/^[a-zA-Z]+$/', $_POST['firstname'])){
    $errors['firstname'] = "Votre prénom n'est pas valide";
}

if(empty($_POST['surname']) || !preg_match('/^[a-zA-Z]+$/', $_POST['surname'])){
    $errors['surname'] = "Votre nom n'est pas valide";
}

if(empty($_POST['username']) || !preg_match('/^[a-zA-Z0-9_]+$/', $_POST['username'])){
    $errors['username'] = "Votre pseudonyme n'est pas valide";
} else{

    $req = $pdo->prepare('SELECT id FROM users WHERE username = ?');
    $req->execute([$_POST['username']]);
    $user = $req->fetch(); // permet de récuperer le première enregistrement

    if($user){
        $errors['username'] = 'Ce pseudonyme est déjà pris';
    }

}

if(empty($_POST['email']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
    $errors['email'] = "Votre e-mail n'est pas valide";
}else{

    $req = $pdo->prepare('SELECT id FROM users WHERE email = ?');
    $req->execute([$_POST['email']]);
    $user = $req->fetch();

    if($user){
        $errors['email'] = 'Cet e-mail est déjà utilisé pour un autre compte';
    }

}

if(empty($_POST['password'])){
    $errors['password'] = "Vous devez rentrer un mot de passe valide";
}

if(($_POST['password']) != $_POST['password_confirm']){
    $errors['password_confirm'] = "Veuillez inserer un mot de passe identique";
}

if(empty($_POST['age']) || !preg_match('/^[0-9]+$/', $_POST['age'])){
    $errors['age'] = "Votre âge n'est pas valide";
}

if(empty($errors)){

require_once 'inc/db.php';
$req = $pdo->prepare("INSERT INTO users SET firstname = ?, surname = ?, username = ?, email = ?, password = ?, age = ?");
$password = password_hash($_POST['password'], PASSWORD_BCRYPT);
$req->execute([$_POST['firstname'], $_POST['surname'], $_POST['username'], $_POST['email'], $password, $_POST['age']]);
header('Location: login.php');
exit();
}
}
// require 'inc/db.php';
// session_start();
// $req = $pdo->prepare('SELECT id FROM users WHERE username = ?');
// $req->execute([$_POST['username']]);
// $user = $req->fetch();
// $_SESSION['auth']= $user;
// var_dump($_SESSION['auth']);

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

<?php if(!empty($errors)):?>
    <p>Vous n'avez pas rempli le formulaire correctement</p>
    <ul>
<?php foreach($errors as $error): ?>
    <li><?php echo $error;?></li>
<?php endforeach; ?>
    </ul>
<?php endif; ?>
    <h1>S'inscrire</h1>

<form action="" method="POST">

    <div class="form-group">
        <label for="">Prénom</label>
        <input type="text" name="firstname"/>
    </div>

    <div class="form-group">
        <label for="">Nom</label>
        <input type="text" name="surname"/>
    </div>

    <div class="form-group">
        <label for="">Pseudonyme</label>
        <input type="text" name="username"/>
    </div>

    <div class="form-group">
        <label for="">Âge</label>
        <input type="text" name="age"/>
    </div>

    <div class="form-group">
        <label for="">E-mail</label>
        <input type="text" name="email"/>
    </div>

    <div class="form-group">
        <label for="">Mot de passe</label>
        <input type="password" name="password"/>
    </div>
    <div class="form-group">
<label for="">Confirmez votre mot de passe</label>
<input type="password" name="password_confirm"/>
</div>

    <button type="submit">S'inscrire</button>

</form>
</body>

<?php
include "./footer.php";
?>

</html>
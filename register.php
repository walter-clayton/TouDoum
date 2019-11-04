<?php require './inc/functions.php'; ?>
<?php require './header.php'; ?>
<?php 
    // si déjà connecter redirige vers index.php
    if(isset($_SESSION['auth'])){
        header('Location: index.php'); 
    }
?>
<?php

if(!empty($_POST)){

$errors = array();

require_once './inc/db.php';

// Champ prénom : condition d'erreur : si firstname vide ou si il contient autre chose que [a-zA-Z] erreur
if(empty($_POST['firstname']) || !preg_match('/^[a-zA-Z]+$/', $_POST['firstname'])){
    $errors['firstname'] = "Votre prénom n'est pas valide";
}
// idem que prénom 
if(empty($_POST['surname']) || !preg_match('/^[a-zA-Z]+$/', $_POST['surname'])){
    $errors['surname'] = "Votre nom n'est pas valide";
}
// idem mais en autorisant [a-zA-Z0-9_]
if(empty($_POST['username']) || !preg_match('/^[a-zA-Z0-9_]+$/', $_POST['username'])){
    $errors['username'] = "Votre pseudonyme n'est pas valide";
} else{

    $req = $pdo->prepare('SELECT id FROM users WHERE username = ?');
    $req->execute([$_POST['username']]);
    $user = $req->fetch(); // permet de récuperer le dernier enregistrement

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
//fin de vérification

if(empty($errors)){

require_once './inc/db.php';
// insertion des informations dans la DB
$req = $pdo->prepare("INSERT INTO users SET firstname = ?, surname = ?, username = ?, email = ?, password = ?, age = ?");
$password = password_hash($_POST['password'], PASSWORD_BCRYPT);
$req->execute([$_POST['firstname'], $_POST['surname'], $_POST['username'], $_POST['email'], $password, $_POST['age']]);
$_SESSION['prenom'] = $_POST['firstname'];
$_SESSION['nom'] = $_POST['surname'];
$_SESSION['email'] = $_POST['email'];
$_SESSION['age'] = $_POST['age'];
header('Location: login.php');
$_SESSION['flash']['success'] = "Création de compte effectuer avec succès";
exit();
}
}
?>

<div class="formsize">
    <div class="formradius">
<?php if(!empty($errors)):?>
    <p class="registerincorrecte">Vous n'avez pas rempli le formulaire correctement</p>
    <ul>
<?php foreach($errors as $error): ?>
    <li><?php echo '<p class="registerincorrecte">' . $error . '</p>';?></li>
<?php endforeach; ?>
    </ul>
<?php endif; ?>
</div>
<form action="" method="POST" class="form-login">
    <h2>S'inscrire</h2>
    <div class="form-group">
        <!-- <label for="">Prénom</label> -->
        <input type="text" name="firstname"placeholder="Prénom" required/>
    </div>

    <div class="form-group">
        <!-- <label for="">Nom</label> -->
        <input type="text" name="surname"placeholder="Nom" required/>
    </div>

    <div class="form-group">
        <!-- <label for="">Pseudonyme</label> -->
        <input type="text" name="username"placeholder="Pseudonyme" required/>
    </div>

    <div class="form-group">
        <!-- <label for="">Âge</label> -->
        <input type="text" name="age"placeholder="Âge" required/>
    </div>

    <div class="form-group">
        <!-- <label for="">E-mail</label> -->
        <input type="text" name="email"placeholder="E-mail" required/>
    </div>

    <div class="form-group">
        <!-- <label for="">Mot de passe</label> -->
        <input type="password" name="password"placeholder="Mot de passe" required/>
    </div>
    <div class="form-group">
<!-- <label for="">Confirmez le mot de passe</label> -->
<input type="password" name="password_confirm" placeholder="Confirmez le mot de passe" required/>
</div>

    <button type="submit" class="btn btn-rounded">S'inscrire</button>

</form>
</div>

<?php
include "./footer.php";
?>
<?php require './header.php'?>
<?php
if(!empty($_POST) && !empty($_POST['username']) && !empty($_POST['password'])){
require_once './inc/db.php';
require_once './inc/functions.php';
$req = $pdo->prepare('SELECT id , username , password FROM users WHERE username = :username or email = :username');

$req->execute(['username' => $_POST['username']]);
$user = $req->fetch(); // permet de récuperer le première enregistrement

if($user && (password_verify($_POST['password'], $user->password))){
    $_SESSION['auth'] = $_POST['username'];
    echo $_SESSION['auth'];
    header('location: index.php');
}else{
    echo '<p class="loginincorrecte">' . 'pseudo ou mdp non valide' . '</p>' . '<br>';
}
}
?>
<form action="" method="POST" class="form-login">
    <h2>Se connecter</h2>
    <div class="form-group">
        <label for="">Username or E-mail</label><br>
        <input type="text" name="username"/>
    </div>

    <div class="form-group">
        <label for="">Mot de passe</label><br>
        <input type="password" name="password"/>
    </div><br>
    <button type="submit" class="btn btn-rounded" style="opacity:1;">Se connecter</button>
</form>

<?php
include "./footer.php";
?>
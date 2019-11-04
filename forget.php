<?php require ('./header.php') ?>

<?php
if(!empty($_POST) && !empty($_POST['email'])){
require_once './inc/db.php';
require_once './inc/functions.php';
$req = $pdo->prepare('SELECT * FROM users WHERE email = ? ');

$req->execute([$_POST['email']]);
$user = $req->fetch(); // permet de récuperer le dernier enregistrement

if($user){
        $reset_token = str_random(60); //appel de fonction qui se trouve dans functions.php
        $pdo->prepare('UPDATE users SET reset_token = ?, reset_at = NOW() WHERE id = ?')->execute([$reset_token, $user->id]); // envoie du token dans la db 
        $_SESSION['flash']['success'] = 'Les instructions du rappel de mot de passe vous ont été envoyées par emails'; // Variable utiliser pour les messages d'erreur ou succès 
        mail($_POST['email'], 'Réinitiatilisation de votre mot de passe', "Afin de réinitialiser votre mot de passe merci de cliquer sur ce lien\n\nhttp://localhost/TouDoum/reset.php?id={$user->id}&token=$reset_token"); // fonction de php qui permet d'envoyer un mail non fonctionnel avec hébergement gratuit 
        header('Location: login.php'); // redirection vers login.php
        exit();
}else{
    $_SESSION['flash']['danger'] = 'Aucun compte ne correspond à cet email'; // Variable pour msg d'alerte
}
}
?>
<!-- Formulaire récuperation de mot de passe -->
<form action="" method="POST" class="form-login">
<h2>Mot de passe oublié</h2>
<div class="form-group">
        <label for="">E-mail</label><br>
        <input type="email" name="email" required/>
    </div>
    <button type="submit" class="btn btn-rounded" style="opacity:1;">Récuperer</button>
</form>

<?php require ('./footer.php') ?>
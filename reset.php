<?php 
    if(isset($_GET['id']) && isset($_GET['token'])){
        require 'inc/db.php';
        require 'inc/functions.php';
        $req = $pdo->prepare('SELECT * FROM users WHERE id = ? AND reset_token IS NOT NULL AND reset_token = ? AND reset_at > DATE_SUB(NOW(), INTERVAL 30 MINUTE)');
        $req->execute([$_GET['id'], $_GET['token']]);
        $user = $req->fetch();
        if($user){
            if(!empty($_POST)){
                // changement du mdp après validation token
                if(!empty($_POST['password']) && $_POST['password'] == $_POST['password_confirm']){
                    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
                    $pdo->prepare('UPDATE users SET password = ?, reset_at = NULL, reset_token = NULL WHERE id = ?')->execute([$password, $_GET['id']]);
                    session_start();
                    $_SESSION['flash']['success'] = "Votre mot de passe a bien été modifié";
                    $_SESSION['auth'] = $user;
                    header('Location: logout.php');
                    exit();
                }
            }
        }else{
            session_start();
            $_SESSION['flash']['danger'] = "Ce token n'est pas valide";
            header('Location: login.php');
            exit();
        }
    }else{
        header('Location: login.php');
        exit();
    }
?>

<?php require './header.php'?>
<form action="" method="POST" class="form-login">
    <h2>Réinitialiser le mot de passe</h2>
    <div class="form-group">
        <input type="password" name="password" placeholder="Mot de passe" required/><br>
    </div>
    <div class="form-group">
        <input type="password" name="password_confirm" placeholder="Confirmez le mot de passe" required/>
    </div>
    <button type="submit" class="btn btn-rounded" style="opacity:1;">Réinitialiser votre mot de passe</button>
</form>
</div>
</div>

<?php
include "./footer.php";
?>
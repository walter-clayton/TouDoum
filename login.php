<?php require './header.php'?>
<?php require_once 'inc/functions.php';
    reconnect_from_cookie();
    if(isset($_SESSION['auth'])){
        header('Location: account.php');
    }
?>
<?php
if(isset($_POST['username'])&& isset($_POST['password'])){
    if(!empty($_POST['username']) && !empty($_POST['password'])){
        require_once './inc/db.php';
        require_once './inc/functions.php';
        $req = $pdo->prepare('SELECT id , username , password FROM users WHERE username = :username or email = :username');
        
        $req->execute(['username' => $_POST['username']]);
        $user = $req->fetch(); // permet de récuperer le première enregistrement
        '<div class="formsize>';
        '<div class="formradius">';
        if($user && (password_verify($_POST['password'], $user->password))){
            $_SESSION['auth'] = $_POST['username'];
            echo $_SESSION['auth'];
            $_SESSION['flash']['success'] = "Connexion réussi";
            if($_POST['remember']){
                $remember_token = str_random(250);
                $pdo->prepare('UPDATE users SET remember_token = ? WHERE id = ?')-> execute([$remember_token, $user->id]);
                setcookie('remember', $user->id . '//' . $remember_token . sha1($user->id . 'biscuit'), time() + 60 * 60 * 24 * 7); //separation par 2 slash cookie de 7 jours
            }
            header('location: index.php');
            exit();
        }else{
            echo '<p class="alert alert-danger">' . 'pseudo ou mdp non valide' . '</p>';
        }
        }
        elseif (empty($_POST['username']) OR empty($_POST['password'])){
            echo '<p class="alert alert-danger">' . 'Compléter les champs' . '</p>';
        }
}

?>
<form action="" method="POST" class="form-login">
    <h2>Se connecter</h2>
    <div class="form-group">
        <label for="">Username or E-mail</label><br>
        <input type="text" name="username" required/>
    </div>
    <div class="form-group">
        <label for="">Mot de passe</label><br>
        <input type="password" name="password" required/><br>
    </div>
    <div class="form-group">
        <label>
            <input type="checkbox" name="remember" value="1"/>Se souvenir de moi
        </label>
        <a href="./forget.php"><br>Mot de passe oublié.</a>
    </div>
    <button type="submit" class="btn btn-rounded" style="opacity:1;">Se connecter</button>
</form>
</div>
</div>

<?php
include "./footer.php";
?>
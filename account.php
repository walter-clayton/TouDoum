<?php require './inc/functions.php'; ?>
<?php logged_only();

if(!empty($_POST)){
    if(!empty($_POST['password']) && $_POST['password'] == $_POST['password_confirm']){
        require_once 'inc/db.php';
        $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
        $pdo->prepare('UPDATE users SET password = ? ')->execute([$password]);
        $_SESSION['flash']['success'] = "Votre mot de passe a bien été mis à jour";
    }else{
        $_SESSION['flash']['danger'] = "Les mots de passes ne correspondent pas";
    }
}
?>
<?php require './header.php'; ?>
<div class="account">
    <h2>Information du compte</h2>
    <p>Prenom : <?php echo $_SESSION['prenom'] ?> </p>
    <p>Nom : <?php echo $_SESSION['nom'] ?> </p>
    <p>Pseudonyme : <?php echo $_SESSION['auth'] ?> </p>
    <p>E-mail : <?php echo $_SESSION['email'] ?> </p>
    <p>Age : <?php echo $_SESSION['age'] ?> </p>
    <h3>Changer votre mot de passe</h3>
    <form action="" method="POST">
        <div class="form-group">
            <input class="changemdp" type="password" name="password" placeholder="Nouveau mot de passe" required/><br>
        </div>
        <div class="form-group">
            <input class="changemdp" type="password" name="password_confirm" placeholder="Confirmez nouveau mot de passe" required/>
        </div>
        <button type="submit" class="btn btn-rounded">Changer votre mot de passe</button>
    </form>
</div>

<?php require './footer.php' ?>
<?php 
if(session_status() == PHP_SESSION_NONE){
session_start(); 
}
?>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootsrap link -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- CSS -->
    <link rel="stylesheet" href="./css/style.css">
    <title>TouDoum - Watch Your Favourite Series & Movies Online</title>
</head>


<body>
    <!-- HEADER -->
    <div class="container-header-section">
<header class="header">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a href="./index.php"><img src="./images/Logo-TouDoum.png" alt="logo" id="logo"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01"
            aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">            
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                <!--  Depending on location: href="../index.php OR href="./index.php-->
                    <a class="nav-link" href="./index.php"><i class="fas fa-home fa-2x"></i> <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a href="./films.php" class="btn btn-rounded" style="margin:5">Films</a>
                </li>
                <li class="nav-item">
                    <a href="./series.php" class="btn btn-rounded" style="margin:5">Series</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0" style="margin-right:100">
                <a href="gallery.php" class="btn btn-outline-success my-2 my-sm-0">Search</a>
            </form>
            </div>
    <div class="signIn">
    <div class="signIn">
        <?php if (isset($_SESSION['auth'])): ?>
            <a href="./account.php" class="btn btn-rounded-user"><span>Account</span>
            <a href="./logout.php" class="btn btn-rounded"><i class="fas fa-sign-in-alt"></i><span class="smIcon"> Log Out </span></a>
        <?php else: ?>
        <a href="./register.php" class="btn btn-rounded"><i class="fas fa-user-plus"></i><span class="smIcon"> Register </span></a>
        <a href="./login.php" class="btn btn-rounded"><i class="fas fa-sign-in-alt"></i><span class="smIcon"> Log In </span></a>
        <?php endif; ?>
    </div>
 
    </nav>
   
</header>

<section class="page">

<?php if(isset($_SESSION['flash'])): ?>
    <?php foreach($_SESSION['flash'] as $type => $message):?>
        <div class="alert alert-<?= $type; ?>">
            <?= $message; ?>
        </div>
    <?php endforeach; ?>
    <?php unset($_SESSION['flash']); ?>
<?php endif; ?>
<?php session_start(); ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <!-- Call JQuery -->
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css"
        integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js"
        integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"
        integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn"
        crossorigin="anonymous"></script>
    <!-- FontAwesome link -->
    <script src="https://kit.fontawesome.com/23325f0d76.js" crossorigin="anonymous"></script>
    <!-- icons library-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/23325f0d76.js"></script> 
    <!-- Bootsrap link -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
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
                    <a href="#" class="btn btn-rounded" style="margin:5">Films</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="btn btn-rounded" style="margin:5">Series</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0" style="margin-right:100">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
            </div>
    <div class="signIn">
    <div class="signIn">
        <?php if (isset($_SESSION['auth'])): ?>
            <a href="#" class="btn btn-rounded-user"><span><?php echo $_SESSION['auth'] ?></span>
            <a href="./logout.php" class="btn btn-rounded"><i class="fas fa-sign-in-alt"></i><span class="smIcon"> Log Out </span></a>
        <?php else: ?>
        <a href="./register.php" class="btn btn-rounded"><i class="fas fa-user-plus"></i><span class="smIcon"> Register </span></a>
        <a href="./login.php" class="btn btn-rounded"><i class="fas fa-sign-in-alt"></i><span class="smIcon"> Log In </span></a>
        <?php endif; ?>
    </div>
 
    </nav>
   
</header>

<section class="page">
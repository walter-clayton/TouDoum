<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- FontAwesome link -->
    <script src="https://kit.fontawesome.com/23325f0d76.js" crossorigin="anonymous"></script>
    <!-- icons library-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/23325f0d76.js"></script>
    <!-- Bootsrap link -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Call the carousel -->
    <link rel="stylesheet" href="./css/style.css">
    <title>TouDoum - Watch Your Favourite Series & Movies Online</title>
</head>

<body>
<!-- HEADER -->
<?php
include('./header.php');
?>

<!-- SECTION -->
<section class="section-content">
    <div class="showcase-content">
        <img src="./img/Logo-TouDoum.png" alt="logo" id="logo-Big">
        <h1>See what's next</h1>
        <div class="screen">
            <i class="fas fa-tv fa-3x"></i>
            <i class="fas fa-tablet-alt fa-3x"></i>
            <i class="fas fa-mobile-alt fa-3x"></i>
        </div>
        <p>Watch anywhere. Cancel Anytime</p>
        <a href="./gallery.php" class="btn btn-xl"> Discover  <i class="fas fa-chevron-circle-right"></i></a>
        <a href="./register.php" class="btn btn-xl">Register <i class="fas fa-chevron-circle-right"></i></a>
    </div>
</section>


<?php
include('./footer.php');
?>

</body>

</html>
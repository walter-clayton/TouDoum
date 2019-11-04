<?php
include './inc/functionsGallery.php';

// Connect to MySQL
$pdo = pdo_connect_mysql();
// MySQL query that selects all the images
$stmt = $pdo->query('SELECT * FROM film ORDER BY uploaded_date DESC');
$images = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!-- HEADER -->
<!-- php -->
<?php
include './header.php' ;
?>

<!-- IF LOGGED OUT NO ACCESS-->
<?php 
require './inc/functions.php';
logged_only();
?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div id="carouselExampleControlsf" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                <h3 style="color:red">Favoris</h3>
                <!-- DEBUT PREMIER SLIDE-->
                        <div class="carousel-item active">
                            <div class="row">
                                <div class="col-md-2">
                                    <img src="./images/transparent.png">
                                </div>
                                <div class="col-md-2">
                                    <a href="comments.php?id=1"><img src="./images/img1.jpg"></a>
                                </div>
                                <div class="col-md-2">
                                    <a href="comments.php?id=25"><img src="./images/img25.jpg"></a>
                                </div>
                                <div class="col-md-2">
                                    <a href="comments.php?id=14"><img src="./images/img14.jpg"></a>
                                </div>
                                <div class="col-md-2">
                                    <a href="comments.php?id=21"><img src="./images/img21.jpg"></a>
                                </div>
                                <div class="col-md-2">
                                    <img src="./images/transparent.png">
                                </div>
                            </div>
                        </div>
                <!-- FIN PREMIER SLIDE -->
                <!-- DEBUT DEUXIEME SLIDE -->
                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-md-2">
                                    <img src="./images/transparent.png">
                                </div>
                                <div class="col-md-2">
                                    <a href="comments.php?id=24"><img src="./images/img27.jpg"></a>
                                </div>
                                <div class="col-md-2">
                                    <a href="comments.php?id=28"><img src="./images/img28.jpg"></a>
                                </div>
                                <div class="col-md-2">
                                    <a href="comments.php?id=29"><img src="./images/img29.jpg"></a>
                                </div>
                                <div class="col-md-2">
                                    <a href="comments.php?id=33"><img src="./images/img33.jpg"></a>
                                </div>
                                <div class="col-md-2">
                                    <img src="./images/transparent.png">
                                </div>
                            </div>
                        </div>
                <!-- FIN DEUXIEME SLIDE -->
                <!-- DEBUT TROISIEME SLIDE -->
                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-md-2">
                                    <img src="./images/transparent.png">
                                </div>
                                <div class="col-md-2">
                                    <a href="comments.php?id=5"><img src="./images/img5.jpg"></a>
                                </div>
                                <div class="col-md-2">
                                    <a href="comments.php?id=9"><img src="./images/img9.jpg"></a>
                                </div>
                                <div class="col-md-2">
                                    <a href="comments.php?id=8"><img src="./images/img8.jpg"></a>
                                </div>
                                <div class="col-md-2">
                                    <a href="comments.php?id=4"><img src="./images/img4.jpg"></a>
                                </div>
                                <div class="col-md-2">
                                    <img src="./images/transparent.png">
                                </div>
                            </div>
                        </div>
                <!-- FIN TROISIEME SLIDE -->
                </div>
                    <a class="carousel-control-prev" href="#carouselExampleControlsf" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControlsf" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                    </a>
            </div>
        </div>
    </div>
</div>
<br>
<br>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                <h3 style="color:red">Drame</h3>
                <!-- first slide -->
                        <div class="carousel-item active">
                            <div class="row">
                                <div class="col-md-2">
                                    <img src="./images/transparent.png">
                                </div>
                                <div class="col-md-2">
                                    <a href="comments.php?id=2"><img src="./images/img2.jpg"></a>
                                </div>
                                <div class="col-md-2">
                                    <a href="comments.php?id=3"><img src="./images/img3.jpg"></a>
                                </div>
                                <div class="col-md-2">
                                    <a href="comments.php?id=4"><img src="./images/img4.jpg"></a>
                                </div>
                                <div class="col-md-2">
                                    <a href="comments.php?id=6"><img src="./images/img6.jpg"></a>
                                </div>
                                <div class="col-md-2">
                                    <img src="./images/transparent.png">
                                </div>
                            </div>
                        </div>
                <!-- END OF FIRST SLIDE -->
                <!-- DEBUT DEUXIEME SLIDE -->
                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-md-2">
                                    <img src="./images/transparent.png">
                                </div>
                                <div class="col-md-2">
                                    <a href="comments.php?id=7"><img src="./images/img7.jpg"></a>
                                </div>
                                <div class="col-md-2">
                                    <a href="comments.php?id=8"><img src="./images/img8.jpg"></a>
                                </div>
                                <div class="col-md-2">
                                    <a href="comments.php?id=9"><img src="./images/img9.jpg"></a>
                                </div>
                                <div class="col-md-2">
                                    <a href="comments.php?id=12"><img src="./images/img12.jpg"></a>
                                </div>
                                <div class="col-md-2">
                                    <img src="./images/transparent.png">
                                </div>
                            </div>
                        </div>
                <!-- FIN DEUXIEME SLIDE -->
                <!-- DEBUT TROISIEME SLIDE -->
                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-md-2">
                                    <img src="./images/transparent.png">
                                </div>
                                <div class="col-md-2">
                                    <a href="comments.php?id=2"><img src="./images/img2.jpg"></a>
                                </div>
                                <div class="col-md-2">
                                    <a href="comments.php?id=3"><img src="./images/img3.jpg"></a>
                                </div>
                                <div class="col-md-2">
                                    <a href="comments.php?id=4"><img src="./images/img4.jpg"></a>
                                </div>
                                <div class="col-md-2">
                                    <a href="comments.php?id=6"><img src="./images/img6.jpg"></a>
                                </div>
                                <div class="col-md-2">
                                    <img src="./images/transparent.png">
                                </div>
                            </div>
                        </div>
                <!-- FIN TROISIEME SLIDE -->
                </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                    </a>
            </div>
        </div>
    </div>
</div>
<br>
<br>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div id="carouselExampleControls2" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                <h3 style="color:red">Thriller</h3>
                <!-- first slide -->
                        <div class="carousel-item active">
                            <div class="row">
                                <div class="col-md-2">
                                    <img src="./images/transparent.png">
                                </div>
                                <div class="col-md-2">
                                    <a href="comments.php?id=5"><img src="./images/img5.jpg"></a>
                                </div>
                                <div class="col-md-2">
                                    <a href="comments.php?id=6"><img src="./images/img6.jpg"></a>
                                </div>
                                <div class="col-md-2">
                                    <a href="comments.php?id=13"><img src="./images/img13.jpg"></a>
                                </div>
                                <div class="col-md-2">
                                    <a href="comments.php?id=14"><img src="./images/img14.jpg"></a>
                                </div>
                                <div class="col-md-2">
                                    <img src="./images/transparent.png">
                                </div>
                            </div>
                        </div>
                <!-- END OF FIRST SLIDE -->
                <!-- DEBUT DEUXIEME SLIDE -->
                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-md-2">
                                    <img src="./images/transparent.png">
                                </div>
                                <div class="col-md-2">
                                    <a href="comments.php?id=7"><img src="./images/img7.jpg"></a>
                                </div>
                                <div class="col-md-2">
                                    <a href="comments.php?id=8"><img src="./images/img8.jpg"></a>
                                </div>
                                <div class="col-md-2">
                                    <a href="comments.php?id=9"><img src="./images/img9.jpg"></a>
                                </div>
                                <div class="col-md-2">
                                    <a href="comments.php?id=12"><img src="./images/img12.jpg"></a>
                                </div>
                                <div class="col-md-2">
                                    <img src="./images/transparent.png">
                                </div>
                            </div>
                        </div>
                <!-- FIN DEUXIEME SLIDE -->
                <!-- DEBUT TROISIEME SLIDE -->
                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-md-2">
                                    <img src="./images/transparent.png">
                                </div>
                                <div class="col-md-2">
                                    <a href="comments.php?id=12"><img src="./images/img12.jpg"></a>
                                </div>
                                <div class="col-md-2">
                                    <a href="comments.php?id=6"><img src="./images/img6.jpg"></a>
                                </div>
                                <div class="col-md-2">
                                    <a href="comments.php?id=4"><img src="./images/img4.jpg"></a>
                                </div>
                                <div class="col-md-2">
                                    <a href="comments.php?id=9"><img src="./images/img9.jpg"></a>
                                </div>
                                <div class="col-md-2">
                                    <img src="./images/transparent.png">
                                </div>
                            </div>
                        </div>
                <!-- FIN TROISIEME SLIDE -->
                </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls2" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls2" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                    </a>
            </div>
        </div>
    </div>
</div>

<?php
include './footer.php';
?>
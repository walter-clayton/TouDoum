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
                <!-- first slide -->
                        <div class="carousel-item active">
                            <div class="row">
                                <div class="col-md-2">
                                    <img src="./images/transparent.png">
                                </div>
                                <div class="col-md-2">
                                    <a href="comments.php?id=50"><img src="./images/got.jpg"></a>
                                </div>
                                <div class="col-md-2">
                                    <a href="comments.php?id=49"><img src="./images/deadly-class.jpg"></a>
                                </div>
                                <div class="col-md-2">
                                    <a href="comments.php?id=47"><img src="./images/chernobyl.jpg"></a>
                                </div>
                                <div class="col-md-2">
                                    <a href="comments.php?id=44"><img src="./images/you.jpg"></a>
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
                                    <a href="comments.php?id=42"><img src="./images/sex-education.jpg"></a>
                                </div>
                                <div class="col-md-2">
                                    <a href="comments.php?id=40"><img src="./images/euphoria.jpg"></a>
                                </div>
                                <div class="col-md-2">
                                    <a href="comments.php?id=41"><img src="./images/umbrella-academy.jpg"></a>
                                </div>
                                <div class="col-md-2">
                                    <a href="comments.php?id=37"><img src="./images/img37.jpg"></a>
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
                                    <a href="comments.php?id=48"><img src="./images/ted-bundy.jpg"></a>
                                </div>
                                <div class="col-md-2">
                                    <a href="comments.php?id=46"><img src="./images/chambers.jpg"></a>
                                </div>
                                <div class="col-md-2">
                                    <a href="comments.php?id=43"><img src="./images/haunting.jpg"></a>
                                </div>
                                <div class="col-md-2">
                                    <a href="comments.php?id=39"><img src="./images/raising-dion.jpg"></a>
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
            <div id="carouselExampleControls4" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                <h3 style="color:red">Fantastique</h3>
                <!-- first slide -->
                        <div class="carousel-item active">
                            <div class="row">
                                <div class="col-md-2">
                                    <img src="./images/transparent.png">
                                </div>
                                <div class="col-md-2">
                                    <a href="comments.php?id=37"><img src="./images/img37.jpg"></a>
                                </div>
                                <div class="col-md-2">
                                    <a href="comments.php?id=46"><img src="./images/chambers.jpg"></a>
                                </div>
                                <div class="col-md-2">
                                    <a href="comments.php?id=41"><img src="./images/umbrella-academy.jpg"></a>
                                </div>
                                <div class="col-md-2">
                                    <a href="comments.php?id=39"><img src="./images/raising-dion.jpg"></a>
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
                                    <a href="comments.php?id=35"><img src="./images/img35.jpg"></a>
                                </div>
                                <div class="col-md-2">
                                    <a href="comments.php?id=36"><img src="./images/img36.jpg"></a>
                                </div>
                                <div class="col-md-2">
                                    <a href="comments.php?id=45"><img src="./images/another-life.jpg"></a>
                                </div>
                                <div class="col-md-2">
                                    <a href="comments.php?id=50"><img src="./images/got.jpg"></a>
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
                                    <a href="comments.php?id=49"><img src="./images/deadly-class.jpg"></a>
                                </div>
                                <div class="col-md-2">
                                    <a href="comments.php?id=39"><img src="./images/raising-dion.jpg"></a>
                                </div>
                                <div class="col-md-2">
                                    <a href="comments.php?id=37"><img src="./images/img37.jpg"></a>
                                </div>
                                <div class="col-md-2">
                                    <a href="comments.php?id=46"><img src="./images/chambers.jpg"></a>
                                </div>
                                <div class="col-md-2">
                                    <img src="./images/transparent.png">
                                </div>
                            </div>
                        </div>
                <!-- FIN TROISIEME SLIDE -->
                </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls4" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls4" role="button" data-slide="next">
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
            <div id="carouselExampleControls5" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                <h3 style="color:red">Comedie</h3>
                <!-- first slide -->
                        <div class="carousel-item active">
                            <div class="row">
                                <div class="col-md-2">
                                    <img src="./images/transparent.png">
                                </div>
                                <div class="col-md-2">
                                    <a href="comments.php?id=51"><img src="./images/img51.jpg"></a>
                                </div>
                                <div class="col-md-2">
                                    <a href="comments.php?id=52"><img src="./images/img52.jpg"></a>
                                </div>
                                <div class="col-md-2">
                                    <a href="comments.php?id=53"><img src="./images/img53.jpg"></a>
                                </div>
                                <div class="col-md-2">
                                    <a href="comments.php?id=54"><img src="./images/img54.jpg"></a>
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
                                    <a href="comments.php?id=55"><img src="./images/img55.jpg"></a>
                                </div>
                                <div class="col-md-2">
                                    <a href="comments.php?id=56"><img src="./images/img56.jpg"></a>
                                </div>
                                <div class="col-md-2">
                                    <a href="comments.php?id=57"><img src="./images/img57.jpg"></a>
                                </div>
                                <div class="col-md-2">
                                    <a href="comments.php?id=58"><img src="./images/img58.jpg"></a>
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
                                    <a href="comments.php?id=42"><img src="./images/sex-education.jpg"></a>
                                </div>
                                <div class="col-md-2">
                                    <a href="comments.php?id=37"><img src="./images/img37.jpg"></a>
                                </div>
                                <div class="col-md-2">
                                    <a href="comments.php?id=35"><img src="./images/img35.jpg"></a>
                                </div>
                                <div class="col-md-2">
                                    <a href="comments.php?id=41"><img src="./images/umbrella-academy.jpg"></a>
                                </div>
                                <div class="col-md-2">
                                    <img src="./images/transparent.png">
                                </div>
                            </div>
                        </div>
                <!-- FIN TROISIEME SLIDE -->
                </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls5" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls5" role="button" data-slide="next">
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
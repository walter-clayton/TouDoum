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
<!-- SECTION-->
<section>
<h3 style="color:red"> TouDoum</h3>
    <br />
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <div id="imageCarousel" class="carousel slide" data-interval="6000" data-ride="carousel"
                    data-pause="hover" data-wrap="true">

                    <ol class="carousel-indicators">
                        <li data-target="#imageCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#imageCarousel" data-slide-to="1"></li>
                        <li data-target="#imageCarousel" data-slide-to="2"></li>
                        <!--                         <li data-target="#imageCarousel" data-slide-to="3"></li> -->
                    </ol>

                    <div class="carousel-inner">
                        <!-- Series 1 -->
                        <div class="item active">
                            <div class="row">
                                <div class="col-md-2">
                                    <img src="" class="img-responsive">
                                </div>
                                <div class="col-md-2">
                                    <a href="comments.php?id=1"><img src="./images/img1.jpg" class="img-responsive"></a>
                                </div>
                                <div class="col-md-2">
                                    <img src="./images/img2.jpg" class="img-responsive">
                                </div>
                                <div class="col-md-2">
                                    <img src="./images/img3.jpg" class="img-responsive">
                                </div>
                                <div class="col-md-2">
                                    <img src="./images/img4.jpg" class="img-responsive">
                                </div>
                                <div class="col-md-2">
                                    <img src="" class="img-responsive">
                                </div>
                            </div>
                        </div>

                        <!-- Series 2 -->
                        <div class="item">
                            <div class="row">
                            <div class="col-md-2">
                                    <img src="" class="img-responsive">
                                </div>
                                <div class="col-md-2">
                                    <img src="./images/img5.jpg" class="img-responsive">
                                </div>
                                <div class="col-md-2">
                                    <img src="./images/img6.jpg" class="img-responsive">
                                </div>
                                <div class="col-md-2">
                                    <img src="./images/img7.jpg" class="img-responsive">
                                </div>
                                <div class="col-md-2">
                                    <img src="./images/img8.jpg" class="img-responsive">
                                </div>
                                <div class="col-md-2">
                                    <img src="" class="img-responsive">
                                </div>
                            </div>
                        </div>
                        <!-- series 2 -->
                        <div class="item">
                            <div class="row">
                            <div class="col-md-2">
                                    <img src="" class="img-responsive">
                                </div>
                                <div class="col-md-2">
                                    <img src="./images/img9.jpg" class="img-responsive">
                                </div>
                                <div class="col-md-2">
                                    <img src="./images/img10.jpg" class="img-responsive">
                                </div>
                                <div class="col-md-2">
                                    <img src="./images/img11.jpg" class="img-responsive">
                                </div>
                                <div class="col-md-2">
                                    <img src="./images/img12.jpg" class="img-responsive">
                                </div>
                                <div class="col-md-2">
                                    <img src="" class="img-responsive">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END OF SERIES -->

                    <!-- NAVIGATION -->
                    <a href="#imageCarousel" class="carousel-control left" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                    </a>
                    <a href="#imageCarousel" class="carousel-control right" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                    </a>
                </div>

            </div>
        </div>
    </div>
    </section>
    <section>
        <!-- SECTION-->
<h3 style="color:red"> TouDoum</h3>
    <br />
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <div id="imageCarousel2" class="carousel slide" data-interval="6000" data-ride="carousel"
                    data-pause="hover" data-wrap="true">

                    <ol class="carousel-indicators">
                        <li data-target="#imageCarousel2" data-slide-to="0" class="active"></li>
                        <li data-target="#imageCarousel2" data-slide-to="1"></li>
                        <li data-target="#imageCarousel2" data-slide-to="2"></li>
                        <!--                         <li data-target="#imageCarousel" data-slide-to="3"></li> -->
                    </ol>

                    <div class="carousel-inner">
                        <!-- Series 1 -->
                        <div class="item active">
                            <div class="row">
                                <div class="col-md-2">
                                    <img src="" class="img-responsive">
                                </div>
                                <div class="col-md-2">
                                    <img src="./images/img1.jpg" class="img-responsive">
                                </div>
                                <div class="col-md-2">
                                    <img src="./images/img2.jpg" class="img-responsive">
                                </div>
                                <div class="col-md-2">
                                    <img src="./images/img3.jpg" class="img-responsive">
                                </div>
                                <div class="col-md-2">
                                    <img src="./images/img4.jpg" class="img-responsive">
                                </div>
                                <div class="col-md-2">
                                    <img src="" class="img-responsive">
                                </div>
                            </div>
                        </div>

                        <!-- Series 2 -->
                        <div class="item">
                            <div class="row">
                            <div class="col-md-2">
                                    <img src="" class="img-responsive">
                                </div>
                                <div class="col-md-2">
                                    <img src="./images/img5.jpg" class="img-responsive">
                                </div>
                                <div class="col-md-2">
                                    <img src="./images/img6.jpg" class="img-responsive">
                                </div>
                                <div class="col-md-2">
                                    <img src="./images/img7.jpg" class="img-responsive">
                                </div>
                                <div class="col-md-2">
                                    <img src="./images/img8.jpg" class="img-responsive">
                                </div>
                                <div class="col-md-2">
                                    <img src="" class="img-responsive">
                                </div>
                            </div>
                        </div>
                        <!-- series 2 -->
                        <div class="item">
                            <div class="row">
                            <div class="col-md-2">
                                    <img src="" class="img-responsive">
                                </div>
                                <div class="col-md-2">
                                    <img src="./images/img9.jpg" class="img-responsive">
                                </div>
                                <div class="col-md-2">
                                    <img src="./images/img10.jpg" class="img-responsive">
                                </div>
                                <div class="col-md-2">
                                    <img src="./images/img11.jpg" class="img-responsive">
                                </div>
                                <div class="col-md-2">
                                    <img src="./images/img12.jpg" class="img-responsive">
                                </div>
                                <div class="col-md-2">
                                    <img src="" class="img-responsive">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END OF SERIES -->

                    <!-- NAVIGATION -->
                    <a href="#imageCarousel2" class="carousel-control left" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                    </a>
                    <a href="#imageCarousel2" class="carousel-control right" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                    </a>
                </div>

            </div>
        </div>
    </div>
    </section>

    <section>
        <!-- SECTION-->
<h3 style="color:red"> TouDoum</h3>
    <br />
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <div id="imageCarousel3" class="carousel slide" data-interval="6000" data-ride="carousel"
                    data-pause="hover" data-wrap="true">

                    <ol class="carousel-indicators">
                        <li data-target="#imageCarousel3" data-slide-to="0" class="active"></li>
                        <li data-target="#imageCarousel3" data-slide-to="1"></li>
                        <li data-target="#imageCarousel3" data-slide-to="2"></li>
                        <!--                         <li data-target="#imageCarousel" data-slide-to="3"></li> -->
                    </ol>

                    <div class="carousel-inner">
                        <!-- Series 1 -->
                        <div class="item active">
                            <div class="row">
                                <div class="col-md-2">
                                    <img src="" class="img-responsive">
                                </div>
                                <div class="col-md-2">
                                    <img src="./images/img1.jpg" class="img-responsive">
                                </div>
                                <div class="col-md-2">
                                    <img src="./images/img2.jpg" class="img-responsive">
                                </div>
                                <div class="col-md-2">
                                    <img src="./images/img3.jpg" class="img-responsive">
                                </div>
                                <div class="col-md-2">
                                    <img src="./images/img4.jpg" class="img-responsive">
                                </div>
                                <div class="col-md-2">
                                    <img src="" class="img-responsive">
                                </div>
                            </div>
                        </div>

                        <!-- Series 2 -->
                        <div class="item">
                            <div class="row">
                            <div class="col-md-2">
                                    <img src="" class="img-responsive">
                                </div>
                                <div class="col-md-2">
                                    <img src="./images/img5.jpg" class="img-responsive">
                                </div>
                                <div class="col-md-2">
                                    <img src="./images/img6.jpg" class="img-responsive">
                                </div>
                                <div class="col-md-2">
                                    <img src="./images/img7.jpg" class="img-responsive">
                                </div>
                                <div class="col-md-2">
                                    <img src="./images/img8.jpg" class="img-responsive">
                                </div>
                                <div class="col-md-2">
                                    <img src="" class="img-responsive">
                                </div>
                            </div>
                        </div>
                        <!-- series 2 -->
                        <div class="item">
                            <div class="row">
                            <div class="col-md-2">
                                    <img src="" class="img-responsive">
                                </div>
                                <div class="col-md-2">
                                    <img src="./images/img9.jpg" class="img-responsive">
                                </div>
                                <div class="col-md-2">
                                    <img src="./images/img10.jpg" class="img-responsive">
                                </div>
                                <div class="col-md-2">
                                    <img src="./images/img11.jpg" class="img-responsive">
                                </div>
                                <div class="col-md-2">
                                    <img src="./images/img12.jpg" class="img-responsive">
                                </div>
                                <div class="col-md-2">
                                    <img src="" class="img-responsive">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END OF SERIES -->

                    <!-- NAVIGATION -->
                    <a href="#imageCarousel3" class="carousel-control left" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                    </a>
                    <a href="#imageCarousel3" class="carousel-control right" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                    </a>
                </div>

            </div>
        </div>
    </div>
    </section>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
<!-- FOOTER PHP -->
<?php
include './footer.php';
?>


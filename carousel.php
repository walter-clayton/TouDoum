
<!doctype html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap tutorial for begineers</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>

    <h3 style="color:red"> TouDoum</h1>
    <br />
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <div id="imageCarousel" class="carousel slide" data-interval="2000" data-ride="carousel"
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

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js">
    </script>
    <script src="bootstrap/js/bootstrap.min.js"></script>

   
</body>

</html>

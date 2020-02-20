<?php
require_once("classes/crud.php");

$courses = new CRUD;
$result = $courses->getAllcourses();
$Effect = $courses->getAll();

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Accumulator</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicons -->
    <link href="img/favicon-1.png" rel="icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

    <!-- Bootstrap CSS File -->
    <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Libraries CSS Files -->
    <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/8756c433ed.js" crossorigin="anonymous"></script>

    <!-- Main Stylesheet File -->
    <link href="css/style.css" rel="stylesheet">

    <!-- =======================================================
    Theme Name: Accumulator
    Theme URL: https://bootstrapmade.com/real-estate-agency-bootstrap-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body>

    <div class="click-closed"></div>
    <!--/ Form Search Star /-->
    <div class="box-collapse">
        <div class="title-box-d">
            <h3 class="title-d">Search Courses</h3>
        </div>
        <span class="close-box-collapse right-boxed ion-ios-close"></span>
        <div class="box-collapse-wrap form">
            <form class="form-a">
                <div class="row">
                    <div class="col-md-12 mb-2">
                        <div class="form-group">
                            <label for="Type">Keyword</label>
                            <input type="text" class="form-control form-control-lg form-control-a" placeholder="Keyword">
                        </div>
                    </div>
                    <div class="col-md-6 mb-2">
                        <div class="form-group">
                            <label for="Type">Genre</label>
                            <select class="form-control form-control-lg form-control-a" id="Type">
                                <option>Development</option>
                                <option>Business </option>
                                <option>IT & Software</option>
                                <option>Personal Development</option>
                                <option>Health & Fitness</option>
                                <option>Music</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6 mb-2">
                        <div class="form-group">
                            <label for="city">Time</label>
                            <select class="form-control form-control-lg form-control-a" id="city">
                                <option>Anytime</option>
                                <option>Morning </option>
                                <option>Daytime</option>
                                <option>Night</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6 mb-2">
                        <div class="form-group">
                            <label for="bedrooms">Class style</label>
                            <select class="form-control form-control-lg form-control-a" id="bedrooms">
                                <option>Any</option>
                                <option>Private</option>
                                <option>Group</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6 mb-2">
                        <div class="form-group">
                            <label for="price">Min Price</label>
                            <select class="form-control form-control-lg form-control-a" id="price">
                                <option>Unlimite</option>
                                <option>Free</option>
                                <option>$50</option>
                                <option>$100</option>
                                <option>$150</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-b">Search Property</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!--/ Form Search End /-->

    <!--/ Nav Star /-->
    <nav class="navbar navbar-default navbar-trans navbar-expand-lg fixed-top">
        <div class="container">
            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault" aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
                <span></span>
                <span></span>
                <span></span>
            </button>
            <a class="navbar-brand text-brand mb-2" href="index.html"><img src="img/Logo-1.png" alt="Logo" class=""></a>
            <button type="button" class="btn btn-link nav-search navbar-toggle-box-collapse d-md-none" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-expanded="false">
                <span class="fa fa-search" aria-hidden="true"></span>
            </button>
            <div class="navbar-collapse collapse justify-content-center" id="navbarDefault">
                <ul class="navbar-nav ml-5 pl-5">
                    <li class="nav-item ml-5 pl-5">
                        <a class="nav-link" href="innerindex.php">Home</a>
                    </li>
                    <li class="nav-item ml-3">
                        <a class="nav-link" href="#">About Us</a>
                    </li>
                    <li class="nav-item ml-3">
                        <a class="nav-link active" href="innercourses.php">Courses</a>
                    </li>
                    <li class="nav-item ml-3">
                        <a class="nav-link" href="#">Blog</a>
                    </li>
                    <li class="nav-item ml-3">
                        <a class="nav-link" href="contact.html">Contact</a>
                    </li>
                </ul>
            </div>
            <a type="button" href="#" class="btn btn-b-n text-white d-md-block mr-3 bg-dark">
                My courses
            </a>
            <form action="action.php" method="post" enctype="multipart/form-data">
                <button type="button" name="logout" class="btn btn-b-n text-white d-md-block mr-3 bg-danger" data-toggle="tooltip" data-placement="bottom" title="Log Out">
                    <span class="fas fa-sign-out-alt"></span>
                </button>
            </form>
        </div>
    </nav>
    <!--/ Nav End /-->

    <!--/ Courses /-->
    <div class="wrapper style">
        <img class="blur style" src="img/C-img01.jpg" alt="image">
        <div class="col-md-10">
            <div class="text style">Cources</div>
        </div>
    </div>
    <!--/ Courses End /-->

    <!--/ Filters /-->
    <div class="Filter w-100">

        <div class="container col-md-11 row m-auto ">
            <div class="text w-25 ml-4" style="margin-top: 2%;">
                <div class="container"> <input class="form-control" id="myInput" type="text" placeholder="Search..">
                    <!--/ Mylist /
                    
                    <div id="myList">
                        <li class="list-group-item">First item</li>
                        <li class="list-group-item">Second item</li>
                        <li class="list-group-item">Third item</li>
                        <li class="list-group-item">Fourth</li>
                    </div>
                    
                -->
                </div>
            </div>

            <div class="dropdown" style="margin-top: 1.5%;">
                <button class="btn btn-light dropdown-toggle ml-4" type="button" data-toggle="dropdown">Genre
                    <span class="caret"></span></button>
                <ul class="dropdown-menu">
                    <li><a href="#">Development</a></li>
                    <li><a href="#">Business</a></li>
                    <li><a href="#">IT & Software</a></li>
                    <li><a href="#">Personal Development</a></li>
                    <li><a href="#">Health & Fitness</a></li>
                    <li><a href="#">Music</a></li>
                </ul>

                <button class="btn btn-light dropdown-toggle ml-4" type="button" data-toggle="dropdown">Time
                    <span class="caret"></span></button>
                <ul class="dropdown-menu">
                    <li><a href="#">Anytime</a></li>
                    <li><a href="#">Morning</a></li>
                    <li><a href="#">Daytime</a></li>
                    <li><a href="#">Night</a></li>
                </ul>


                <button class="btn btn-light dropdown-toggle  ml-4" type="button" data-toggle="dropdown">Class Style
                    <span class="caret"></span></button>
                <ul class="dropdown-menu">
                    <li><a href="#">Private</a></li>
                    <li><a href="#">Group</a></li>
                </ul>


                <button class="btn btn-light dropdown-toggle ml-4" type="button" data-toggle="dropdown">Min Price
                    <span class="caret"></span></button>
                <ul class="dropdown-menu">
                    <li><a href="#">Free</a></li>
                    <li><a href="#">$50</a></li>
                    <li><a href="#">$100</a></li>
                    <li><a href="#">$150</a></li>
                </ul>



            </div>
        </div>
        <!--/ Filter End /-->
        <section class="section-property section-t3">
            <div class="container">
                <div class="row">
                    <table>
                        <tbody>
                            <?php
                            foreach ($Effect as $row) {
                                $id = $row['Id'];
                                $Cid = $row['Cou_Id'];
                                $Lid = $row['Les_Id'];
                                $img = $row["Res_Filename"];
                                $video = $row["Video"];
                                echo "<a href='innerlessons.php?id=$id' class='col-md-3 mt-5 border bg-light rounded'>";
                                echo "<div class='w-100 mt-4 '><img src='upload/$img' class='w-100' style='height:160px;'></div>";
                                // echo $id;
                                echo "<div class='clearfix'>";
                                echo "<h5 class='mt-3 float-left w-50' style='line-height:1.5em;'>" . $row['Cou_Name'] . "</h5>";
                                echo "<div class='w-50 text-center bg-dark text-white float-right p-2' style='font-size:60%;  white-space:nowrap;' >" . $row['G_Name'] . "</div>";
                                echo "</div>";
                                echo "<div>" . $row['Cou_Description'] . "</div>";
                                echo "<div class='button float-right bg-primary text-white my-3 ml-3 p-3'> Price : 300 PHP <span class='ion-ios-arrow-forward'></span> </div>";
                                echo "</div>";
                                echo "</a>";
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>

        <!--/ Property Start
        <section class="section-property section-t4">
            <div class="container">
                <div class="row">
                    <div class="">
                        <div class="title-wrap d-flex justify-content-between">
                            <div class="title-box">
                                <h2 class="title-a">Latest Courses</h2>
                            </div>

                        </div>
                    </div>
                </div>
                <div id="property-carousel" class="owl-carousel owl-theme">
                    <div class="carousel-item-b">
                        <div class="card-box-a card-shadow">
                            <div class="img-box-a">
                                <img src="img/Learn-1.png" alt="" class="img-a img-fluid">
                            </div>
                            <div class="card-overlay">
                                <div class="card-overlay-a-content">
                                    <div class="card-header-a">
                                        <h2 class="card-title-a">
                                            <a href="property-single.html">Magnifique
                                                <br /> French Language</a>
                                        </h2>
                                    </div>
                                    <div class="card-body-a">
                                        <div class="price-box d-flex">
                                            <span class="price-a">Tuition | $ 10</span>
                                        </div>
                                        <a href="#" class="link-a">Click here to view
                                            <span class="ion-ios-arrow-forward"></span>
                                        </a>
                                    </div>
                                    <div class="card-footer-a">
                                        <ul class="card-info d-flex justify-content-around">
                                            <li>
                                                <h4 class="card-info-title">Our goal</h4>
                                                <span>
                                                    <sup>To have a conversational French for travel.</sup>
                                                </span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item-b">
                        <div class="card-box-a card-shadow">
                            <div class="img-box-a">
                                <img src="img/Learn-2.png" alt="" class="img-a img-fluid">
                            </div>
                            <div class="card-overlay">
                                <div class="card-overlay-a-content">
                                    <div class="card-header-a">
                                        <h2 class="card-title-a">
                                            <a href="property-single.html">
                                                <br /> How to hold the optimal meeting</a>
                                        </h2>
                                    </div>
                                    <div class="card-body-a">
                                        <div class="price-box d-flex">
                                            <span class="price-a">Tuition | $ 15</span>
                                        </div>
                                        <a href="property-single.html" class="link-a">Click here to view
                                            <span class="ion-ios-arrow-forward"></span>
                                        </a>
                                    </div>
                                    <div class="card-footer-a">
                                        <ul class="card-info d-flex justify-content-around">
                                            <li>
                                                <h4 class="card-info-title">Our goal</h4>
                                                <span>To surpass your last presentation.
                                                </span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item-b">
                        <div class="card-box-a card-shadow">
                            <div class="img-box-a">
                                <img src="img/Learn-3.png" alt="" class="img-a img-fluid">
                            </div>
                            <div class="card-overlay">
                                <div class="card-overlay-a-content">
                                    <div class="card-header-a">
                                        <h2 class="card-title-a">
                                            <a href="property-single.html">Being in the pink
                                                <br /> with a superb cuisine </a>
                                        </h2>
                                    </div>
                                    <div class="card-body-a">
                                        <div class="price-box d-flex">
                                            <span class="price-a">Tuition | $ 10</span>
                                        </div>
                                        <a href="property-single.html" class="link-a">Click here to view
                                            <span class="ion-ios-arrow-forward"></span>
                                        </a>
                                    </div>
                                    <div class="card-footer-a">
                                        <ul class="card-info d-flex justify-content-around">
                                            <li>
                                                <h4 class="card-info-title">Our goal</h4>
                                                <span>To triumph health with your own dishes.
                                                </span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item-b">
                        <div class="card-box-a card-shadow">
                            <div class="img-box-a">
                                <img src="img/Learn-4.png" alt="" class="img-a img-fluid">
                            </div>
                            <div class="card-overlay">
                                <div class="card-overlay-a-content">
                                    <div class="card-header-a">
                                        <h2 class="card-title-a">
                                            <a href="property-single.html">3D modeling
                                                <br /> by Maya</a>
                                        </h2>
                                    </div>
                                    <div class="card-body-a">
                                        <div class="price-box d-flex">
                                            <span class="price-a">Tuition | $ 15</span>
                                        </div>
                                        <a href="property-single.html" class="link-a">Click here to view
                                            <span class="ion-ios-arrow-forward"></span>
                                        </a>
                                    </div>
                                    <div class="card-footer-a">
                                        <ul class="card-info d-flex justify-content-around">
                                            <li>
                                                <h4 class="card-info-title">Our goal</h4>
                                                <span>
                                                    How to create smooth and rough surface.
                                                </span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item-b">
                        <div class="card-box-a card-shadow">
                            <div class="img-box-a">
                                <img src="img/Learn-5.png" alt="" class="img-a img-fluid">
                            </div>
                            <div class="card-overlay">
                                <div class="card-overlay-a-content">
                                    <div class="card-header-a">
                                        <h2 class="card-title-a">
                                            <a href="property-single.html">New unique
                                                <br /> travel itinerary</a>
                                        </h2>
                                    </div>
                                    <div class="card-body-a">
                                        <div class="price-box d-flex">
                                            <span class="price-a">Tuition | $ 15</span>
                                        </div>
                                        <a href="property-single.html" class="link-a">Click here to view
                                            <span class="ion-ios-arrow-forward"></span>
                                        </a>
                                    </div>
                                    <div class="card-footer-a">
                                        <ul class="card-info d-flex justify-content-around">
                                            <li>
                                                <h4 class="card-info-title">Our Goal</h4>
                                                <span>Make nonsense of typical travel plans.

                                                </span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        / Property End /-->


        <!--/ Pagenation Start /-->

        <nav aria-label="Page navigation example" style="margin-top:40px;">
            <ul class="pagination justify-content-center">
                <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1">Previous</a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                    <a class="page-link" href="#">Next</a>
                </li>
            </ul>
        </nav>
        <!--/ Pagenation end /-->

        <!--/ footer Star /-->
        <section class="section-footer">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-4">
                        <div class="widget-a">
                            <div class="w-header-a">
                                <h3 class="w-title-a text-brand"><a href="index.html">Accumulator</a></h3>
                            </div>
                            <div class="w-body-a">
                                <p class="w-text-a color-text-a">
                                    The world’s largest selection of courses
                                    Choose from over 100,000 online video courses with new additions published every month
                                </p>
                            </div>
                            <div class="w-footer-a">
                                <ul class="list-unstyled">
                                    <li class="color-a">
                                        <span class="color-text-a">Phone .</span> accumulator@example.com</li>
                                    <li class="color-a">
                                        <span class="color-text-a">Email .</span> +54 356 945234</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-4 section-md-t3">
                        <div class="widget-a">
                            <div class="w-header-a">
                                <h3 class="w-title-a text-brand">The Company</h3>
                            </div>
                            <div class="w-body-a">
                                <div class="w-body-a">
                                    <ul class="list-unstyled">
                                        <li class="item-list-a">
                                            <i class="fa fa-angle-right"></i> <a href="#">Site Map</a>
                                        </li>
                                        <li class="item-list-a">
                                            <i class="fa fa-angle-right"></i> <a href="#">Legal</a>
                                        </li>
                                        <li class="item-list-a">
                                            <i class="fa fa-angle-right"></i> <a href="#">Agent Admin</a>
                                        </li>
                                        <li class="item-list-a">
                                            <i class="fa fa-angle-right"></i> <a href="#">Careers</a>
                                        </li>
                                        <li class="item-list-a">
                                            <i class="fa fa-angle-right"></i> <a href="#">Affiliate</a>
                                        </li>
                                        <li class="item-list-a">
                                            <i class="fa fa-angle-right"></i> <a href="#">Privacy Policy</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-4 section-md-t3">
                        <div class="widget-a">
                            <div class="w-header-a">
                                <h3 class="w-title-a text-brand">Genre</h3>
                            </div>
                            <div class="w-body-a">
                                <ul class="list-unstyled">
                                    <li class="item-list-a">
                                        <i class="fa fa-angle-right"></i> <a href="#">Develpment</a>
                                    </li>
                                    <li class="item-list-a">
                                        <i class="fa fa-angle-right"></i> <a href="#">Business</a>
                                    </li>
                                    <li class="item-list-a">
                                        <i class="fa fa-angle-right"></i> <a href="#">IT & Software</a>
                                    </li>
                                    <li class="item-list-a">
                                        <i class="fa fa-angle-right"></i> <a href="#">Personal Devedlopment</a>
                                    </li>
                                    <li class="item-list-a">
                                        <i class="fa fa-angle-right"></i> <a href="#">Health & Fitness</a>
                                    </li>
                                    <li class="item-list-a">
                                        <i class="fa fa-angle-right"></i> <a href="#">Music</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <nav class="nav-footer">
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <a href="#">Home</a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#">About Us</a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#">Courses</a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#">Blog</a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#">Contact</a>
                                </li>
                            </ul>
                        </nav>
                        <div class="socials-a">
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <a href="#">
                                        <i class="fab fa-facebook" aria-hidden="true"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#">
                                        <i class="fab fa-twitter" aria-hidden="true"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#">
                                        <i class="fab fa-instagram" aria-hidden="true"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#">
                                        <i class="fab fa-pinterest-p" aria-hidden="true"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#">
                                        <i class="fab fa-dribbble" aria-hidden="true"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="copyright-footer">
                            <p class="copyright color-text-a">
                                &copy; Copyright
                                <span class="color-a">Accumulator</span> All Rights Reserved.
                            </p>
                        </div>
                        <div class="credits">
                            <!--
              All the links in the footer should remain intact.
              You can delete the links only if you purchased the pro version.
              Licensing information: https://bootstrapmade.com/license/
              Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=EstateAgency
            -->
                            Designed by <a href="https://bootstrapmade.com/">Shun Sasaki</a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!--/ Footer End /-->

        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
        <div id="preloader"></div>

        <!-- JavaScript Libraries -->
        <script src="lib/jquery/jquery.min.js"></script>
        <script src="lib/jquery/jquery-migrate.min.js"></script>
        <script src="lib/popper/popper.min.js"></script>
        <script src="lib/bootstrap/js/bootstrap.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="lib/scrollreveal/scrollreveal.min.js"></script>
        <!-- Contact Form JavaScript File -->
        <script src="contactform/contactform.js"></script>

        <!-- Template Main Javascript File -->
        <script src="js/main.js"></script>

        <!-- dropdown -->
        <script>
            $(document).ready(function() {
                $("#myInput").on("keyup", function() {
                    var value = $(this).val().toLowerCase();
                    $(".dropdown-menu li").filter(function() {
                        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                    });
                });
            });

            $(document).ready(function() {
                $("#myInput").on("keyup", function() {
                    var value = $(this).val().toLowerCase();
                    $("#myList li").filter(function() {
                        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                    });
                });
            });
        </script>

</body>

</html>
<?php
require_once("classes/crud.php");

$id = $_GET['id'];

$courses = new CRUD;
$result = $courses->getAllcourses();
$outturn = $courses->getLessons($id);
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

    <!--/ Video /-->
    <div class="row">
        <div class="col-md-9 float-left" style="margin-top: 120px; height:580px;">
            <?php
            foreach ($outturn as $row) {
                $video = $row["Video"];
                echo "<tr>";
                echo "<td ><iframe style='width:100%; height:100%;' src='$video'></iframe></td>";

                echo "</tr>";
            }
            ?>
        </div>


        <!--/ Lesson Section start /-->
        <div class="float-left w-100 col-md-3 " style="margin-top: 120px;">
            <?php
            foreach ($outturn as $row) {
                $video = $row["Video"];
                echo "<div class='btn-group-vertical'>";
                echo "<a href='#' class='btn btn-success w-100'>上端ボタン</a>";
                echo "<a href='#' class='btn btn-success w-100'>上端ボタン</a>";
                echo "<a href='#' class='btn btn-success'>上端ボタン</a>";
                echo "</div>";
            }
            ?>

        </div>

        <!--/ Lesson section end /-->
    </div>
    <!--/ Video End /-->
    <div id="accordion">
        <div class="card">
            <div class="card-header" id="headingOne">
                <h5 class="mb-0 pl-5 ml-5 font-weight-bold">
                    <button class="btn btn-link " data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Description
                    </button>
                </h5>
            </div>

            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                <div class="card-body w-75" style="margin-left: 150px;">
                    <?php
                    foreach ($outturn as $row) {
                        echo $row['Les_Description'];
                    }
                    ?> </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header " id="headingTwo">
                <h5 class="mb-0 pl-5 ml-5 ">
                    <button class="btn btn-link collapsed " data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Q&A
                    </button>
                </h5>
            </div>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                <div class="card-body w-75" style="margin-left: 150px;">
                    Q&A, also Q and A, generally abbreviates the phrase "question and answer", and refers to a period of time or an occasion that follows a type of interview format, often public, when an individual "answers questions that are asked by a reporter, by the people in an audience, etc." </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingThree">
                    <h5 class="mb-0 pl-5 ml-5 ">
                        <button class=" btn btn-link collapsed " data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            BookMarks
                        </button>
                    </h5>
                </div>
                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                    <div class="card-body w-75" style="margin-left: 150px;">
                        A bookmark is a thin marker, commonly made of card, leather, or fabric, used to keep a reader's place in a book and to enable them to easily return to it. Alternate materials for bookmarks are paper, metals like silver and brass, silk, wood, cord (sewing), and plastic. Some books may have one or more bookmarks made of woven ribbon sewn into the binding. Other bookmarks incorporate a page-flap that enables them to be clipped on a page. </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingFour">
                    <h5 class="mb-0 pl-5 ml-5 font-weight-bold">
                        <button class="btn btn-link collapsed " data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseThree">
                            Announcement
                        </button>
                    </h5>
                </div>
                <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
                    <div class="card-body w-75" style="margin-left: 150px;">
                        An announcement is a Usenet, mailing list or e-mail message sent to notify subscribers that a software project has made a new release version. Newsgroup announcement recipients often have a name like "comp.somegroup.announce". Mailing list announcement recipients often have a name like "toolname-announce". In an announcement, the subject line commonly contains the abbreviated prefix ANN: or [ANN]. </div>
                </div>
            </div>
        </div>


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
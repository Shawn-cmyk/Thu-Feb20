<?php
require_once("classes/crud.php");

$courses = new CRUD;
$result = $courses->getAllcourses();
$outcome = $courses->getAllgenre();

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
    <div class="formback">
        <!--/ Nav Star /-->
        <nav class="navbar navbar-default navbar-trans navbar-expand-lg ">
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
                            <a class="nav-link active" href="Dashboard.php">Dashboard</a>
                        </li>
                        <li class="nav-item ml-3">
                            <a class="nav-link" href="#">Estimate</a>
                        </li>
                        <li class="nav-item ml-3">
                            <a class="nav-link" href="#">Charts</a>
                        </li>
                        <li class="nav-item ml-3">
                            <a class="nav-link" href="#">Popularity
                            </a>
                        </li>
                    </ul>
                </div>
                <a type="button" href="login.php" class="btn btn-b-n text-white d-md-block mr-3 bg-danger" data-toggle="tooltip" data-placement="bottom" title="Log Out">
                    <span class="fas fa-sign-out-alt"></span>
                </a>
            </div>
        </nav>
        <!--/ Nav End /-->


        <!--/ Container Start /-->
        <div class="container">
            <h4 class="FormET text-white w-50 p-3 mt-5">Welome to Admin Pages</h4>

            <div class="float-left col-md-3">
                <!--/ Add course Start /-->
                <div class="card-body bg-white  mt-3">
                    <h5 class="title-admin">Add Courses</h5>
                    <form action="action.php" method="post">
                        <div class="form-group">
                            <div class="row m-auto">
                                <div class="w-100 mt-3">
                                    <input type="text" name="course" placeholder="Enter Course Name" class="form-control">
                                    <textarea name="description" placeholder="Enter Course Description" class="md-textarea mt-3 form-control" rows="6"></textarea>
                                    <select name="genreform" class="Form-G rounded mt-3 w-100 ">
                                        <?php
                                        foreach ($outcome as $row) {
                                            $G_Id = $row["G_Id"];
                                            echo "<option value='$G_Id'>" . $row["G_Name"] . "</option>";
                                        }
                                        ?>
                                    </select>
                                    <button type="submit" name="addCourse" class="btn btn-primary mt-3 btn-block">Submit</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <!--/ Add course Finish /-->

                <!--/ Add Genre Start /-->
                <div class="card-body bg-white mt-3">
                    <h5 class="title-admin">Add Genres</h5>
                    <form action="action.php" method="post">
                        <div class="form-group">
                            <div class="row m-auto">
                                <div class="w-100 mt-3">
                                    <input type="text" name="genre" placeholder="Enter Genre Name" class="form-control">

                                    <button type="submit" name="addGenre" class="btn btn-primary mt-3 btn-block">Submit</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <!--/ Add Genre Finish /-->


                <!--/ Add Lessons Start /-->
                <div class="card-body bg-white mt-3">
                    <h5 class="title-admin">Add Lessons</h5>
                    <form action="action.php" method="post">
                        <div class="form-group">
                            <div class="row m-auto">
                                <div class="w-100 mt-3">
                                    <input type="text" name="lesson" placeholder="Enter Lesson Name" class="form-control">
                                    <select name="course" class="Form-G rounded  mt-4 w-100 ">
                                        <?php
                                        foreach ($result as $row) {
                                            $Id = $row["Cou_Id"];
                                            echo "<option value='$Id'>" . $row["Cou_Name"] . "</option>";
                                        }
                                        ?>
                                    </select>
                                    <button type="submit" name="addLessons" class="btn btn-primary mt-3 btn-block">Submit</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <!--/ Add Lessons Finish /-->


                <!--/ Edit Genres Start /-->
                <div class="card-body bg-white  mt-3">
                    <h5 class="title-admin">Edit Genres</h5>
                    <form action="action.php" method="post">
                        <div class="form-group">
                            <div class="row m-auto">
                                <div class="w-100 mt-3">
                                    <input type="text" name="genre" placeholder="Enter Genre Name" class="form-control">
                                    <select name="genreform" class="Form-G rounded mt-3 w-100 ">
                                        <?php
                                        foreach ($outcome as $row) {
                                            $G_Id = $row["G_Id"];
                                            echo "<option value='$G_Id'>" . $row["G_Name"] . "</option>";
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <button type="submit" name="editGenre" class="btn btn-primary mt-3 btn-block">Submit</button>
                        </div>
                    </form>
                </div>
                <!--/ Edit Genres Finish /-->
            </div>
        </div>

        <table class="table bg-white table-bordered table-striped table-bordered table-hover col-md-8 mt-3 float-left">
            <thead>
                <th>ID</th>
                <th>COURSE</th>
                <th>Course Description</th>
                <th colspan="4">Genre</th>
            </thead>
            <tbody>
                <?php
                foreach ($result as $row) {
                    $id = $row['Cou_Id'];
                    echo "<tr>";
                    // echo $id;
                    echo "<td>" . $row['Cou_Id'] . "</td>";
                    echo "<td><a href='lesson.php?id=$id'>" . $row['Cou_Name'] . "</a></td>";
                    echo "<td>" . $row["Cou_Description"] . "</td>";
                    echo "<td>" . $row["G_Name"] . "</td>";
                    echo "<td> <a href='resources.php?id=$id' class='btn btn-flat-double-border w-100'>Add Resources </a></td>";
                    echo "<td> <a href='edit.php?id=$id' name='edit'  class='btn btn-flat-double-border w-100'> Edit </a></td>";
                    echo "<td> <a href='Action.php?actiontype=delete&id=$id'class='btn-flat-double-border-R w-100'>Delete </a></td>";
                    echo "</tr>";
                }

                ?>
            </tbody>
        </table>




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

</body>

</html>
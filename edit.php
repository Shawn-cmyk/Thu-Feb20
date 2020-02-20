<?php
require_once("classes/crud.php");
$id = $_GET['id'];
$courses = new CRUD;
$result = $courses->getAllcourses();
$outcome = $courses->getAllgenre();
$row = $courses->getOneofcourses($id);

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


        <div class="container">
            <div class="clearfix">
                <h4 class="FormET text-white w-50 p-3 mt-5 float-left">Edit Pages</h4>
                <div class="row float-right">
                    <div class="col-md-4">
                        <a href="dashboard.php" class="btn-flat-simple mr-2 mt-5" style="width:200px;">
                            <i class=" fa fa-caret-right"></i> Back to Dashboard
                        </a>
                    </div>
                </div>
            </div>



            <div class="container col-md-8 pt-5 m-auto">
                <div class="card-body bg-white ">
                    <h5 class="title-admin">Edit Courses</h5>
                    <form action="action.php" method="post">
                        <div class="form-group">
                            <div class="row m-auto">
                                <div class="w-100 mt-2">
                                    <input type="text" name="course" placeholder="<?php echo $row['Cou_Name'] ?>" class="form-control">
                                    <textarea id="form7" name="description" placeholder="Enter Course Description" class="md-textarea mt-3 form-control" rows="6"></textarea>
                                    <select name="genreform" class="Form-G rounded mt-4 w-100 ">
                                        <?php
                                        foreach ($outcome as $row) {
                                            $G_Id = $row["G_Id"];
                                            echo "<option value='$G_Id'>" . $row["G_Name"] . "</option>";
                                        }
                                        ?>
                                    </select>
                                    <input type="hidden" name="courseID" value="<?php echo $id; ?>">
                                </div>
                            </div>
                            <button type="submit" name="editCourse" class="btn btn-primary mt-3 btn-block">Submit</button>
                        </div>
                    </form>
                </div>
            </div>


            <!-- Edit Lesson and Edit Materials 
            

            <div class="container col-md-4  float-left">
                <div class="card-body bg-white ">
                    <h5 class="title-admin">Edit Lessons</h5>
                    <form action="action.php" method="post">
                        <div class="form-group">
                            <div class="row m-auto">
                                <div class="w-100 mt-3">
                                    <input type="text" name="lesson" placeholder="Edit Lesson Name" class="form-control">
                                    <select name="course" class="Form-G rounded  mt-4 w-100 ">
                                        <?php
                                        foreach ($result as $row) {
                                            $Id = $row["Cou_Id"];
                                            echo "<option value='$Id'>" . $row["Cou_Name"] . "</option>";
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <input type="hidden" name="courseID" value="<?php echo $id; ?>">
                            <button type="submit" name="editLessons" class="btn btn-primary mt-3 btn-block">Submit</button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="container  col-md-4 float-left ">
                <div class="card-body  bg-white ">
                    <h5 class="title-admin">Edit Material</h5>
                    <form action="action.php" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <div class="row m-auto">
                                <div class="w-100 m-auto ">
                                    <input type="text" name="video" placeholder="Edit Youtube URL" class="form-control mt-3">
                                    <input type="file" name="picture" class="form-control mt-4 ">
                                    <input type="hidden" name="courseID" value="<?php echo $id; ?>">
                                    <button type="submit" name="EditResourse" class="btn btn-primary mt-3 btn-block">Submit</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
-->

        </div>
    </div>










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
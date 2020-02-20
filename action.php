<?php
//require_once - include but for one time
require_once 'classes/crud.php';
$myObj = new CRUD;

if (isset($_POST["signup"])) {
    $uname = $_POST["username"];
    $password = $_POST["password"];
    $fname = $_POST["firstname"];
    $lname = $_POST["lastname"];



    $ans = $myObj->insertUser($uname, $password, $fname, $lname);

    if ($ans == 1) {
        header("Location: login.php");
    } else {
        echo "Error.";
    }
} elseif (isset($_POST["login"])) {
    $uname = $_POST["username"];
    $pass = $_POST["password"];
    $myObj->login($uname, $pass);
    //Admin course.php
} elseif (isset($_POST["addCourse"])) {
    $course = $_POST["course"];
    $genreF = $_POST["genreform"];
    $DesAC = $_POST["description"];
    $myObj->addCourse($course, $genreF, $DesAC);
} elseif (isset($_POST["addGenre"])) {
    $genre = $_POST["genre"];
    $myObj->addGenre($genre);
} elseif (isset($_POST["AddResourse"])) {
    //Picture -- name is an attribute before a picture attribute 
    $pic = $_FILES["picture"]["name"];
    $target_dir = "upload/";
    //basename - file name
    $target_file = $target_dir . basename($_FILES["picture"]["name"]);
    move_uploaded_file($_FILES["picture"]["tmp_name"], $target_file);

    //Video -- to display + embed URL
    $video = $_POST["video"];
    $id = explode("?v=", $video);
    $VideoEmbed = "https://www.youtube.com/embed/" . $id[1];
    $LesDes = $_POST["description"];


    $lessonID = $_POST["LessonID"];
    $cid = $_POST["courseID"];

    $ans = $myObj->AddResource($pic, $VideoEmbed, $lessonID, $LesDes);


    if ($ans == 1) {
        move_uploaded_file($_FILES["picture"]["tmp_name"], $target_file);
        header("Location: resources.php?id=$cid");
    } else {
        echo "Error.";
    }
} elseif (isset($_POST["addLessons"])) {
    $lesson = $_POST["lesson"];
    $course = $_POST["course"];
    $myObj->AddLessons($lesson, $course);
} elseif (isset($_POST['editCourse'])) {
    $cid = $_POST['courseID'];
    $desCouEdit = $_POST["description"];
    $courseU = $_POST["course"];
    $genreFU = $_POST["genreform"];
    $myObj->editCourse($courseU, $genreFU, $desCouEdit, $cid);
} elseif (isset($_POST['editGenre'])) {
    $genreU = $_POST["genre"];
    $cid = $_POST["courseID"];
    $myObj->editGenre($genreU, $cid);
} elseif (isset($_POST['editLessons'])) {
    $LessonN = $_POST["LessonN"];
    $LessonG = $_POST["LessonG"];
    $cid = $_POST["courseID"];
    $myObj->editLessons($LessonN, $LessonG, $cid);
} elseif (isset($_POST['EditResourse'])) {
    //Picture -- name is an attribute before a picture attribute 
    $pic = $_FILES["picture"]["name"];
    $target_dir = "upload/";
    //basename - file name
    $target_file = $target_dir . basename($_FILES["picture"]["name"]);
    move_uploaded_file($_FILES["picture"]["tmp_name"], $target_file);

    //Video -- to display + embed URL
    $video = $_POST["video"];
    $id = explode("?v=", $video);
    $VideoEmbed = "https://www.youtube.com/embed/" . $id[1];
    $cid = $_POST["courseID"];
    $LessonG = $_POST["LessonG"];
    $ans = $myObj->EditResourse($pic, $VideoEmbed, $LessonG);

    if ($ans == 1) {
        move_uploaded_file($_FILES["picture"]["tmp_name"], $target_file);
        header("Location: lesson.php?id=$cid");
    } else {
        echo "Error.";
    }
} elseif ($_GET['actiontype'] == 'delete') {
    $id = $_GET['id'];
    $myObj->deleteCourse($id);
} elseif ($_GET['actiontype'] == 'deleteR') {
    $id = $_GET['id'];
    $myObj->deleteResources($id);
}

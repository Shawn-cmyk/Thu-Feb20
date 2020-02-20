<?php
session_start();
require_once 'Database.php';

/*extends - whatever is in parent class(public) can be used in child class
- inheritence
- no need to create objects
enctype="multipart/form-data" is to upload photos
*/

class CRUD extends Database
{
    public function insertUser($username, $password, $fname, $lname)
    {
        $new_pass = md5($password);

        $sql = "INSERT INTO users(Username, Password, First_Name, Last_Name)
            VALUES('$username', '$new_pass', '$fname', '$lname')";
        if ($this->conn->query($sql)) {
            return 1;
        } else {
            echo "Insertion failed." . $this->conn->error;
            return 0;
        }
    }

    public function login($uname, $pass)
    {
        $new_pass = md5($pass);

        $sql = "SELECT * FROM users WHERE username ='$uname' AND password ='$new_pass'";
        $result = $this->conn->query($sql);

        if ($result->num_rows == 1) {
            $row = $result->fetch_assoc();
            $_SESSION["Id"] = $row["Id"];

            if ($row["Status"] == 'U') {
                header("Location: innerindex.php");
            } else {
                header("Location: dashboard.php");
            }
        } else {
            echo "Error. " . $this->conn->error;
        }
    }

    public function getAllcourses()
    {
        $sql = "SELECT * FROM genre INNER JOIN courses ON genre.G_Id = courses.Gen_Id";
        $result = $this->conn->query($sql);

        $row = array(); // initiate array for later use (used inside while loop)
        while ($rows = $result->fetch_assoc()) { //creating while loop to get all of the data inside the database
            $row[] = $rows; //passing the data from the database inside the initiated row array
        }

        return $row; //returning row which holds the data from the database back to function displayUsers
    }

    public function addCourse($course, $genreF, $DesAC)
    {

        $sql = "INSERT INTO courses(Cou_Name, Gen_Id, Cou_Description)
            VALUES('$course', '$genreF', '$DesAC')";
        if ($this->conn->query($sql)) {
            header("Location: dashboard.php");
        } else {
            echo "Insertion failed." . $this->conn->error;
            return 0;
        }
    }

    public function addGenre($genre)
    {

        $genre = $this->conn->real_escape_string($genre);

        $sql = "INSERT INTO genre(G_Name)
            VALUES('$genre')";
        if ($this->conn->query($sql)) {
            header("Location: dashboard.php");
        } else {
            echo "Insertion failed." . $this->conn->error;
            return 0;
        }
    }

    public function getAllgenre()
    {
        $sql = "SELECT * FROM genre";
        $result = $this->conn->query($sql);

        $row = array(); // initiate array for later use (used inside while loop)
        while ($rows = $result->fetch_assoc()) { //creating while loop to get all of the data inside the database
            $row[] = $rows; //passing the data from the database inside the initiated row array
        }

        return $row; //returning row which holds the data from the database back to function displayUsers
    }


    public function getAllcourse()
    {
        $sql = "SELECT * FROM courses ";
        $result = $this->conn->query($sql);

        $row = array(); // initiate array for later use (used inside while loop)
        while ($rows = $result->fetch_assoc()) { //creating while loop to get all of the data inside the database
            $row[] = $rows; //passing the data from the database inside the initiated row array
        }

        return $row; //returning row which holds the data from the database back to function displayUsers
    }

    public function getAlllessons($id)
    {
        $sql = "SELECT * FROM lessons WHERE C_id = '$id'";
        $result = $this->conn->query($sql);

        $row = array(); // initiate array for later use (used inside while loop)
        while ($rows = $result->fetch_assoc()) { //creating while loop to get all of the data inside the database
            $row[] = $rows; //passing the data from the database inside the initiated row array
        }

        return $row; //returning row which holds the data from the database back to function displayUsers
    }


    function getOneofcourses($id)
    {
        $sql = "SELECT * FROM courses WHERE Cou_id = '$id'";

        $result = $this->conn->query($sql);

        if ($result == FALSE) {
            die('cannot get one user' . $this->conn->connect_error);
        } else {
            return $result->fetch_assoc();
        }
    }

    public function getAllresources($Cid)
    {
        $sql = "SELECT * FROM resources INNER JOIN lessons ON resources.L_Id = lessons.Les_Id INNER JOIN courses ON courses.Cou_Id = lessons.C_Id WHERE Cou_Id ='$Cid'";
        $result = $this->conn->query($sql);

        $row = array(); // initiate array for later use (used inside while loop)
        while ($rows = $result->fetch_assoc()) { //creating while loop to get all of the data inside the database
            $row[] = $rows; //passing the data from the database inside the initiated row array
        }

        return $row; //returning row which holds the data from the database back to function displayUsers
    }

    public function getAll()
    {
        $sql = "SELECT * FROM resources INNER JOIN lessons ON resources.L_Id = lessons.Les_Id INNER JOIN courses ON courses.Cou_Id = lessons.C_Id INNER JOIN genre ON courses.Gen_Id = genre.G_Id";
        $result = $this->conn->query($sql);

        $row = array(); // initiate array for later use (used inside while loop)
        while ($rows = $result->fetch_assoc()) { //creating while loop to get all of the data inside the database
            $row[] = $rows; //passing the data from the database inside the initiated row array
        }

        return $row; //returning row which holds the data from the database back to function displayUsers
    }

    public function getLessons($id)
    {
        $sql = "SELECT * FROM resources INNER JOIN lessons ON resources.L_Id = lessons.Les_Id 
        INNER JOIN courses ON courses.Cou_Id = lessons.C_Id INNER JOIN genre ON courses.Gen_Id = genre.G_Id WHERE Id = '$id' ";
        $result = $this->conn->query($sql);

        $row = array(); // initiate array for later use (used inside while loop)
        while ($rows = $result->fetch_assoc()) { //creating while loop to get all of the data inside the database
            $row[] = $rows; //passing the data from the database inside the initiated row array
        }

        return $row; //returning row which holds the data from the database back to function displayUsers
    }

    public function AddResource($pic, $VideoEmbed, $lessonID, $LesDes)
    {
        $sql = "INSERT INTO resources( Res_Filename, Video, L_Id, Les_Description)
                            VALUES('$pic','$VideoEmbed','$lessonID', '$LesDes' )";
        if ($this->conn->query($sql)) {
            return 1;
        } else {
            echo "Insertion failed. " . $this->conn->error;
            return 0;
        }
    }

    public function AddLessons($lesson, $course)
    {


        $lesson = $this->conn->real_escape_string($lesson);
        $sql = "INSERT INTO lessons(Les_Name,C_Id)
                            VALUES('$lesson', '$course')";
        if ($this->conn->query($sql)) {
            header("Location: dashboard.php");
        } else {
            echo "Insertion failed." . $this->conn->error;
            return 0;
        }
    }


    public function deleteCourse($id)
    {
        $sql = "DELETE FROM courses WHERE Cou_Id ='$id'";
        $result = $this->conn->query($sql);

        if ($result) {
            header("Location: dashboard.php");
        } else {
            echo "Connection error." . $this->conn->error;
        }
    }

    public function deleteResources($id)
    {
        $sql = "DELETE FROM resources WHERE id ='$id'";
        $result = $this->conn->query($sql);

        if ($result) {
            header("Location: resources.php");
        } else {
            echo "Connection error." . $this->conn->error;
        }
    }

    function getOneUser($id)
    {
        $sql = "SELECT * FROM courses WHERE id = '$id'";
        $result = $this->conn->query($sql);

        $row = $result->fetch_assoc();
        return $row;
    }

    function editCourse($courseU, $genreFU, $desCouEdit, $cid)
    {
        $courseU = $this->conn->real_escape_string($courseU);
        $sql = "UPDATE courses SET Cou_Name='$courseU', Gen_Id='$genreFU', Cou_Description='$desCouEdit' WHERE Cou_id = '$cid'";
        $result = $this->conn->query($sql);


        if ($result == FALSE) {
            die('cannot update user' . $this->conn->error);
        } else {
            header("location:Dashboard.php");
        }
    }

    function editGenre($genreU, $cid)
    {
        $sql = "UPDATE genre SET G_Name='$genreU' ";
        $result = $this->conn->query($sql);

        if ($result == FALSE) {
            die('cannot update user' . $this->conn->error);
        } else {
            header("location:edit.php?id=$cid");
        }
    }

    function editLessons($LessonN, $LessonG, $cid)
    {
        $LessonN = $this->conn->real_escape_string($LessonN);
        $sql = "UPDATE lessons SET Les_Name='$LessonN' WHERE Les_Id='$LessonG'";
        $result = $this->conn->query($sql);


        if ($result == FALSE) {
            die('cannot update user' . $this->conn->error);
        } else {
            header("location:lesson.php?id=$cid");
        }
    }

    function EditResourse($pic, $VideoEmbed, $LessonG)

    {
        $sql = "UPDATE resources SET Res_Filename='$pic', Video='$VideoEmbed'  WHERE L_Id='$LessonG' ";
        $result = $this->conn->query($sql);


        if ($this->conn->query($sql)) {
            return 1;
        } else {
            echo "Insertion failed. " . $this->conn->error;
            return 0;
        }
    }
}

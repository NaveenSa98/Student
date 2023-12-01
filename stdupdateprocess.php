<?php
    if(isset($_GET['id'])){
        include 'dbconnection.php';
        function validate($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
        
        $id = validate($_GET['id']);
        
        $sql = "SELECT * FROM student WHERE student_id=$id";
        $result = mysqli_query($conn, $sql);
        
        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            
        } else {
            header("Location: student.php");
        } 
        
    }else if(isset ($_POST['updatestd'])){
        include 'dbconnection.php';
        function validate($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
        
        $stdid = validate($_POST['id']);
        $title = validate($_POST['title']);
        $fname = validate($_POST['fname']);
        $lname = validate($_POST['lname']);
        $address = validate($_POST['address']);
        $city = validate($_POST['city']);
        $bdy = validate($_POST['bdy']);
        $grade = validate($_POST['grade']);
        $guardian = validate($_POST['guardian']);
        $select = validate($_POST['select']);
        $tel = validate($_POST['tel']);
        
        if(empty($fname&$lname&$grade&$guardian&$tel)){
            header("Location: stdupdate.php?id=$stdid&error=Some Essential data are missing");
        } else {
          
            $sql = "UPDATE student SET gender='$title', first_name='$fname', last_name='$lname', address='$address', city='$city', birthday='$bdy', grade='$grade', guardian='$guardian', relation='$select', telephone_num='$tel'"
                    . "WHERE student_id=$stdid";
            
            $result = mysqli_query($conn, $sql);
            
            if ($result) {
                header("Location: index.php?status=Successfully Updatded!");
            } else {
                header("Location: stdupdate.php?id=$stdid&error=Update Faild");
            }
            
        }
        
    }else {
        header("Location: index.php");
}
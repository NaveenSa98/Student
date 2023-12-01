<?php

    if(isset($_POST['addstd'])){
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
            header("Location: addstudent.php?error=Some Essential data are missing");
        } else {
          
            $sql = "INSERT INTO student(student_id,gender,first_name,last_name,address,city,birthday,grade,guardian,relation,telephone_num)"
                    . "VALUES('$stdid','$title','$fname','$lname','$address','$city','$bdy','$grade','$guardian','$select','$tel')";
            
            $result = mysqli_query($conn, $sql);
            
            if ($result) {
                header("Location: addstudent.php?status=Successfully Added!");
            } else {
                header("Location: addstudent.php?error=Registration Faild");
            }
            
        }
    }


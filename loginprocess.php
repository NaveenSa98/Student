<?php
session_start();
include "dbconnection.php";

    if (isset($_POST['uname']) && isset($_POST['password'])) {
        function validate($data){
            $data = trim($data);
            $data = stripcslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
        
        $uname = validate($_POST['uname']);
        $pass = validate($_POST['password']);

        if (empty($uname)) {
            header("Location: login.php?error=Username is required");
            exit();
        } else if (empty($pass)) {
            header("Location: login.php?error=Password is required");
            exit();
        } else{
            $sql = "SELECT * FROM adminlogin WHERE username='$uname' AND password='$pass'";
            
            $result = mysqli_query($conn, $sql);
            
            if (mysqli_num_rows($result)) {
                $row = mysqli_fetch_assoc($result);
                if ($row['username']===$uname && $row['password']===$pass){
                    $_SESSION['username'] = $row['username'];
                    $_SESSION['admin_name'] = $row['admin_name'];
                    $_SESSION['id'] = $row['id'];
                    header("Location: index.php");
                    exit();
                    
                }else {
                header("Location: login.php?error=Incorrect Username or Password");
                exit();
            }
                
            } else {
                header("Location: login.php?error=Incorrect Username or Password");
                exit();
            }
        }

    } else{
        header("Location: login.php");
        exit();
    }
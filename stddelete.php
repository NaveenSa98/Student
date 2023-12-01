<?php
    if(isset($_GET['id'])){
        include 'dbconnection.php';
        function validate($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
        
        $stdid = validate($_GET['id']);
        
        $sql = "DELETE FROM student WHERE student_id=$stdid";
            
            $result = mysqli_query($conn, $sql);
            
            if ($result) {
                header("Location: index.php?status=Successfully Deletded!");
            } else {
                header("Location: index.php?error=Attempt Faild");
            }
        
    } else {
    header("Location: index.php");
}


<?php

include 'dbconnection.php';

$sql = "SELECT * FROM student ORDER BY student_id ASC";
$result = mysqli_query($conn, $sql);
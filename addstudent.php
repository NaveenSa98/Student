<!DOCTYPE html>
<?php
session_start();

if(isset($_SESSION['id']) && isset($_SESSION['username'])){

?>

<?php
    include "dbconnection.php";
    $query = "SELECT * FROM student ORDER BY student_id DESC LIMIT 1";
        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_array($result);
        $lastid = $row['student_id'];
        if($lastid == ""){
            $newid = "1";
        } else {
            $newid = substr($lastid, 3);
            $newid = intval($newid);
            $newid = ($lastid + 1);
        }
?>

<html>
    <head>
        <title>Add Student</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
        <link href="css/style.css" rel="stylesheet" type="text/css"/>
        <link href="css/addstudent.css" rel="stylesheet" type="text/css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
        
        <style>
            body {
              background-color: #eee;
            }
        </style>

    </head>
    <body>
        
        <!-- Start Header -->
        <header>
            <div class="container">
                    <div class="row">
                        <div class="col-sm-4"  style="padding: 20px;">
                            <img src="images/logo.png" alt="logo" width="70px"/>
                        </div>
                        <div class="col-sm-4" style="text-align: center; color: white; padding: 10px;">
                            <h2>Student Management System</h2>
                        </div>
                        <div class="col-sm-4" style="text-align: right; color: white; padding-top: 40px;">
                            <i class='fas fa-user-circle' style='font-size:20px; padding-right: 5px;'></i>
                            <a style="padding-right: 10px;">Admin : <?php echo $_SESSION['admin_name']; ?></a>
                            <a class="btn btn-danger" style="width:80px; height: 40px;" href="logout.php" role="button">Logout</a>
                        </div>
                    </div>
            </div>
        </header>
        <!-- End Header -->
        
        <!-- Start Content -->
        <div class="facname" style="text-align:center; padding-top: 20px;">
            <h3>Student Registrations</h3>
        </div>
        
        <div class="formhead" style="padding-left:35px;">
            <h5>Student Details</h5>
        </div>
        
        <form class="form-registration" action="addstdprocess.php" method="post">
            <!--START ERROR-->
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4" style="text-align: center;">
                    <?php if(isset($_GET['error'])){?>
                        <div class="alert alert-danger" role="alert" style="text-align: center;">
                        <?php echo $_GET['error'];?>
                        </div>
                    <?php } ?>
                </div>
                <div class="col-md-4"></div>
            </div>
            <!--END ERROR-->
            
            <!--START SUCCESS-->
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4" style="text-align: center;">
                    <?php if(isset($_GET['status'])){?>
                        <div class="alert alert-success" role="alert" style="text-align: center;">
                        <?php echo $_GET['status'];?>
                        </div>
                    <?php } ?>
                </div>
                <div class="col-md-4"></div>
            </div>
            <!--END SUCCESS-->
            
                <div class="col-md-2">
                    <div class="form-group">
                      <label for="Student ID">Student ID</label>
                      <input type="text" class="form-control" readonly="" name="id" id="id" placeholder="Student ID" style="width:90%;"
                             value="<?php echo $newid;?>">
                    </div>
                </div>    
                
                
            <div class="row">
                <div class="col-md-2">
                    <div class="form-group">
                        <label for="Select Title">Select Gender</label>
                        <select class="form-control" id="title" name="title">
                            <option>--Select the Gender--</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                    </div>
                </div>    
            
                <div class="col-md-5">
                    <div class="form-group">
                      <label for="inputfirstname">Student First Name<a style="color:red;">*</a></label>
                      <input type="text" class="form-control" id="fname" placeholder="First Name" name="fname">
                      <small id="fnamehelp" class="form-text text-muted">Example: Sandaruwan</small>
                    </div>
                </div>    
            
                <div class="col-md-5">
                    <div class="form-group">
                      <label for="inputlastname">Student Last Name<a style="color:red;">*</a></label>
                      <input type="text" class="form-control" id="lname" placeholder="Last Name" name="lname">
                      <small id="lnamehelp" class="form-text text-muted">Example: Edirisinghe</small>
                    </div>
                </div>    
            </div>
            
            <div class="row">
                <div class="col-md-7">
                    <div class="form-group">
                      <label for="inputaddress">Student Address</label>
                      <input type="text" class="form-control" id="address" placeholder="House No. and Street Name" name="address">
                      <small id="addresshelp" class="form-text text-muted">Example: No:59/110, Avissavella Road</small>
                    </div>
                </div>    
            
                <div class="col-md-5">
                    <div class="form-group">
                      <label for="inputaddress">City</label>
                      <input type="text" class="form-control" id="city" placeholder="City" name="city">
                      <small id="addresshelp" class="form-text text-muted">Example: Nugegoda</small>
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-2">
                    <div class="form-group">
                      <label for="inputbirthday">Student Birthday</label>
                      <input type="date" class="form-control" id="bdy" placeholder="Birthday" style="width:180px;" name="bdy">
                    </div>
                </div>
            </div>
            
            <div class="form-group">
                        <label for="Select Grade">Select Grade<a style="color:red;">*</a></label>
                        <select class="form-control" id="grade" style="width:180px;" name="grade">
                            <option>--Select the Grade--</option>
                            <option value="06">Grade 06</option>
                            <option value="07">Grade 07</option>
                            <option value="08">Grade 08</option>
                            <option value="09">Grade 09</option>
                            <option value="10">Grade 10</option>
                            <option value="11">Grade 11</option>
                            <option value="12">Grade 12</option>
                        </select>
            </div>
            
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                      <label for="guardian">Parent / Guardian's Name<a style="color:red;">*</a></label>
                      <input type="text" class="form-control" id="guardian" placeholder="Guardian's Name" name="guardian">
                    </div>
                </div>    
            
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="select">Select Relation</label>
                        <select class="form-control" id="select" name="select">
                            <option>--Select the Relation--</option>
                            <option value="Father">Father</option>
                            <option value="Mother">Mother</option>
                            <option value="Guardian">Guardian</option>
                        </select>
                    </div>
                </div>
            
                <div class="col-md-3">
                    <div class="form-group">
                            <label for="inputtel">Telephone Number<a style="color:red;">*</a></label>
                            <input type="text" class="form-control" id="tel" placeholder="Phone Num." name="tel">
                            <small id="addresshelp" class="form-text text-muted">Example: 768335188</small>
                    </div>
                </div>
            </div> 
            
            <p style="color:red;"><a>*</a> - Essential Details</p>
                
            <button type="submit" class="btn btn-primary" style="width: 150px; height: 40px;" name="addstd">
                <i class="far fa-plus-square"></i>
                Add Student
            </button>
            <a type="cancel" class="btn btn-danger" style="width: 80px; height: 40px;" href="index.php">Cancel</a>
        </form>
        <!-- End Content -->
        
        <!-- Start Footer -->
        <?php include 'footer.php';?>
        <!-- End Footer -->
    </body>
</html>
<?php
}else{
    header("Location: login.php");
                    exit();
}
?>
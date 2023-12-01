<!DOCTYPE html>
<?php
session_start();

if(isset($_SESSION['id']) && isset($_SESSION['username'])){

?>

<?php
include 'stdupdateprocess.php';
?>

<html>
    <head>
        <title>Update Student</title>
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
            <h3>Update Student Details</h3>
        </div>
        
        <div class="formhead" style="padding-left:35px;">
            <h5>Student Details</h5>
        </div>
        
        <form class="form-registration" action="stdupdateprocess.php" method="post">
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
            
            
                <div class="col-md-2">
                    <div class="form-group">
                      <label for="Student ID">Student ID</label>
                      <input type="text" class="form-control" readonly="" name="id" id="id" style="width:90%;"
                             value="<?=$row['student_id']?>">
                    </div>
                </div>    
                
                
            <div class="row">
                <div class="col-md-2">
                    <div class="form-group">
                        <label for="Select Title">Select Gender</label>
                        <select class="form-control" id="title" name="title">
                            <option>--Select the Gender--</option>
                            <option value="Male" <?php if($row['gender']=='Male'){echo 'selected';}?> >Male</option>
                            <option value="Female" <?php if($row['gender']=='Female'){echo 'selected';}?> >Female</option>
                        </select>
                    </div>
                </div>    
            
                <div class="col-md-5">
                    <div class="form-group">
                      <label for="inputfirstname">Student First Name</label>
                      <input type="text" class="form-control" id="fname" name="fname" value="<?=$row['first_name']?>">
                      <small id="fnamehelp" class="form-text text-muted">Example: Sandaruwan</small>
                    </div>
                </div>    
            
                <div class="col-md-5">
                    <div class="form-group">
                      <label for="inputlastname">Student Last Name</label>
                      <input type="text" class="form-control" id="lname"  name="lname" value="<?=$row['last_name']?>">
                      <small id="lnamehelp" class="form-text text-muted">Example: Edirisinghe</small>
                    </div>
                </div>    
            </div>
            
            <div class="row">
                <div class="col-md-7">
                    <div class="form-group">
                      <label for="inputaddress">Student Address</label>
                      <input type="text" class="form-control" id="address"  name="address" value="<?=$row['address']?>">
                      <small id="addresshelp" class="form-text text-muted">Example: No:59/110, Avissavella Road</small>
                    </div>
                </div>    
            
                <div class="col-md-5">
                    <div class="form-group">
                      <label for="inputaddress">City</label>
                      <input type="text" class="form-control" id="city"  name="city" value="<?=$row['city']?>">
                      <small id="addresshelp" class="form-text text-muted">Example: Nugegoda</small>
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-2">
                    <div class="form-group">
                      <label for="inputbirthday">Student Birthday</label>
                      <input type="date" class="form-control" id="bdy"  style="width:180px;" name="bdy" value="<?=$row['birthday']?>">
                    </div>
                </div>
            </div>
            
            <div class="form-group">
                        <label for="Select Grade">Select Grade</label>
                        <select class="form-control" id="grade" style="width:180px;" name="grade">
                            <option>--Select the Grade--</option>
                            <option value="06" <?php if($row['grade']=='06'){echo 'selected';}?> >Grade 06</option>
                            <option value="07" <?php if($row['grade']=='07'){echo 'selected';}?> >Grade 07</option>
                            <option value="08" <?php if($row['grade']=='08'){echo 'selected';}?> >Grade 08</option>
                            <option value="09" <?php if($row['grade']=='09'){echo 'selected';}?> >Grade 09</option>
                            <option value="10" <?php if($row['grade']=='10'){echo 'selected';}?> >Grade 10</option>
                            <option value="11" <?php if($row['grade']=='11'){echo 'selected';}?> >Grade 11</option>
                            <option value="12" <?php if($row['grade']=='12'){echo 'selected';}?> >Grade 12</option>
                        </select>
            </div>
            
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                      <label for="guardian">Parent / Guardian's Name</label>
                      <input type="text" class="form-control" id="guardian"  name="guardian" value="<?=$row['guardian']?>">
                    </div>
                </div>    
            
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="select">Select Relation</label>
                        <select class="form-control" id="select" name="select">
                            <option>--Select the Relation--</option>
                            <option value="Father" <?php if($row['relation']=='Father'){echo 'selected';}?> >Father</option>
                            <option value="Mother" <?php if($row['relation']=='Mother'){echo 'selected';}?> >Mother</option>
                            <option value="Guardian" <?php if($row['relation']=='Guardian'){echo 'selected';}?>>Guardian</option>
                        </select>
                    </div>
                </div>
            
                <div class="col-md-3">
                    <div class="form-group">
                            <label for="inputtel">Telephone Number</label>
                            <input type="text" class="form-control" id="tel"  name="tel" value="<?=$row['telephone_num']?>">
                            <small id="addresshelp" class="form-text text-muted">Example: 768335188</small>
                    </div>
                </div>
            </div>
                
            <button type="submit" class="btn btn-warning" style="width: 110px; height: 40px;" name="updatestd">
                <i class="fas fa-retweet"></i>
                Update
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
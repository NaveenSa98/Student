<!DOCTYPE html>
<?php
session_start();

if(isset($_SESSION['id']) && isset($_SESSION['username'])){

?>

<?php include 'studentprocess.php'; ?>

<html>
    <head>
        <title>Student</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
        <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
        <link href="css/style.css" rel="stylesheet" type="text/css"/>
        <link href="css/studentstyle.css" rel="stylesheet" type="text/css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
        
        <script>
            $(document).ready(function(){
                $("#userinput").on("keyup",function(){
                    var value =$(this).val().toLowerCase();
                    $("#studenttable tr").filter(function(){
                        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                    });
                });
            });
        </script>
        
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
                <h3>All Students</h3>
            </div>
        
            <!-- Table -->
            
            
            <div class="student-table">
                
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
            
            
            
            <div class="row">
                <div class="col-md-4">
                    <!--Search Bar-->
                    <div class="form-group" style="padding-bottom:10px;">
                        <input type="text" id="userinput" placeholder="Search Student" class="form-control">
                    </div>
                </div>
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <!--Add Student Button -->
                        <div class="headbutton" style="text-align: right;">
                            <a type="submit" href="addstudent.php" class="btn btn-danger" style="width: 150px; height: 40px;">
                                <i class="far fa-plus-square"></i>
                                Add Student
                            </a>
                        </div>
                </div>
            </div>
            
            <?php if(mysqli_num_rows($result)){ ?>    
                
            <table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col">Student ID</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Full Name</th>
                    <th scope="col">Address</th>
                    <th scope="col">Birthday</th>
                    <th scope="col">Grade</th>
                    <th scope="col">Parent/Guardian</th>
                    <th scope="col">Relation</th>
                    <th scope="col">Telephone</th>
                  </tr>
                </thead>
                
                <tbody id="studenttable">
                  <?php
                    while($rows = mysqli_fetch_assoc($result)){
                  ?>
                
                  <tr>
                    <th scope="row" style="padding-top:15px;"><?php echo $rows['student_id'];?></th>
                    <td style="padding-top:15px;"><?php echo $rows['gender'];?></td>
                    <td style="padding-top:15px;"><?php echo $rows['first_name'];?> <?php echo $rows['last_name'];?></td>
                    <td style="padding-top:15px;"><?php echo $rows['address'];?>, <?php echo $rows['city'];?></td>
                    <td style="padding-top:15px;"><?php echo $rows['birthday'];?></td>
                    <td style="padding-top:15px;"><?php echo $rows['grade'];?></td>
                    <td style="padding-top:15px;"><?php echo $rows['guardian'];?></td>
                    <td style="padding-top:15px;"><?php echo $rows['relation'];?></td>
                    <td style="padding-top:15px;"><?php echo $rows['telephone_num'];?></td>
                    <td><a type="button" class="btn btn-success" style="width: 80px; height: 40px;" href="stdupdate.php?id=<?=$rows['student_id']?>">Update</a></td>
                    <td><a type="button" class="btn btn-danger" style="width: 80px; height: 40px;" href="stddelete.php?id=<?=$rows['student_id']?>">Delete</a></td>
                  </tr>
                  <?php }?>
                </tbody>
            </table>
            
                <?php }?>
            
            </div>
        
        
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
print("hello world")


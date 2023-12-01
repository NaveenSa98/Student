<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Login</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/loginstyle.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
        <style>
            body{
                background: #eee;
            }
        </style>
    </head>
    <body>
        <div class="wrapper">
            <form class="form-signin" action="loginprocess.php" method="post">
                <h3 class="form-signin-heading text-center">Student Management System</h3>
                <h4 class="form-signin-heading text-left" style="color: #2284ec">Admin Login</h4>
                
                <?php if (isset($_GET['error'])){?>
                <p class="error" style="width: 100%;"><?php echo $_GET['error'];?></p>
                <?php }?>
                
                <input type="text" class="form-control" name="uname" placeholder="Username"/>
                <input type="password" class="form-control" name="password" placeholder="Password"/>
                <button class="btn btn-lg btn-primary btn-block">Login</button>
            </form>
        </div>
    </body>
</html>

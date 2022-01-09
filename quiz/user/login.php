<?php
include('../dbcon.php');
session_start();
if(!isset($_SESSION['ruser']))
{
if (isset($_REQUEST['rsignin']))
{
    $remail=mysqli_real_escape_string($conn,trim($_REQUEST['remail']));
    $rpassword=mysqli_real_escape_string($conn,trim($_REQUEST['rpassword']));
    $sql="select email,password from user where email='".$remail."' and password='".$rpassword."' limit 1";
    $result=$conn->query($sql);
    if($result->num_rows==1)
    {
        $_SESSION['ruser']=true;
        $_SESSION['remail'] = $remail;
        echo "<script> location.href='showquiz.php'; </script>";
        exit;
    }
        else
        {
            $msg="Enter valid email and password";
        }      
}
}
else{
    echo "<script> location.href='showquiz.php'; </script>";
}
?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="../css/bootstrap.min.css">

  <!-- Font Awesome CSS -->
  <link rel="stylesheet" href="../css/all.min.css">

    <title>login</title>
</head>
<body>
 <div class="text-center mt-5">
     <h2>Login for online preparation</h2>
</div>
     <div class="container-fluid">
         <div class="row justify-content-center mt-5">
             <div class="col-sm-6 col-md-4 bg-dark text-white ">
                 <form action="" class="p-4 shadow-lg" method="POST">
                     <div class="form-group">
                         <i class="fas fa-user mr-2"></i><label for="name" class="font-weight-bold">Email</label>
                         <input type="text" name="remail" placeholder="Enter email" class="form-control">
                     </div>
                     <div class="form-group">
                        <i class="fas fa-key mr-2"></i><label for="name" class="font-weight-bold">Password</label>
                        <input type="password" name="rpassword" placeholder="Enter passsword" class="form-control">
                    </div>
                    <div class="submit" style="display: flex;">
                        <button class="btn btn-outline-danger  p-1 font-weight-bold mr-5" name="rsignin">Submit</button>
                        <div><a class="btn btn-outline-info ml-1" href="../index.php">Back to Home</a></div>
                    </div>
                 </form>
                 <div class="alert"><?php if(isset($msg)) { echo $msg;} ?> </div>
             </div>
         </div>
     </div>
 
 
 
  <!-- Boostrap JavaScript -->
  <script src="../js/jquery.min.js"></script>
  <script src="../js/popper.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script src="../js/all.min.js"></script>
</body>
</html>
<?php
define('TITLE','Profile');
define('PAGE','RequesterProfile');
include('../dbConnection.php');
session_start();
if($_SESSION['is_login']){
$rEmail = $_SESSION['rEmail'];
}

else{

echo "<script> location.href='RequesterLogin.php'</script>";

}

$sql ="SELECT r_name,r_email FROM requesterlogin_tb WHERE r_email ='$rEmail'";

$result= $conn->query($sql);
if($result->num_rows==1){

$row=$result->fetch_assoc();
$rName=$row['r_name'];

}


//UPDATEING THE NAME 

if(isset($_REQUEST['nameupdate'])){

if($_REQUEST['rName']==""){

  $passmsg ='<div class="alert alert-warning col-sm-6 ml-5 mt-2" role="alert">"PlZ INPUT YOUR NAME"</div>';
}

else{

 $rName= $_REQUEST['rName'];
 $sql = "update requesterlogin_tb set r_name='$rName'where r_email='$rEmail'";

 if($conn->query($sql)==TRUE){

$passmsg='<div class="alert alert-warning col-sm-6 ml-5 mt-2" role="alert">"Name Updated Successfully"</div>';

 }
 else{

  $passmsg='<div class="alert alert-warning col-sm-6 ml-5 mt-2" role="alert">"Unalbe to Update"</div>';



 }

}

}

?>



<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta http-equiv="X-UA-Compatible" content="ie=edge">
 <title>
 <?php  echo TITLE ?>
 </title>
 <!-- Bootstrap CSS -->
 
 <link rel="stylesheet" href="../css/bootstrap.min.css">

 <!-- Font Awesome CSS -->
 <link rel="stylesheet" href="../css/all.min.css">

 <!-- Custome CSS -->
 <link rel="stylesheet" href="../css/custom.css">
</head>

<body>
 <!-- Top Navbar -->
 <nav class="navbar navbar-dark fixed-top bg-primary flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="RequesterProfile.php">ISMS</a>
 </nav>

 <!-- Side Bar -->
 <div class="container-fluid mb-5 " style="margin-top:40px;">
  <div class="row">
   <nav class="col-sm-2 bg-light sidebar py-5 d-print-none">
    <div class="sidebar-sticky">
     <ul class="nav flex-column">
      <li class="nav-item">
       <a class="nav-link  <?php if( PAGE =='RequesterProfile'){echo 'active';}?> " href="RequesterProfile.php">
        <i class="fas fa-user"></i>
        Profile <span class="sr-only">(current)</span>
       </a>
      </li>
      <li class="nav-item">
       <a class="nav-link  <?php if( PAGE =='RequesterProfile'){echo 'active';}?> " href="SubmitRequest.php">
        <i class="fab fa-accessible-icon"></i>
        Submit Request
       </a>
      </li>
      <li class="nav-item">
       <a class="nav-link " href="CheckStatus.php">
        <i class="fas fa-align-center"></i>
        Service Status
       </a>
      </li>
      <li class="nav-item">
       <a class="nav-link  " href="Requesterchangepass.php">
        <i class="fas fa-key"></i>
        Change Password
       </a>
      </li>
      <li class="nav-item">
       <a class="nav-link" href="../logout.php">
        <i class="fas fa-sign-out-alt"></i>
        Logout
       </a>
      </li>
     </ul>
    </div>
   </nav>

<div class="col-sm-6 mt-5">
  <form class="mx-5" method="POST">
    <div class="form-group">
      <label for="inputEmail">Email</label>
      <input type="email" class="form-control" id="inputEmail"  value="<?php echo $rEmail ?>" readonly>
    </div>
    <div class="form-group">
      <label for="inputName">Name</label>
      <input type="text" class="form-control" id="inputName" name="rName" value="<?php echo $rName ?>"  >
    </div>
    <button type="submit" class="btn btn-primary" name="nameupdate">Update</button>
<?php   if(isset($passmsg)) {echo $passmsg;} ?>

  </form>
</div>
</div>
</div>

<script src="../js/jquery.min.js"></script>
<script src="../js/popper.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/all.min.js"></script>
</body>

</html>

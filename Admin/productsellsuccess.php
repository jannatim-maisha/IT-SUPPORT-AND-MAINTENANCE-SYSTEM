<?php
define('TITLE', 'Dashboard');
define('PAGE', 'assets');
include('../dbConnection.php');

session_start();
 if(isset($_SESSION['is_adminlogin'])){
  $aEmail = $_SESSION['aEmail'];
 } else {
  echo "<script> location.href='login.php'; </script>";
 }

?>

<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta http-equiv="X-UA-Compatible" content="ie=edge">
 <title>
Sell Success
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
 <nav class="navbar navbar-dark fixed-top bg-primary p-0 shadow">
  <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="dashboard.php">ISMS</a>
 </nav>

 <!-- Side Bar -->
 <div class="container-fluid mb-5" style="margin-top:40px;">
  <div class="row">
   <nav class="col-sm-3 col-md-2 bg-light sidebar py-5 d-print-none">
    <div class="sidebar-sticky">
     <ul class="nav flex-column">
      <li class="nav-item">
       <a class="nav-link <?php if(PAGE == 'dashboard') { echo 'active'; } ?> " href="dashboard.php">
        <i class="fas fa-tachometer-alt"></i>
        Dashboard
       </a>
      </li>
      <li class="nav-item">
       <a class="nav-link <?php if(PAGE == 'work') { echo 'active'; } ?>" href="work.php">
        <i class="fab fa-accessible-icon"></i>
        Work Order
       </a>
      </li>
      <li class="nav-item">
       <a class="nav-link <?php if(PAGE == 'request') { echo 'active'; } ?>" href="request.php">
        <i class="fas fa-align-center"></i>
        Requests
       </a>
      </li>
      <li class="nav-item">
       <a class="nav-link <?php if(PAGE == 'assets') { echo 'active'; } ?>" href="assets.php">
        <i class="fas fa-database"></i>
        Assets
       </a>
      </li>
      <li class="nav-item">
       <a class="nav-link <?php if(PAGE == 'technician') { echo 'active'; } ?>" href="technician.php">
        <i class="fab fa-teamspeak"></i>
        Technician
       </a>
      </li>
      <li class="nav-item">
       <a class="nav-link <?php if(PAGE == 'requesters') { echo 'active'; } ?>" href="requesters.php">
        <i class="fas fa-users"></i>
        Requester
       </a>
      </li>
      <li class="nav-item">
       <a class="nav-link <?php if(PAGE == 'sellreport') { echo 'active'; } ?>" href="soldproductreport.php">
        <i class="fas fa-table"></i>
        Sell Report
       </a>
      </li>
      <li class="nav-item">
       <a class="nav-link <?php if(PAGE == 'workreport') { echo 'active'; } ?>" href="workreport.php">
        <i class="fas fa-table"></i>
        Work Report
       </a>
      </li>
      <li class="nav-item">
       <a class="nav-link <?php if(PAGE == 'changepass') { echo 'active'; } ?>" href="changepass.php">
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




 <?php
 $sql = "SELECT * FROM customer_tb WHERE custid = {$_SESSION['myid']}";
 $result = $conn->query($sql);
 if($result->num_rows == 1){
  $row = $result->fetch_assoc();
  echo "<div class='ml-5 mt-5'>
  <h3 class='text-center'>Customer Bill</h3>
  <table class='table'>
   <tbody>
   <tr>
     <th>Customer ID</th>
     <td>".$row['custid']."</td>
   </tr>
    <tr>
      <th>Customer Name</th>
      <td>".$row['custname']."</td>
    </tr>
    <tr>
      <th>Address</th>
      <td>".$row['custadd']."</td>
    </tr>
    <tr>
    <th>Product</th>
    <td>".$row['cpname']."</td>
   </tr>
    <tr>
     <th>Quantity</th>
     <td>".$row['cpquantity']."</td>
    </tr>
    <tr>
     <th>Price Each</th>
     <td>".$row['cpeach']."</td>
    </tr>
    <tr>
     <th>Total Cost</th>
     <td>".$row['cptotal']."</td>
    </tr>
    <tr>
    <th>Date</th>
    <td>".$row['cpdate']."</td>
   </tr>
    <tr>
     <td><form class='d-print-none'><input class='btn btn-info' type='submit' value='Print' onClick='window.print()'></form></td>
     <td><a href='assets.php' class='btn btn-secondary d-print-none'>Close</a></td>
   </tr>
   </tbody>
  </table> </div>
  ";
 
 } else {
   echo "Failed";
 }

 ?>





<script src="../js/jquery.min.js"></script>
<script src="../js/popper.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/all.min.js"></script>
<script src="../js/custom.js"></script>
</body>

</html>

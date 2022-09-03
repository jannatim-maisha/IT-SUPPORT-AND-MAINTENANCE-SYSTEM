
<?php
define('TITLE','Status');
include('../dbConnection.php');

session_start();
if($_SESSION['is_login']){
$rEmail = $_SESSION['rEmail'];
}

else{

echo "<script> location.href='RequesterLogin.php'</script>";

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
   <nav class="col-sm-2 bg-light sidebar py-5  d-print-none">
    <div class="sidebar-sticky">
     <ul class="nav flex-column">
      <li class="nav-item">
       <a class="nav-link" href="RequesterProfile.php">
        <i class="fas fa-user"></i>
        Profile <span class="sr-only">(current)</span>
       </a>
      </li>
      <li class="nav-item">
       <a class="nav-link " href="SubmitRequest.php">
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
       <a class="nav-link" href="Requesterchangepass.php">
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

<div class="col-sm-6  mt-5 mx-3">
  <form action=" " method="post" class="form-inline">

  <div class="form-group mr-3  d-print-none">
    <label for="checkid">Enter Request ID:</label>
    <input type="text"  class="form-control" name="checkid" id="checkid"  onkeypress="isInputNumber(event)" >
  </div>

  <button type ="submit" class="btn btn-primary d-print-none">Search</button>

  </form>

  <?php  if(isset($_REQUEST['checkid']))
  {
     
    if($_REQUEST['checkid']==""){

   $msg='<div class="alert alert-warning col-sm-6 ml-5 mt-2 role="alert">Enter the ID</div>'; 

    }

    else{


    

$sql="SELECT * FROM assignwork_tb  WHERE request_id ={$_REQUEST['checkid']}";


$result =$conn->query($sql);
$row=$result->fetch_assoc();




  
  
  ?>

  <h3 class="text-center mt-5 ">Assigned Work Details</h3>

  <table class="table table-bordered">
 
  <tbody>

  <tr>

  <td>Request ID</td>
  <td><?php  if(isset($row['request_id'])){echo $row ['request_id'];}  ?></td>
  </tr>

  <tr>

  <td>Request Info</td>
  <td><?php  if(isset($row['request_info'])){echo $row ['request_info'];}  ?></td>
  </tr>

  <tr>

  <td>Request Description</td>
  <td><?php  if(isset($row['request_desc'])){echo $row ['request_desc'];}  ?></td>
  </tr>

  <tr>

  <td>Request Name</td>
  <td><?php  if(isset($row['requester_name'])){echo $row ['requester_name'];}  ?></td>
  </tr>


  <tr>

  <td>Address Line 1</td>
  <td><?php  if(isset($row['requester_add1'])){echo $row ['requester_add1'];}  ?></td>
  </tr>


  <td>Address Line 2</td>
  <td><?php  if(isset($row['requester_add2'])){echo $row ['requester_add2'];}  ?></td>
  </tr>

  <td>City</td>
  <td><?php  if(isset($row['requester_city'])){echo $row ['requester_city'];}  ?></td>
  </tr>


  <td>State</td>
  <td><?php  if(isset($row['requester_state'])){echo $row ['requester_state'];}  ?></td>
  </tr>

  <td>Pin Code </td>
  <td><?php  if(isset($row['requester_zip'])){echo $row ['requester_zip'];}  ?></td>
  </tr>


  <td>Email</td>
  <td><?php  if(isset($row['requester_email'])){echo $row ['requester_email'];}  ?></td>
  </tr>


  <td>Mobile</td>
  <td><?php  if(isset($row['requester_mobile'])){echo $row ['requester_mobile'];}  ?></td>
  </tr>


  <td>Assigned Date </td>
  <td><?php  if(isset($row['assign_date'])){echo $row ['assign_date'];}  ?></td>
  </tr>


  <td>Technicial Name</td>
  <td><?php  if(isset($row['assign_tech'])){echo $row ['assign_tech'];}  ?></td>
  </tr>

  <td>Customer Sign</td>
  <td></td>
  </tr>

  <td>Technician  Sign</td>
  <td></td>
  </tr>



  </tbody>


  </table>

  <div class="text-center">


  <form action=""  class="mb-3 d-print-none" >

  <input class="btn btn-primary" type="submit"  value="Print"  onClick="window.print()">

  <input class="btn btn-danger" type="submit"  value="Close">
  </form>

  </div>

 



<?php }


} ?>

<?php if(isset($msg)){echo $msg;}?>



</div>




<script>
  function isInputNumber(evt) {
    var ch = String.fromCharCode(evt.which);
    if (!(/[0-9]/.test(ch))) {
      evt.preventDefault();
    }
  }
</script>

</div>




<!-- Only Number for input fields -->

<!-- Boostrap JavaScript -->
<script src="../js/jquery.min.js"></script>
<script src="../js/popper.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/all.min.js"></script>
</body>

</html>
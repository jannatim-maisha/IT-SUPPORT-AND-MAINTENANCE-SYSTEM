<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta http-equiv="X-UA-Compatible" content="ie=edge">
 <title>
user profile
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
       <a class="nav-link  " href="Requesterchangepass.php">
        <i class="fas fa-key"></i>
        Change Password
       </a>
      </li>
      <li class="nav-item">
       <a class="nav-link" href="#">
        <i class="fas fa-sign-out-alt"></i>
        Logout
       </a>
      </li>
     </ul>
    </div>
   </nav>


<div class="col-sm-9 col-md-10 mt-5">
  <form class="mx-5" action="" method="POST">
    <div class="form-group">
      <label for="inputRequestInfo">Request Info</label>
      <input type="text" class="form-control" id="inputRequestInfo" placeholder="Request Info" name="requestinfo">
    </div>
    <div class="form-group">
      <label for="inputRequestDescription">Description</label>
      <input type="text" class="form-control" id="inputRequestDescription" placeholder="Write Description" name="requestdesc">
    </div>
    <div class="form-group">
      <label for="inputName">Name</label>
      <input type="text" class="form-control" id="inputName" placeholder="mara khawa user" name="requestername">
    </div>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="inputAddress">Address Line 1</label>
        <input type="text" class="form-control" id="inputAddress" placeholder="House No. 123" name="requesteradd1">
      </div>
      <div class="form-group col-md-6">
        <label for="inputAddress2">Address Line 2</label>
        <input type="text" class="form-control" id="inputAddress2" placeholder="somewhere" name="requesteradd2">
      </div>
    </div>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="inputCity">City</label>
        <input type="text" class="form-control" id="inputCity" name="requestercity">
      </div>
      <div class="form-group col-md-4">
        <label for="inputState">State</label>
        <input type="text" class="form-control" id="inputState" name="requesterstate">
      </div>
      <div class="form-group col-md-2">
        <label for="inputZip">Zip</label>
        <input type="text" class="form-control" id="inputZip" name="requesterzip" onkeypress="isInputNumber(event)">
      </div>
    </div>

    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="inputEmail">Email</label>
        <input type="email" class="form-control" id="inputEmail" name="requesteremail">
      </div>
      <div class="form-group col-md-2">
        <label for="inputMobile">Mobile</label>
        <input type="text" class="form-control" id="inputMobile" name="requestermobile" onkeypress="isInputNumber(event)">
      </div>
      <div class="form-group col-md-2">
        <label for="inputDate">Date</label>
        <input type="date" class="form-control" id="inputDate" name="requestdate">
      </div>
    </div>

    <button type="submit" class="btn btn-primary" name="submitrequest">Submit</button>
    <button type="reset" class="btn btn-secondary">Reset</button>
  </form>
</div>
</div>
</div>
<!-- Only Number for input fields -->
<script>
  function isInputNumber(evt) {
    var ch = String.fromCharCode(evt.which);
    if (!(/[0-9]/.test(ch))) {
      evt.preventDefault();
    }
  }
</script>
<!-- Boostrap JavaScript -->
<script src="../js/jquery.min.js"></script>
<script src="../js/popper.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/all.min.js"></script>
</body>

</html>
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
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

 <!-- Custome CSS -->
 <link rel="stylesheet" href="../css/custom.css">

 
</head>

<body>
 <!-- Top Navbar -->
 <nav class="navbar navbar-dark fixed-top bg-primary flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="dashboard.php">ISMS</a>
 </nav>

 <!-- Side Bar -->
 <div class="container-fluid mb-5 " style="margin-top:40px;">
  <div class="row">
   <nav class="col-sm-2 bg-light sidebar py-5 d-print-none">
    <div class="sidebar-sticky">
     <ul class="nav flex-column">
      <li class="nav-item">
       <a class="nav-link" href="dashboard.php">
        <i class="fas fa-tachmeter-alt"></i>
        Dashboard <span class="sr-only">(current)</span>
       </a>
      </li>
      <li class="nav-item">
       <a class="nav-link " href="work.php">
        <i class="fab fa-accessible-icon"></i>
        Work Order
       </a>
      </li>
      <li class="nav-item">
       <a class="nav-link " href="request.php">
        <i class="fas fa-align-center"></i>
         Request
       </a>
      </li>
      <li class="nav-item">
       <a class="nav-link " href="asset.php">
        <i class="fas fa-align-center"></i>
         Asset
       </a>
      </li>
      <li class="nav-item">
       <a class="nav-link " href="technitian.php">
        <i class="fas fa-align-center"></i>
         Technitian
       </a>
      </li>
      <li class="nav-item">
       <a class="nav-link " href="sellreport.php">
       <i class="fa-thin fa-file-spreadsheet"></i>
         Sell Report
       </a>
       <li class="nav-item">
       <a class="nav-link " href="workreport.php">
       <i class="fa-solid fa-file-spreadsheet"></i>
         Work Report
       </a>
      </li>
      <li class="nav-item">
       <a class="nav-link" href="Requesterchangepass.php">
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



</body>

</html>
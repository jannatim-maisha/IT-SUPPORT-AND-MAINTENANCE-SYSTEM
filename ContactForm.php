
<?php
//index.php

$error = '';
$name = '';
$email = '';

$message = '';

function clean_text($string)
{
 $string = trim($string);
 $string = stripslashes($string);
 $string = htmlspecialchars($string);
 return $string;
}

if(isset($_POST["submit"]))
{
 if(empty($_POST["name"]))
 {
  $error .= '<p><label class="text-danger">Please Enter your Name</label></p>';
 }
 else
 {
  $name = clean_text($_POST["name"]);
  if(!preg_match("/^[a-zA-Z ]*$/",$name))
  {
   $error .= '<p><label class="text-danger">Only letters and white space allowed</label></p>';
  }
 }
 if(empty($_POST["email"]))
 {
  $error .= '<p><label class="text-danger">Please Enter your Email</label></p>';
 }
 else
 {
  $email = clean_text($_POST["email"]);
  if(!filter_var($email, FILTER_VALIDATE_EMAIL))
  {
   $error .= '<p><label class="text-danger">Invalid email format</label></p>';
  }
 }
 if(empty($_POST["phonenumber"]))
 {
  $error .= '<p><label class="text-danger">phonenumber is required</label></p>';
 }
 else
 {
  $phonenumber = clean_text($_POST["phonenumber"]);
 }
 if(empty($_POST["message"]))
 {
  $error .= '<p><label class="text-danger">Message is required</label></p>';
 }
 else
 {
  $message = clean_text($_POST["message"]);
 }

 if($error == '')
 {
  $file_open = fopen("contact_data.csv", "a");
  $no_rows = count(file("contact_data.csv"));
  if($no_rows > 1)
  {
   $no_rows = ($no_rows - 1) + 1;
  }
  $form_data = array(
   'sr_no'  => $no_rows,
   'name'  => $name,
   'email'  => $email,
   'phonenumber' => $phonenumber,
   'message' => $message
  );
  fputcsv($file_open, $form_data);
  $error = '<label class="text-success">Thank you for contacting us</label>';
  $name = '';
  $email = '';
  $phonenumber = '';
  $message = '';
 }
}

?>


<div class="col-md-8">
 
   <form action="" method="POST" >
    <input type="text" class="form-control" name="name" placeholder="Name"><br>
    <input type="text" class="form-control" name="subject" placeholder="subject"><br>
    <input type="emai" class="form-control" name="email" placeholder="email"><br>

    <textarea class="form-control " name="message" placeholder="Enter your message" style="height:150px"></textarea><br>

    <input type="submit" class="btn btn-primary" value="Send" name="Submit"><br><br>

   </form>

  </div> 
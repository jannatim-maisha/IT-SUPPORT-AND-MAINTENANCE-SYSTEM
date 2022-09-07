<!DOCTYPE html>
<html>

<head>
    <title>contact us</title>
    <!--Bootstrap5-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <script src="https://kit.fontawesome.com/2c988112ad.js" crossorigin="anonymous"></script>

    <!--Custom css-->
    <link rel="stylesheet" href="style.css" />

    <!--Fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,400;1,300&family=Libre+Baskerville&family=Poppins&family=Raleway:ital,wght@0,500;1,200&family=Roboto+Mono&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css"
        integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<?php

$fileName = "data.csv";

$file_handle = fopen($fileName, 'r');
while (!feof($file_handle)) {
    $data[] = fgetcsv($file_handle, 1024);
}
fclose($file_handle);

if (!empty($_POST)) {
    $new_csv = fopen($fileName, 'a');
    $list = array(
        0 => sizeof($data),
        1 => $_POST['usernamefirst'],
        2 => $_POST['usernamesecond'],
        3 => $_POST['phone'],
        4 => $_POST['email'],
        5 => $_POST['message']
    );
    fputcsv($new_csv, $list);
    $msg = "DATA STORED";
    fclose($new_csv);

    $data = NULL;
    $file_handle = fopen($fileName, 'r');
    while (!feof($file_handle)) {
        $data[] = fgetcsv($file_handle, 1024);
    }
    fclose($file_handle);
}
?>

<!-- <body>
    <div class="container table-container">
        <div class="row">
            <div class="msg">

            <div class="back-button">
                <form action="http://localhost/IT%20SUPPORT%20AND%20MAINTENANCE%20SYSTEM/index.php" method="post" class="icon-button btn">
                    <input type="submit" class="button" value="BACK" />
                </form>
            </div>



                <?php
              //  if (isset($msg)) {
                ?> <p> <?php 
                // echo $msg; ?> </p> <?php 
                //} ?>
            </div>
            <table class="table table-success table-hover">
                <tr>
                    <th width="14%">Serial No</th>
                    <th width="14%">First Name</th>
                    <th width="14%">Last Name</th>
                    <th width="14%">Phone No</th>
                    <th width="14%">Email ID</th>
                    <th width="30%">Message</th>
                </tr>
                <?php
              //  for ($x = 0; $x < (sizeof($data) - 1); $x += 1) {
                ?>
                    <tr>
                        <td><?php // echo $data[$x][0] ?></td>
                        <td><?php //echo $data[$x][1] ?></td>
                        <td><?php //echo $data[$x][2] ?></td>
                        <td><?php //echo $data[$x][3] ?></td>
                        <td><?php //echo $data[$x][4] ?></td>
                        <td><?php //echo $data[$x][5] ?></td>
                    </tr>
                <?php // } ?>
            </table>
        </div>
    </div>
</body> -->
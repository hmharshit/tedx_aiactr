<?php

require_once('connect.php');
$contact_name=$_POST['contact_name'];
$contact_email=$_POST['contact_email'];
$contact_no=$_POST['contact_no'];
$contact_message=$_POST['contact_message'];
$SQL_QUERY = "INSERT INTO contact_data
    (contact_name, contact_email, contact_no, contact_message)
    VALUES
    ('$contact_name', '$contact_email', '$contact_no', '$contact_message');";
echo "Thank You";
$result = pg_query($db_connection, $SQL_QUERY);

?>
<!DOCTYPE html>
<html>
<head>
    <meta name="theme-color" content="#a51e15" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <link rel="icon" href="public/images/icon.png" type="image/gif" sizes="16x16">
	<title>TEDxAIACTR</title>
    <link rel="icon" href="public/images/icon.png" type="image/gif" sizes="16x16">
	<link rel="stylesheet" type="text/css" href="external/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="external/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="public/css/main.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>
    <!-- <div class="loader"></div> -->

      <?php include "header.php"; ?>
   <center>
    <div class="thank">
        <div class="fa fa-check-square-o" style="color: #33f23c; font-size: 90 px;"></div>
        <h2>Thank You!</h2>
        <h3>Your submission is recieved and we will contact you soon.</h3>
    </div>
</center>
</center>

    <?php include "includes/footer.php";?>
</body>
</html>

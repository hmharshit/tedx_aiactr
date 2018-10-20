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
echo ($SQL_QUERY);

$result = pg_query($db_connection, $SQL_QUERY);
?>

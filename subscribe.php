<?php
require_once("connect.php");
$email=$_POST['email'];
$SQL_QUERY = "INSERT INTO subscribe
    (email)
    VALUES
    ('$email');";

// querying in database
$result = pg_query($db_connection, $SQL_QUERY);


?>

<?php
// getting req. variables for connection string from env vars
$localhost = getenv("RDS_HOST");
$DBNAME = getenv("DATABASE_NAME");
$USERNAME = getenv("RDS_USER");
$PASSWORD = getenv("RDS_PASSWORD");
$connection_string = "host=$localhost dbname=$DBNAME user=$USERNAME password=$PASSWORD";
$db_connection =pg_connect($connection_string);
if($db_connection) {
    } else {
        echo 'there has been an error connecting';
    }
?>

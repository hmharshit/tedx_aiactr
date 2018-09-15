<?php
echo getenv("$RDS_HOST");
$localhost = "tedx-aiactr.cbls8rqpglrt.ap-south-1.rds.amazonaws.com";
$DBNAME = "tedx_aiactr";
$USERNAME = "tedx_aiactr";
$PASSWORD = "3sy43hxvcUDW4KQV";
$connection_string = "host=$localhost dbname=$DBNAME user=$USERNAME password=$PASSWORD";
$db_connection = pg_connect($connection_string);
if($db_connection) {
    } else {
        echo 'there has been an error connecting';
    } 
?>
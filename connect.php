<?php
phpinfo();
echo extension_loaded('pgsql') ? 'yes':'no';
$localhost = "tedx-aiactr.cbls8rqpglrt.ap-south-1.rds.amazonaws.com";
$DBNAME = "tedx_aiactr";
$USERNAME = "tedx_aiactr";
$PASSWORD = "3sy43hxvcUDW4KQV";
$connection_string = "host=$localhost dbname=$DBNAME user=$USERNAME password=$PASSWORD";
echo $connection_string;
$db_connection = pg_connect($connection_string);
if($db_connection) {
       echo 'connected';
    } else {
        echo 'there has been an error connecting';
    } 
?>
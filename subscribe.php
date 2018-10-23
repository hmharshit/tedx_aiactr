<?php
function abc($emaill) {
    echo "inside";
require_once("connect.php");
$email=$emaill;
$SQL_QUERY = "INSERT INTO subscribe
    (email)
    VALUES
    ('$email');";

// querying in database
$result = pg_query($db_connection, $SQL_QUERY);
}
abc($_POST['email']);
?>

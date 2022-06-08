<?php
define ('db_user', 'root');
define ( 'db_password','');
define ('db_host', 'localhost');
define ( 'db_name', 'lab7');

$conn = mysqli_connect (db_host, db_user, db_password, db_name);

if (mysqli_connect_errno ())
{
    echo "Failed to connect to MysQL: " . mysqli_connect_error ();
}
?>
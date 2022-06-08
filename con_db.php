<?php
define('db_user','root');
define('db_passsword', null);
define('db_host','localhost');
define('db_name','registration');

$conn=mysqli_connect (db_host, db_user, db_passsword, db_name);
$result=mysqli_query($conn,"select*from user");
while($row=mysqli_fetch_array($result)){
    foreach($row as $key=>$value){
        echo "$key=$value <br>\n";
    }
}

mysqli_free_result($result);
mysqli_close($conn);
?>
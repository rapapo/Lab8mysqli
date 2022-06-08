<?php
define('db_user'),('root');
define('db_passsword','');
define('db_host','localhost');
define('db_name','registration');

$conn=mysql_connect (db_host, db_user, db_password, db_name);
$result=mysql_query($conn,"select*from user");
while($row=mysql_fetch_array($result)){
    foreeach($row as $key=>$value){
        echo "$key=$value <br>\n";
    }
}

mysql_free_result($result);
mysql_close($conn);
?>
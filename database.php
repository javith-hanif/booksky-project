<?php
$db_server="localhost";
$db_user="root";
$db_pass="";
$db_name="businessdb";
$db_conn="";
try{
$conn=mysqli_connect($db_server,
                     $db_user,
                     $db_pass,
                     $db_name);
}
catch(mysqli_sql_exception){
	echo "no connection";
}
if($conn){
	//echo "you are connected";
}

?>
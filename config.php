<?php
$hostName = 'localhost';
$userName = 'root';
$password = '';
$databaseName = 'wedev';
    
$conn = mysqli_connect($hostName, $userName, $password, $databaseName);
if ($conn){
	echo "connection found";
}
else{
    echo "Connection failed!!" + mysqli_connect_error();
}
?>
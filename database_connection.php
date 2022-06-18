<?php
//database_connection.php
$connect = new PDO('mysql:host=localhost;dbname=project1', 'root', '123456789');
$conn= mysqli_connect('localhost','root','123456789');
$db=mysqli_select_db($conn,'project1');
?>

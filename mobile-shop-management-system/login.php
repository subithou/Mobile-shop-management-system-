<?php
$error=''; //Variable to Store error message;
if(isset($_POST['submit']))
{


 //Define $user and $pass
 $user=$_POST['user'];
 $pass=$_POST['pass'];
 //Establishing Connection with server by passing server_name, user_id and pass as a patameter
 $conn = mysqli_connect("localhost","root","");
 //Selecting Database
 $db = mysqli_select_db($conn, "project");
 //sql query to fetch information of registerd user and finds user match.
 $query = mysqli_query($conn, "SELECT * FROM login WHERE password='$pass' AND user_name='$user'");

 $rows = mysqli_num_rows($query);
 if($rows == 1){
 header("Location: add_product.html"); // Redirecting to other page
 }
 else
 {
 header("Location: invalid_login.html");
 }
 mysqli_close($conn); // Closing connection

}

?>

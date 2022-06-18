<?php
if(isset($_GET['id']))
{
$id=$_GET['id'];


$conn = mysqli_connect("localhost","root","123456");
 //Selecting Database
 $db = mysqli_select_db($conn, "project");


$querry=mysqli_query($conn,"DELETE FROM product WHERE p_id='$id'");
header("Location: admin_view_product.php");
mysqli_close($conn);


}




?>
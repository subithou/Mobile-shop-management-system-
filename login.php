<?php
    include 'database_connection.php';
      if ($_POST){
      $user=$_POST['username'];
      $pass=$_POST['password'];
      $cat=$_POST['login'];
      
      
if($cat == 'Employee')
{


 $query = mysqli_query($conn, "SELECT * FROM login_tbl WHERE (usr_password='$pass' AND user_name='$user') AND category='Employee'");

 $rows = mysqli_num_rows($query);
 if($rows == 1){
 header("Location: add_product.php"); // Redirecting to other page
 }
 else
 {
 header("Location: invalid_login.html");
 }
} 
else
{
    $query = mysqli_query($conn, "SELECT * FROM login_tbl WHERE (usr_password='$pass' AND user_name='$user') AND category='Admin'");

    
 $rows = mysqli_num_rows($query);
 if($rows == 1){
 header("Location: admin/admin_employee.php"); // Redirecting to admin  page
 }
 else
 {
 header("Location: invalid_login.html");
 }

} 
 mysqli_close($conn); // Closing connection

}
    
?>
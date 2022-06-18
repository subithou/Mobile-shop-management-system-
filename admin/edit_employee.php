<?php
$error=''; //Variable to Store error message;
if(isset($_POST['update_employee']))
{

 //Define $user and $pass
 $id=$_POST['id'];
 $name=$_POST['name'];
 $address=$_POST['address'];
 $dob=$_POST['dob'];
 $phn=$_POST['phn'];
 $gender=$_POST['gender'];
 $category=$_POST['category'];
 $salary=$_POST['salary'];
 $date_of_join=$_POST['date_of_join'];
 //$p_unit_price=$pprice +($pprice*.25);

 //Establishing Connection with server by passing server_name, user_id and pass as a patameter
 include 'database_connection.php';

 
 
  
  
$query = mysqli_query($conn,"UPDATE employee SET emp_name='$name',emp_address='$address',emp_dob='$dob',emp_phn='$phn',emp_gender='$gender',emp_category='$category',emp_salary='$salary',emp_date_join='$date_of_join' WHERE emp_id='$id'");
    
header("Location: admin_employee.php");
     
 



mysqli_close($conn);
}


?>
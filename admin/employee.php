<?php
$error=''; //Variable to Store error message;
if(isset($_POST['add_employee']))
{

 //Define $user and $pass
 
 $name=$_POST['name'];
 $address=$_POST['address'];
 $dob=$_POST['dob'];
 $phn=$_POST['phn'];
 $gender=$_POST['gender'];
 $category=$_POST['category'];
 $salary=$_POST['salary'];
 $date_of_join=$_POST['date_of_join'];
 //$p_unit_price=$pprice +($pprice*.25);
echo $name;
 include 'database_connection.php';
 //sql query to fetch information of registerd user and finds user match.

 
 
  
  
$query = mysqli_query($conn,"INSERT into employee (emp_name,emp_address,emp_dob,emp_phn,emp_gender,emp_category,emp_salary,emp_date_join) values ('$name','$address','$dob',$phn,'$gender','$category',$salary,'$date_of_join')");
    
header("Location: admin_employee.php");
     
 



mysqli_close($conn);
}


?>
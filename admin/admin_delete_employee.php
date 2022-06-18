<?php
   



if(isset($_GET['id']))
{
    

    $id=$_GET['id'];

    

    include 'database_connection.php';
    
     $query4 = mysqli_query($conn,"DELETE FROM employee WHERE emp_id='$id'");
     
     header("Location: admin_employee.php");   
}

?>
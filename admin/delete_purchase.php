<?php

 if(isset($_GET['purchase_id']))
 {
     $id=$_GET['purchase_id'];
 
 //create connection $conn = mysqli_connect('localhost','root',"");
 include 'database_connection.php';
 
 $query2 = mysqli_query($conn,"SELECT product_id,product_quantity FROM purchase WHERE purchase_id=$id");
 
 while($result=mysqli_fetch_array($query2))
 {
     $pid=$result['product_id'];
     $qty=$result['product_quantity'];
 }

 $quer3=mysqli_query($conn,"UPDATE product SET p_quantity=(p_quantity-'$qty') WHERE p_id='$pid'");

 $query8 = mysqli_query($conn,"SELECT * FROM product WHERE p_id='$pid'");
 $result2 = mysqli_fetch_array($query8);
 $newq=$result2['p_quantity'];
 if ($newq <= 0)
 {
     $query3 = mysqli_query($conn,"DELETE FROM product WHERE p_id='$pid'");
 }
 
 $query = mysqli_query($conn,"DELETE  FROM purchase WHERE purchase_id='$id' ");
  // selecting data through mysql_query()
 header("Location: admin_purchase.php");


}
 
 ?>
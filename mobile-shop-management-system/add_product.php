<?php
$error=''; //Variable to Store error message;
if(isset($_POST['add_product']))
{

 //Define $user and $pass
 $id=$_POST['product_id'];
 $pname=$_POST['product_name'];
 $bname=$_POST['brand_name'];
 $pprice=$_POST['purchasing_price'];
 $pquantity=$_POST['product_quantity'];
 $tprice=$_POST['total_price'];
 $pdate=$_POST['date_of_purchase'];
 $p_unit_price=$pprice +($pprice*.25);

 //Establishing Connection with server by passing server_name, user_id and pass as a patameter
 $conn = mysqli_connect("localhost","root","");
 //Selecting Database
 $db = mysqli_select_db($conn, "project");
 //sql query to fetch information of registerd user and finds user match.

 $query = mysqli_query($conn, "INSERT into purchase (product_id,product_name,brand_name,purchasing_price,product_quantity,total_price,purchase_date) values ($id,'$pname','$bname',$pprice,$pquantity,$tprice,'$pdate')");
 $query1 = mysqli_query($conn,"SELECT * FROM product WHERE p_id=$id");
 $row = mysqli_num_rows($query1);
 if($query){
 header("Location: add_product.html"); // Redirecting to other page
 }
 if ($row == 0) {

   $query2 = mysqli_query($conn,"INSERT into product (p_id,p_name,b_name,p_quantity,old_p_unit_price,new_p_unit_price) values('$id','$pname','$bname','$pquantity','NULL','$p_unit_price')");

 }
 else {
   $query3 = mysqli_query($conn,"UPDATE product SET p_quantity=p_quantity+'$pquantity',old_p_unit_price=new_p_unit_price,new_p_unit_price='$p_unit_price' WHERE p_id='$id'");
 }
mysqli_close($conn);
}

?>

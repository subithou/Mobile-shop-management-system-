<?php
$error=''; //Variable to Store error message;
if(isset($_POST['add_sale']))
{


  $name=$_POST['c_name'];
  $phn=$_POST['c_phno'];
  $pid=$_POST['p_id'];
  $quantity=$_POST['quantity'];
  $rate=$_POST['rate'];
  $disc_amnt=$_POST['disc_amnt'];
  $pcgst=$_POST['cgst'];
  $psgst=$_POST['sgst'];
  $pigst=$_POST['igst'];
  $date=$_POST['date'];
  $taxable_amount=($rate*$quantity)-$disc_amnt;
  $cgst=(($pcgst/100)*$taxable_amount);
  $sgst=(($psgst/100)*$taxable_amount);
  $igst=(($pigst/100)*$taxable_amount);
  $total_amount=$taxable_amount+$cgst+$sgst+$igst;

$conn = mysqli_connect("localhost","root","");

$db = mysqli_select_db($conn, "project");
$pnamequery = mysqli_query($conn,"SELECT * FROM product WHERE p_id=$pid");
$prow=mysqli_num_rows($pnamequery);
if($prow == 1)
{
  while($result =mysqli_fetch_array($pnamequery))
  {
    $pname = $result['p_name'];
  }


$idquery = mysqli_query($conn,"SELECT * FROM invoice");
$row1 = mysqli_num_rows($idquery);
if($row1 == 0)
{
  $invoiceid=1000;
  $query = mysqli_query($conn, "INSERT into invoice (invoice_no,c_name,c_phn,c_product_id,c_p_name,c_product_quantity,c_product_price,disc_amnt,taxable_value,cgst,sgst,igst,total_amount,c_date) values('$invoiceid','$name','$phn','$pid','$pname','$quantity','$rate','$disc_amnt','$taxable_amount','$cgst','$sgst','$igst','$total_amount','$date')");
}
else {
  $query1 = mysqli_query($conn,"SELECT invoice_no FROM invoice");
while ($row2 = mysqli_fetch_array($query1))
{
       $p=$row2['invoice_no'];
}
$invoiceid=$p+1;
$query2 = mysqli_query($conn, "INSERT into invoice (invoice_no,c_name,c_phn,c_product_id,c_p_name,c_product_quantity,c_product_price,disc_amnt,taxable_value,cgst,sgst,igst,total_amount,c_date) values('$invoiceid','$name','$phn','$pid','$pname','$quantity','$rate','$disc_amnt','$taxable_amount','$cgst','$sgst','$igst','$total_amount','$date')");
}
$updatequery = mysqli_query($conn,"UPDATE product SET p_quantity=p_quantity-$quantity WHERE p_id=$pid" );

}

else {
  header("Location: invalid_sale.html");;
}
// $row = mysqli_num_rows($query1);
 //if($query){
// header("Location: add_product.html"); // Redirecting to other page
//// }
 //if ($row == 0) {
// else {
//   $query3 = mysqli_query($conn,"UPDATE product SET p_quantity=p_quantity+'$pquantity',old_p_unit_price=new_p_unit_price,new_p_unit_price='$p_unit_price' WHERE p_id='$id'");
// }
mysqli_close($conn);
}

?>

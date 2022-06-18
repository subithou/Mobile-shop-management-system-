<?php
if(isset($_GET['id']))
{
    include 'database_connection.php';

    
$id=$_GET['id'];//order id   pkey ---tbl_order
//tbl_order_item   column for dwnload
//order_item_quantity
//item_name
//$query=mysqli_query("$connn","DELETE FROM tbl_order WHERE order_id=$id")
$query5 = mysqli_query($conn,"SELECT * FROM tbl_order_item WHERE order_id='$id'");
$rowquery5 = mysqli_num_rows($query5);

$query = "SELECT item_name,order_item_quantity FROM tbl_order_item WHERE order_id=$id";


for ($x = 1; $x <= $rowquery5 ; $x++)
{

if ($stmt = $conn->prepare($query)) {
    $stmt->execute();
    
    $stmt->bind_result($item_name, $order_item_quantity);
    while ($stmt->fetch()) {
        //printf("%s, %s\n", $item_name, $order_item_quantity);
        $name=$item_name;
        $qty=$order_item_quantity;
        
       
    }
    echo $name;
    echo $qty;
    $query8=mysqli_query($conn,"UPDATE product SET p_quantity=(p_quantity+$qty) WHERE p_name='$name'");
    $query6 = mysqli_query($conn,"DELETE FROM tbl_order_item WHERE order_id='$id' AND item_name='$name'");
    $query7 = mysqli_query($conn,"DELETE FROM tbl_order WHERE order_id='$id'");
    $stmt->close();

}
}



}
header("Location: admin_invoice.php");

?>
<?php
   



if(isset($_GET['update_product']))
    {
      
     //Define $user and $pass
     $pid=$_GET['product_id'];
     $purid=$_GET['purchase_id'];
     $pname=$_GET['product_name'];
     $bname=$_GET['brand_name'];
     $cat=$_GET['product_cat'];
     $pprice=$_GET['purchasing_price'];
     $pquantity=$_GET['product_quantity'];
     $pmrp=$_GET['mrp'];
     $tprice=$_GET['total_price'];
     $pdate=$_GET['date_of_purchase'];
    

     include 'database_connection.php';
    
     $query4 = mysqli_query($conn,"SELECT * FROM purchase WHERE purchase_id='$purid'");
     
     $result= mysqli_fetch_array($query4);
    
    $productq=$result['product_quantity'];

    $productid=$result['product_id'];
    //$query11=mysqli_query($conn,"UPDATE product SET p_quantity=(p_quantity-'$productq') WHERE p_id='$productid'");

    $query12=mysqli_query($conn,"SELECT * FROM product WHERE p_id=$pid");
  
    $presult = mysqli_fetch_array($query12);
    $pcount = mysqli_num_rows($query12);
    if ($pcount == 1)
    {
        if(($presult['p_name'] == $pname) && ($presult['b_name'] == $bname) && $presult['p_id']==$pid)
        {
            $query14 = mysqli_query($conn,"UPDATE product SET p_quantity=(p_quantity-$productq)  WHERE p_id='$productid'");
               $query6 = mysqli_query($conn,"UPDATE product SET p_quantity=(p_quantity+'$pquantity'),mrp='$pmrp',p_name='$pname',b_name='$bname',p_cat='$cat' WHERE p_id='$pid'");
               $query15 = mysqli_query($conn, "UPDATE purchase SET product_id='$pid',product_name='$pname',brand_name='$bname',product_cat='$cat',purchasing_price='$pprice',product_quantity='$pquantity',total_price='$tprice',p_mrp='$pmrp',purchase_date='$pdate' WHERE purchase_id='$purid'");
            
               header("Location: view_purchase.php");
           
     
            
        
        }
        else
        {
            //for using the base_url() function
            ?><html>
            <script>
            setTimeout(function () {
                alert("The product id already used for another product");
                window.location.replace("view_purchase.php"); //will redirect to main page (index.html)
            },10); //will call the function after 3 secs.
        </script>  
        </html>
        <?php
           
           
            //alert the product id already already used
       
        }
    }
    else
    {
        $query14 = mysqli_query($conn,"UPDATE product SET p_quantity=(p_quantity-'$productq') WHERE p_id='$productid'");
        $query13 = mysqli_query($conn,"INSERT INTO product values('$pid','$pname','$bname','$pquantity','$pmrp','$cat')");
        
        $query15 = mysqli_query($conn, "UPDATE purchase SET product_id='$pid',product_name='$pname',brand_name='$bname',product_cat='$cat',purchasing_price='$pprice',product_quantity='$pquantity',total_price='$tprice',p_mrp='$pmrp',purchase_date='$pdate' WHERE purchase_id='$purid'");
        header("Location: view_purchase.php");
    }

    
    
    
    
    mysqli_close($conn);
   
  }
?>

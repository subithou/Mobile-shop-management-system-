

<?php
$error='';
if(isset($_POST['add_product']))
{
   //Variable to Store error message;

 //Define $user and $pass
 $id=$_POST['product_id'];
 $pname=$_POST['product_name'];
 $bname=$_POST['brand_name'];
 $pprice=$_POST['purchasing_price'];
 $pquantity=$_POST['product_quantity'];
 $cat=$_POST['product_cat'];
 $pmrp=$_POST['mrp'];
 $tprice=$_POST['total_price'];
 $pdate=$_POST['date_of_purchase'];
 //$p_unit_price=$pprice +($pprice*.25)


 include 'database_connection.php';
 if ($pquantity >0){
   
    $query5 = mysqli_query($conn,"SELECT * FROM product WHERE (p_id='$id' AND p_name='$pname') AND b_name='$bname'");
    $rowquery5 = mysqli_num_rows($query5);

    $query6 = mysqli_query($conn,"SELECT * FROM product WHERE p_id=$id");
    $rowquery6= mysqli_num_rows($query6);
 
 
    if ($rowquery6 ==0)
    {
        $query = mysqli_query($conn,"INSERT into purchase (product_id,product_name,brand_name,product_cat,purchasing_price,product_quantity,p_mrp,total_price,purchase_date) values ('$id','$pname','$bname','$cat','$pprice','$pquantity','$pmrp','$tprice','$pdate')");
        $query8 = mysqli_query($conn,"INSERT into product (p_id,p_name,b_name,p_quantity,mrp,p_cat) values('$id','$pname','$bname','$pquantity','$pmrp','$cat')");
        header("Location: view_product.php");
    }
    else
    {
        if($rowquery5 == 1)
        {
            $query = mysqli_query($conn,"INSERT into purchase (product_id,product_name,brand_name,product_cat,purchasing_price,product_quantity,p_mrp,total_price,purchase_date) values ('$id','$pname','$bname','$cat','$pprice','$pquantity','$pmrp','$tprice','$pdate')");
            $query9 = mysqli_query($conn,"UPDATE product SET p_quantity=(p_quantity+'$pquantity') WHERE p_id='$id'");
            header("Location: view_product.php");  
        }
        else 
        {
          $error="Product id already exist";
        }

    }

 }
 else
{
  $error="Please enter valid quantity";
 
}





mysqli_close($conn);
}


?>



<!DOCTYPE html>
<html lang="eng">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Fashi Template">
    <meta name="keywords" content="Fashi, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mobile shop management system</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/themify-icons.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">



<script>
  function sum()
  {
    var price,total,quantity;
    price = document.add_product.purchasing_price.value;
    quantity = document.add_product.product_quantity.value;
    total = price * quantity;
    document.add_product.total_price.value = total;
  }
</script>

</head>

<body style="background-color:#d9d9d9">
    <!-- Page Preloder -->


    <!-- Header Section Begin -->
    <header class="header-section">

        <div class="container">
            <div class="inner-header">
                <div class="row">
                    <div class="col-lg-2 col-md-2">
						<!-- mobile shop logo -->
                        


                </div>
            </div>
        </div>
		<!-- menu section begins -->
        <div class="nav-item">
            <div class="container">
                <div class="nav-depart">

                </div>
                <nav class="nav-menu mobile-menu">
                    <ul>
                        <li class="active"></li>


                                <li><a href="./add_product.php">Add Product</a></li>
                                <li><a href="./view_product.php">View Product</a></li>
                                <li><a href="./view_purchase.php">Purchase History</a></li>
                        <li><a href="./invoice.php">Sale</a></li>
                        <li><a href="#">Report</a>
                          <ul class="dropdown">
                            <li><a href="./sales_report.php">Sales Report</a></li>
                            <li><a href="./purchase_report.php">Purchase Report</a></li>
                              </ul>
                                
                                


						</li>
						<li><a href="#">Profile</a>
              <ul class="dropdown">
                    <li><a href="./change_username.php">Change username</a></li>
                    <li><a href="./change_password.php">Change password</a></li>
                    <li><a href="./logout.php">Log out</a></li>
                      </ul>
                      </li>




                </nav>
			</div>
		</div>
                <div id="mobile-menu-wrap"></div>


    </header>
    <!-- Header End -->



    <!-- Deal Of The Week Section Begin-->

    <style>
      @font-face {
        font-family: OpenSans-Regular;
        src: url('../fonts/OpenSans/OpenSans-Regular.ttf'); 
      }
      .header
      { 
         width: 94.75%;
          height:10%;
          font-family: OpenSans-Regular;
          
          color:#fff;
          background-color:#00264d;
          border:2px solid #3399ff;
          padding:2.5%;
      }
      #form {
           text-align:center;
           margin-left:20%;
           margin-right:20%;
           margin-top:5%;
           font-family: OpenSans-Regular, sans-serif;
           padding:5%;
      
           width:60%;
           background: #fff;
           border-radius: 10px;
           overflow: hidden;
           box-shadow: 0 3px 20px 0px rgba(0, 0, 0, 0.1);
           -moz-box-shadow: 0 3px 20px 0px rgba(0, 0, 0, 0.1);
           -webkit-box-shadow: 0 3px 20px 0px rgba(0, 0, 0, 0.1);
           -o-box-shadow: 0 3px 20px 0px rgba(0, 0, 0, 0.1);
           -ms-box-shadow: 0 3px 20px 0px rgba(0, 0, 0, 0.1);
           
           }
           #sline{background-color: #fff;
                  border: 1px solid #ccd8ff;}
           #submit {
               margin-left:40%;
        display: -webkit-box;
        display: -webkit-flex;
        display: -moz-box;
        display: -ms-flexbox;
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 0px;
        width: 20%;
        height:5%;
        background-color:  #00cc7a;
        font-family: OpenSans-Regular;
        font-size: 14px;
        color: #fff;
        line-height: 1.2;
        text-transform: uppercase;
        -webkit-transition: all 0.4s;
        -o-transition: all 0.4s;
        -moz-transition: all 0.4s;
        transition: all 0.4s;
        }
        .submit:hover {
        background-color: #333333;
      }
      
      </style>
    <style>
      h2 {
        text-align:center;
      }
    </style>
    &nbsp;&nbsp;<section>


          <div id=form>
                <br>
                <h3>Add Product</h3>
            
                <form name="add_product" action="add_product.php" method="post">
                  <br>
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  <p style="color:red;"><i><?php echo $error; ?></i></p>
                  
                  <select name="product_cat" >
                    <option value="mobile">Mobile</option>
                    <option value="Accessories">Accessories</option>
                    <option value="Others">other</option>
                   
                  </select>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br><br><p align="center"> Product ID  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;
                    <input type="text" name="product_id" size="30" maxlength="25" required>
                  </p>
                  &nbsp;&nbsp;<p  align="center">   Product Name   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;
                    <input type="text" name="product_name" size="30" maxlength="25" required>
                  </p>
                  <p align="center"> <br>Brand Name  :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;
                    <input type="text" name="brand_name" size="30" maxlength="25" required>
                  </p>
                  
                
                 
                  
                <p align="center"><br> Purchasing price(per unit)  &nbsp;
                    <input type="text" name="purchasing_price" size="30" maxlength="25" required>
                  </p>
                  <p align="center"> <br>Quantity  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                    <input type="text" name="product_quantity" size="30" maxlength="25" required>
                  </p>
                  
                <p align="center"> <br>
                Total price   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      <input  type="text" name="total_price" size="30" maxlength="25" required readonly onclick="sum()">
                  </p>
                  <p align="center"><br> MRP(per unit) &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="text" name="mrp" size="30" maxlength="25" required>
                  </p>
                  <p align="left  "><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    Date of purchase &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="date" name="date_of_purchase" size="30" maxlength="25" required>
                  </p>
                 

                  <br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;

                  <button align="center" class="login100-form-btn" name="add_product"  >
      							Add product
      						</button>

                </form>
              </div>
              


    </section>
    <!-- Deal Of The Week Section End -->


    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.countdown.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery.zoom.min.js"></script>
    <script src="js/jquery.dd.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>


<iframe src="" frameborder="0"></iframe>



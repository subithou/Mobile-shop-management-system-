

<!DOCTYPE html>
<html lang="eng">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Fashi Template">
    <meta name="keywords" content="Fashi, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fashi | Template</title>

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





</head>

<body>
    <!-- Page Preloder -->


    <!-- Header Section Begin -->
    <header class="header-section">

        <div class="container">
            <div class="inner-header">
                <div class="row">
                    <div class="col-lg-2 col-md-2">
						<!-- mobile shop logo -->
                        <div class="logo">
                            <a href="./add_product.html">
                                <img src="img/logo.png" alt="">

                            </a>
                        </div>
                    </div>


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


                                <li><a href="./add_product.html">Add Product</a></li>
                                <li><a href="./view_product.php">View Products</a></li>

                        <li><a href="./sales.html">Sale</a></li>


                                <li><a href="./sales_report.html">Sales Report</a></li>
                                <li><a href="./purchase_report.html">Purchase Report</a></li>

							</ul>

						<li><a href="./Profile.html">Profile</a></li>



                    </ul>
                </nav>
			</div>
		</div>
                <div id="mobile-menu-wrap"></div>


    </header>
    <!-- Header End -->



    <!--View section -->
    &nbsp;&nbsp;<section>


          <div >
                <br>
          <h2 align="center"> <b>
            <u>LIST OF PRODUCTS</u></b></h2><br><br>

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

<?php
$error=''; //Variable to Store error message;
if(isset($_POST['view_purchase']))
{
 if(empty($_POST['from']) || empty($_POST['to']))
 {
 header("Location: invalid_view_purchase.html");
 }
 else
 {
$from=$_POST['from'];
$to=$_POST['to'];



//create connection $conn = mysqli_connect('localhost','root',"");
$conn = mysqli_connect('localhost','root',"");
$db = mysqli_select_db($conn,"project"); // we are now connected to database
$query = mysqli_query($conn,"SELECT * FROM purchase where purchase_date BETWEEN '$from' AND '$to'"); // selecting data through mysql_query()

echo "<table border='2' cellpadding='5' align='center'>
<tr>
<th>Product ID</th>
<th>Product Name</th>
<th>Brand Name</th>
<th>Purchasing price(per unit)</th>
<th>Product Quantity</th>
<th>Total price</th>
<th>Date of purchase</th>

</tr>";

while($row = mysqli_fetch_array($query))
{
echo "<tr>";
echo "<td>" . $row['product_id'] . "</td>";
echo "<td>" . $row['product_name'] . "</td>";
echo "<td>" . $row['brand_name'] . "</td>";
echo "<td>" . $row['purchasing_price'] . "</td>";
echo "<td>" . $row['product_quantity'] . "</td>";
echo "<td>" . $row['total_price'] . "</td>";
echo "<td>" . $row['purchase_date'] . "</td>";

echo "</tr>";
}
echo "</table>";
}
mysqli_close($conn);
}
  // code...






 ?>

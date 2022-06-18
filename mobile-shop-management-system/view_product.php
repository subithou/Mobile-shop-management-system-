
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
                            </ul>
                        <li><a href="./sales.html">Sale</a></li>

                                <li><a href="./sales_report.html">Sales Report</a></li>
                                <li><a href="./purchase_report.html">Purchase Report</a></li>

							</ul>
						</li>
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



//create connection
$conn =mysqli_connect('localhost','root',"");
$db = mysqli_select_db($conn,"project"); // we are now connected to database
$query = mysqli_query($conn,"SELECT * FROM product"); // selecting data through mysql_query()

echo "<table border='2' cellpadding='5' align='center'>
<tr>
<th>Product ID</th>
<th>Product Name</th>
<th>Brand Name</th>
<th>Product Quantity</th>
<th>Old unit price</th>
<th>New unit price</th>
<th>action</th>
</tr>";

while($row = mysqli_fetch_array($query))
{
echo "<tr>";
echo "<td>" . $row['p_id'] . "</td>";
echo "<td>" . $row['p_name'] . "</td>";
echo "<td>" . $row['b_name'] . "</td>";
echo "<td>" . $row['p_quantity'] . "</td>";
echo "<td>" . $row['old_p_unit_price'] . "</td>";
echo "<td>" . $row['new_p_unit_price'] . "</td>";
echo "<td><input type='button' name='buysell' value='buy'></td>";

echo "</tr>";
}
echo "</table>";

mysqli_close($conn);
  // code...



?>

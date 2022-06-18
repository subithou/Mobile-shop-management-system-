<html lang="en">
  <head>
  

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

    <title></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex, nofollow">
    <link rel="stylesheet" href="css/bootstrap.min.css">


    <!-- Latest compiled and minified CSS -->



    <!-- jQuery library -->


<!-- Latest compiled JavaScript -->


    

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" >
    

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.css">
  
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.js"></script>
  
 <!-- https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css
https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap5.min.css -->

    <script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap5.min.js"></script>
    
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
           margin-left:10%;
           margin-right:2%;
           margin-top:5%;
           font-family: OpenSans-Regular, sans-serif;
           padding:5%;
      
           width:80%;
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
/* Remove the navbar's default margin-bottom and rounded borders */ 
.navbar {
      margin-bottom: 4px;
      border-radius: 0;
      }
      /* Add a gray background color and some padding to the footer */
      footer {
      background-color: #f2f2f2;
      padding: 25px;
      }
      .carousel-inner img {
      width: 100%; /* Set width to 100% */
      margin: auto;
      min-height:200px;
      }
      .navbar-brand
      {
      padding:5px 40px;
      }
      .navbar-brand:hover
      {
      background-color:#ffffff;
      }
      /* Hide the carousel text when the screen is less than 600 pixels wide */
      @media (max-width: 600px) {
      .carousel-caption {
      display: none; 
      }
      }
    </style>

<body style="background-color:#d9d9d9">
    <!-- Page Preloder -->


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




    
      
 
    <style>
      table
      {
      width: 100%;
      max-width: 1390px;
      border-radius: 5px;
      border:1px solid #ccc;
      padding: 15px;
      margin: 0 auto;                
      margin-top:50px;
      box-sizing:border-box;
      }

      h2 {
  text-align:center;
}
    </style>
<?php
//create connection
include 'database_connection.php';
$query = mysqli_query($conn,"SELECT * FROM product"); // selecting data through mysql_query()
?>

    


  <div id="form">
   
        <br>
        <br>
      <h2>Products</h2>
      <br>
      <table id="data-table" class="table table-bordered table-striped" >
        <thead>
          <tr>
          <th>Product ID</th>
            <th>Product Name</th>
            <th>Brand Name</th>
            <th>Product Quantity</th>
            <th>MRP</th>
            <th>Category</th>
          </tr>
        </thead>
        <?php
            while($row = mysqli_fetch_array($query))
            echo '
              <tr>
                <td>'.$row["p_id"].'</td>
                <td>'.$row["p_name"].'</td>
                <td>'.$row["b_name"].'</td>
                <td>'.$row["p_quantity"].'</td>
                <td>'.$row["mrp"].'</td>
                <td>'.$row["p_cat"].'</td>
               
              </tr>
            ';
          
        
        ?>
      </table>
</div>
      
   
    <br>
  </body>
</html>
<script type="text/javascript">
$(document).ready(function() {
    $('#data-table').DataTable();
} );

  

</script>
<script>
$(document).ready( function () {
    $('#myTable').DataTable();
} );
</script>

<script>
$(document).ready(function(){
$('.number_only').keypress(function(e){
return isNumbers(e, this);      
});
function isNumbers(evt, element) 
{
var charCode = (evt.which) ? evt.which : event.keyCode;
if (
(charCode != 46 || $(element).val().indexOf('.') != -1) &&      // “.” CHECK DOT, AND ONLY ONE.
(charCode < 48 || charCode > 57))
return false;
return true;
}
});
</script>
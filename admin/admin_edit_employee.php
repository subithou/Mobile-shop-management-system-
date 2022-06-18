<?php

$id = $_GET['id'];

include 'database_connection.php';

 $querry=mysqli_query($conn,"SELECT * FROM employee WHERE emp_id='$id'");
 $result=mysqli_fetch_array($querry);


?>



<!DOCTYPE html>


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
    
    


    
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
   

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
    <style>
     body {
          margin-left: 4px;
          margin-right: 4px;
     }
    </style>
<body>
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
        </div>
		<!-- menu section begins -->
        <div class="nav-item">
            <div class="container">
                <div class="nav-depart">

                </div>
                <nav class="nav-menu mobile-menu">
                    <ul>
                    <li class="active"></li>


                  <li><a href="./admin_employee.php">Employee</a></li>
                  <li><a href="./admin_view_product.php">View Product</a></li>
                  <li><a href="./admin_purchase.php">Purchase History</a></li>
                  <li><a href="./admin_invoice.php">Sale</a></li>
                  <li><a href="#">Report</a>
                  <ul class="dropdown">
                      <li><a href="./admin_sales_report.php">Sales Report</a></li>
                      <li><a href="./admin_purchase_report.php">Purchase Report</a></li>
                </ul>
                </li>
                <li><a href="#">Profile</a>
                <ul class="dropdown">
                  <li><a href="./change_username.php">Change username</a></li>
                  <li><a href="./change_password.php">Change password</a></li>
                  <li><a href="./login.html">Log out</a></li>
                </ul>
              </li>



                    </ul>
                </nav>
			</div>
		</div>
                <div id="mobile-menu-wrap"></div>


  <head>
    
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <style>
      html, body {
      min-height: 100%;
      }
      body, div, form, input, select, textarea, label { 
      padding: 0;
      margin: 0;
      outline: none;
      font-family: Roboto, Arial, sans-serif;
      font-size: 14px;
      color: #666;
      line-height: 22px;
      }
      h1 {
      position: absolute;
      margin: 0;
      font-size: 40px;
      color: #fff;
      z-index: 2;
      line-height: 83px;
      }
      .testbox {
      display: flex;
      justify-content: center;
      align-items: center;
      height: inherit;
      padding: 20px;
      }
      form {
      width: 100%;
      padding: 20px;
      border-radius: 6px;
      background: #fff;
      box-shadow: 0 0 8px  #cc7a00; 
      }
      
      
      .banner::after {
      content: "";
      background-color: rgba(0, 0, 0, 0.2); 
      position: absolute;
      width: 100%;
      height: 100%;
      }
      input, select, textarea {
      margin-bottom: 10px;
      border: 1px solid #ccc;
      border-radius: 3px;
      }
      input {
      width: calc(100% - 10px);
      padding: 5px;
      }
      input[type="date"] {
      padding: 4px 5px;
      }
      textarea {
      width: calc(100% - 12px);
      padding: 5px;
      }
      .item:hover p, .item:hover i, .question:hover p, .question label:hover, input:hover::placeholder {
      color: #cc7a00;
      }
      .item input:hover, .item select:hover, .item textarea:hover {
      border: 1px solid transparent;
      box-shadow: 0 0 3px 0 #cc7a00;
      color: #cc7a00;
      }
      .item {
      position: relative;
      margin: 10px 0;
      }
      .item span {
      color: red;
      }
      input[type="date"]::-webkit-inner-spin-button {
      display: none;
      }
      .item i, input[type="date"]::-webkit-calendar-picker-indicator {
      position: absolute;
      font-size: 20px;
      color: #cc7a00;
      }
      .item i {
      right: 1%;
      top: 30px;
      z-index: 1;
      }
      [type="date"]::-webkit-calendar-picker-indicator {
      right: 1%;
      z-index: 2;
      opacity: 0;
      cursor: pointer;
      }
      input[type=radio], input[type=checkbox]  {
      display: none;
      }
      label.radio {
      position: relative;
      display: inline-block;
      margin: 5px 20px 15px 0;
      cursor: pointer;
      }
      .question span {
      margin-left: 30px;
      }
      .question-answer label {
      display: block;
      }
      label.radio:before {
      content: "";
      position: absolute;
      left: 0;
      width: 17px;
      height: 17px;
      border-radius: 50%;
      border: 2px solid #ccc;
      }
      input[type=radio]:checked + label:before, label.radio:hover:before {
      border: 2px solid #cc7a00;
      }
      label.radio:after {
      content: "";
      position: absolute;
      top: 6px;
      left: 5px;
      width: 8px;
      height: 4px;
      border: 3px solid #cc7a00;
      border-top: none;
      border-right: none;
      transform: rotate(-45deg);
      opacity: 0;
      }
      input[type=radio]:checked + label:after {
      opacity: 1;
      }
      .btn-block {
      margin-top: 10px;
      text-align: center;
      }
      button {
      width: 150px;
      padding: 10px;
      border: none;
      border-radius: 5px; 
      background: #cc7a00;
      font-size: 16px;
      color: #fff;
      cursor: pointer;
      }
      button:hover {
      background: #ff9800;
      }
      @media (min-width: 568px) {
      .name-item, .city-item {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
      }
      .name-item input, .name-item div {
      width: calc(50% - 20px);
      }
      .name-item div input {
      width:97%;}
      .name-item div label {
      display:block;
      padding-bottom:5px;
      }
      }
    </style>
  </head>
  <body>
    <div class="testbox">
      <form action="edit_employee.php" method="POST">
        <div class="">
         
        </div>
        <p>Employee Information</p>
        <div class="item">
          <label for="name">ID<span>*</span></label>
          <input id="id" type="number" name="id" value=<?php echo $result['emp_id']?> readonly/>
        </div>
        <div class="item">
          <label for="name">Name<span>*</span></label>
          <input id="name" type="text" name="name" value=<?php echo $result['emp_name']?> required/>
        </div>
        <div class="item">
          <label for="address"> Address<span>*</span></label>
          <input id="address" type="address" name="address" value=<?php echo $result['emp_address']?> required/>
        </div>
        <div class="item">
          <label for="date of birth">Date of birth<span>*</span></label>
          <input id="dob" type="date" name="dob" value=<?php echo $result['emp_dob']?> required/>
        </div>
        <div class="item">
          <label for="phn">Phone number<span>*</span></label>
          <input id="phn" type="number" name="phn" value=<?php echo $result['emp_phn']?> required/>
        </div>
        <!--<div class="item">
          <label for="state">State<span>*</span></label>
          <input id="state" type="text" name="state" required/>
        </div> -->
        <label for="gender">gender:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<select name="gender" value=<?php echo $result['emp_gender']?> >
  <option value="male">Male</option>
  <option value="female">Female</option>
  <option value="other">Other</option>
  
</select>
        
        <label for="Category">Category:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<select name="category" value=<?php echo $result['emp_category']?> >
  <option value="sales">Sales</option>
  <option value="service">Service</option>
  <option value="cleaning">Cleaning</option>
  <option value="others">others</option>
</select>
<div class="item">
          <label for="salary">Salary<span>*</span></label>
          <input id="salary" type="number" name="salary" value=<?php echo $result['emp_salary']?> required/>
        </div>

        <div class="item">
          <label for="date_of_join">Date of join<span>*</span></label>
          <input id="date_of_join" type="date" name="date_of_join" value=<?php echo $result['emp_date_join']?> required/>
        </div>
       



        <div class="btn-block">
          <button type="submit" name="update_employee">update</button>
        </div>
      </form>
    </div>
  </body>
</html>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

     
    <title>Main Page</title>
    
     <link rel="stylesheet" type="text/css" href="stylesheets/mystyle.css">
     <link rel="stylesheet" type="text/css" href="bootstrap/bootstrap.min.css">  

     <style type="text/css">
       body{
        background-color: #99ccff;
       }
     </style>

  </head>


  <body>
     
   <?php
    include 'navbar.php';
    ?>

<br>
  	
    <section id="Main">
    	<div class="container">
    		    
           <img id="logoimg"  class="img-rounded" src="images/logo.jpg ">
    			<p class="heading">The Spark Bank</p>
    		
    	</div>
    </section>

    <section id="features">
     <a  href="user.php"><button type="button" class="btn btn-dark btn-lg download-button">Create User</button></a>

    	<a  href="customer.php"><button type="button" class="btn btn-dark btn-lg download-button">Customers</button></a>
      
    	<a href="transactions.php"><button type="button" class="btn btn-dark btn-lg download-button">Transactions</button></a>
    </section>

  



  <footer id="footer" class="coloured-section">
  	<p>Find Us On Social Media </p>
  	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  	<a href="https://www.facebook.com/"><i class="social-icon fa fa-facebook-square"aria-hidden="true"></i></a>
  	<a "https://www.instagram.com/"<i class="social-icon fa fa-instagram"aria-hidden="true"></i></a>
  	<a href="https://twitter.com/?lang=en"><i class="social-icon fa fa-twitter"aria-hidden="true"></i></a>
  	<a href="https://mail.google.com/"><i class="social-icon fa fa-linkedin"aria-hidden="true"></i></a>
  </footer>


    <link rel="stylesheet" type="text/css" href="bootstrap.min.js">

   
    
  </body>
</html>

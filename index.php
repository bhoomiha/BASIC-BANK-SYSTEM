<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css?v=<?php echo time() ;?>">
    <link rel="stylesheet" type="text/css" href="css/navbar.css?v=<?php echo time() ;?>">

    <title>Basic Banking System</title>
    <style>
      body{ background-color: #FFF8DC;}
    footer{ position: fixed;
            bottom: 0;
            width: 100%;}
            </style>
  </head>

  <body>
  <?php
  include 'navbar.php';
  ?>
  
      <div class="container-fluid">
      <!-- Introduction section -->
            <div class="row intro py-0.1" style="background-color : #B0E0E6;">
              <div class="col-sm-5 col-md">
                <div class="heading text-left my-1">
                  <h4 style= "font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif">Welcome !</h4>
                  
                </div>
              </div>
              
            </div>

      <!-- Activity section -->
            <div class="row activity text-center">
                  <div class="col-md act">
                    <img src="img/creuse.png" style ="width : 28%; margin-top : 30%" class="img-fluid">
                    <br>
                    <a href="customers.php"><button style="background-color : #ff8000">View Customer</button></a>
                  </div>
                  <div class="col-md act">
                    <img src="img/trnsff.png" style = "width : 40%; margin-left : -140%; margin-top : 10%; border-radius:60%" class="img-fluid">
                    <br>
                    <a href="transfermoney.php"><button style="background-color : #ff8000;margin-left : -140%" >Make a Transaction</button></a>
                  </div>
                  <div class="col-md act">
                    <img src="img/transhistory.png" style ="width : 30%; margin-top : 30% ; margin-left : -280% "class="img-fluid">
                    <br>
                    <a href="transactionhistory.php"><button style="background-color : #ff8000;  margin-left : -280%">Transaction History
                  </button></a><br>
                  <img src="img/bankk.jpg" style ="width : 110%; margin-top: -50%; margin-left : -60%; border-radius: 10%">
                  </div>
                  
            </div>
           </div>
      
      <footer class="text-center mt-5 py-2">
        <p>copyright <b>BHOOMIHA</b> </p>
      </footer>
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>
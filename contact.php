<html>
    <head>
        <title> Contact Us</title>

        <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css?v=<?php echo time() ;?>">
    <link rel="stylesheet" type="text/css" href="css/navbar.css?v=<?php echo time() ;?>">

    <style>
    body {background-color: #ff674d;}
    footer{ position: fixed;
            bottom: 0;
            width: 100%;}

    </style>
</head>
<body>
<?php
  include 'navbar.php';
  ?>
  <h1 style = "color :#191970; text-align: center">Contact Us </h1><br><br>

<form>
  <div style = "text-align: center;font-size:20px;"><b>Name</b>&ensp;&ensp;&ensp;&ensp;<input type ="text" name ="name" style ="width: 20%;
   border-radius: 5px"></div><br><br>

<div style = "text-align: center;font-size:20px;"><b>Email</b>&ensp;&ensp;&ensp;&ensp;<input type ="text" name ="emailid" style ="width: 20%;
   border-radius: 5px"></div><br><br>

<div style = "text-align: center;font-size:20px;"><b>Number</b>&ensp;&ensp;<input type ="number" name ="number" style ="width: 20%;
   border-radius: 5px"></div><br><br>

<div style = "text-align: center;font-size:20px;"><b>Address</b>&ensp;&ensp;&ensp;<input type ="text" name ="address" style ="width: 20%;
 border-radius: 5px"></div><br>

<div style = "text-align: center;font-size:20px;"><button type="submit" form="form1" value="Submit">Submit</button>
 </div>
    </body>

    <footer class="text-center mt-5 py-1" >
        <p>copyright BHOOMIHA </p>
      </footer>
    </html>
    
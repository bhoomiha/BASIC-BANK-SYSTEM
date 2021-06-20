<html>
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create User</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/table.css?v=<?php echo time() ;?>">
    <link rel="stylesheet" type="text/css" href="css/navbar.css?v=<?php echo time() ;?>">
        <title>View Customers</title>
        <style>
            table,th,td{ border : 1px solid black;}
            table.center {
                   margin-left: auto; 
                   margin-right: auto;
                }
                table { width: 65%;}
                th { height: 50px;}
                td { height: 35px;}
                body { background-color: #90EE90;}
                  
            </style>
    </head>
    <body>
        <?php
           include 'navbar.php';
        ?>   
        <h2 class="text-center pt-4" style = "color:#5F9EA0"> CUSTOMERS LIST</h2><br>
        
        <table class="center">
            <tr class="text-center pt-4" >
                <th>ID </th>
                <th>NAME</th>
                <th>EMAIL</th>
                <th>BALANCE</th>
            </tr>
            <tr>
                <td>1</td>
                <td>Bhanu</td>
                <td>bhanu@gmail.com</td>
                <td>390000</td>
            </tr>
            <tr>
             <td>2</td>
             <td>Dev</td>
             <td>dev@gmail.com</td>
             <td>546000</td>
            </tr>
            <tr>
                <td>3</td>
                <td>Bhoomiha</td>
                <td>bhoomiha@gmail.com</td>
                <td>464400</td>
            </tr>
            <tr>
                <td>4</td>
                <td>Deepa</td>
                <td>deepa@gmail.com</td>
                <td>96600</td>
            </tr>
            <tr>
                <td>5</td>    
                <td>Shiva</td>
                <td>shiva123@gmail.com</td>
                <td>34000</td>
            </tr> 
            <tr>
                <td>6</td>
                <td>Suria</td>
                <td>suria64@gmail.com</td>
                <td>74000</td>
            </tr> 
            <tr>
                <td>7</td>
                <td>Guna</td>
                <td>guna@gmail.com</td>
                <td>500000</td>
            </tr>
            <tr>
                <td>8</td>
                <td> Birla</td>
                <td>birlag@gmail.com</td>
                <td>70000 </td>
            </tr>
            <tr>
                <td>9</td>
                <td>Mandela</td>
                <td>mandelag@gmail.com</td>
                <td>69000</td>
            </tr>
            <tr>
                <td>10</td>
                <td>Jackie</td>
                <td>chan@gmail.com</td>
                <td>56000</td>
        </table>
        

    </body>
</html>
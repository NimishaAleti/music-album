<?php
    session_start();
    require 'check_if_added.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="shortcut icon" href="img/lifestyleStore.png" />
        <title>MUSIC STORE</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- latest compiled and minified CSS -->
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <!-- jquery library -->
        <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
        <!-- Latest compiled and minified javascript -->
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <!-- External CSS -->
        <link rel="stylesheet" href="css/style.css" type="text/css">
    </head>
    <style>
        .container{
    max-width:1300px;
    margin:auto;
    padding-left:25px;
    padding-right:25px;
}
.row{
    display:flex;
    align-items:center;
    flex-wrap:wrap;
    justify-content:space-around;
}
.col-2{
    flex-basis:50%;
    min-width:300px;
}
.col-2 img{
    max-width:70%;
    padding:50px 0;
}
.col-2 h4{
    font-size: 30px;
    line-height: 60px;
    margin:25px 0;
}
.col-2 h3{
    font-size: 20px;
    line-height: 60px;
    margin:25px 0;
}
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 50%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
.col-2 p{
    font-size: 20px;
    margin: 12px 0;
    color:rgb(19, 18, 18);
}
.col-2 p1{
    font-size: 15px;
    margin: 12px 0;
    color:rgb(19, 18, 18);
}
        </style>
    <body>
           <?php
                require 'header.php';
            ?>

            <div class="small-container single-product">
            <div class="row">
                
                
                
                <div class="col-2">
                    <img src="images/THE ALBUM.jpg" width=90% id="productimg">
                                  
                  </div>
                <div class="col-2">
                    <p>THE ALBUM</p>
                    <p1> For sample audio listen to the HOW YOU LIKE THAT<p1>
                        <br>
                    <audio controls>
                       <source src="How You Like That.mp3" type="audio/mpeg">
                    </audio>
                    <h4>Rs 5000</h4>
                    <h3>Product details <i class="fa fa-star"></i></h3>
                    <br>
                    <table>
                        <tr>
                            <th>THE ALBUM</th>
                            <th>9.26min</th>
                            
                        </tr>
                        
                        <tr>
                            <td>How You Like That</td>
                            <td>3:01min</td>
                            
                        </tr>
                        <tr>
                            <td>Ice Cream</td>
                            <td>3:03min</td>
                            
                        </tr>
                        <tr>
                            <td>Lovesick Girls</td>
                            <td>3:22min</td>
                            
                        </tr>
                        
                        
                   
</table>
                </div>
</body>
</html>
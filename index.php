<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="shortcut icon" href="images/NSH.jpg" />
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
    <body>
        <div>
           <?php
            require 'header.php';
           ?>
           <div id="bannerImage" style="background-image:url('images/mainpic.jpg")>
           
               <div class="container">
                   <center>
                   <div id="bannerContent">
                       <h1>KPOP</h1>
                       <p>Come get your favorite kpop artists music</p>
                       <a href="products.php" class="btn btn-danger">Shop Now</a>
                   </div>
                   </center>
               </div>
           </div>
           <div class="container">
               <div class="row">
               <div class="col-xs-4">
                       <div  class="thumbnail">
                           <a href="product1.php">
                                <img src="images/BANGTAN.jpg" alt="Bangtan Sonyeondan">
                           </a>
                           <center>
                                <div class="caption">
                                        <p id="autoResize">Bangtan Sonyeondan</p>
                                        <p>Choose the music of the global no1 music artists.</p>
                                </div>
                           </center>
                       </div>
                   </div>
                   <div class="col-xs-4">
                       <div class="thumbnail">
                           <a href="product2.php">
                               <img src="images/EXO.php" alt="EXO">
                           </a>
                           <center>
                                <div class="caption">
                                    <p id="autoResize">EXO</p>
                                    <p>We are one .</p>
                                </div>
                           </center>
                       </div>
                   </div>
                   <div class="col-xs-4">
                       <div class="thumbnail">
                           <a href="product3.php">
                               <img src="images/BLACKPINK.jpg" alt="BLACKPINK">
                           </a>
                           <center>
                               <div class="caption">
                                   <p id="autoResize">BLACKPINK</p>
                                   <p>Come get us blinks.</p>
                               </div>
                           </center>
                       </div>
                   </div>
               </div>
           </div>
            <br><br><br><br><br><br><br><br>
           <footer class="footer"> 
               <div class="container">
               <center>
                   <p>Follow us on INSTAGRAM</p>
                   <p>@nimishaaleti</p>
                   <p>@s.a.n.j.a.n.a_01</p>
                   <p>@harshu_23</p>
               </center>
               </div>
           </footer>
        </div>
    </body>
</html>
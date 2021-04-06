<?php
    session_start();
    require 'connection.php';
    
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
    <body>
        <div>
            <?php
                require 'header.php';
            ?>
            <style type="text/css">

body
{
    background:#f2f2f2;
}
.container{
    font-size:20px;
    padding-top:25px;
    
}

.payment
{
    border:1px solid #f2f2f2;
    height:280px;
    border-radius:20px;
    background:#fff;
}
.payment_header
{
   background:rgba(255,102,0,1);
   padding:20px;
   border-radius:20px 20px 0px 0px;
   
}

.check
{
   margin:0px auto;
   width:50px;
   height:50px;
   border-radius:100%;
   background:#fff;
   text-align:center;
}

.check i
{
   vertical-align:middle;
   line-height:50px;
   font-size:30px;
}

.content 
{
    text-align:center;
}

.content  h1
{
    font-size:25px;
    padding-top:25px;
}

.content a
{
    width:200px;
    height:35px;
    color:#fff;
    border-radius:30px;
    padding:5px 10px;
    background:rgba(255,102,0,1);
    transition:all ease-in-out 0.3s;
}

.content a:hover
{
    text-decoration:none;
    background:#000;
}

</style>
<div class="container">
            <div class="row">
               <div class="col-md-6 mx-auto mt-5">
                  <div class="payment">
                     <div class="payment_header">
                        <div class="check"><i class="fa fa-check" aria-hidden="true"></i></div>
                     </div>
                     <div class="content">
                        <h1>Payment Success !</h1>
                        <p> Thank u for the order 
            <br>Order received successfullly</p>
                        <a href="index.php">Go to Home</a>
                     </div>
                     
                  </div>
               </div>
            </div>
         </div>

        </body>
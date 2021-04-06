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
    <body>
        <div>
            <?php
                require 'header.php';
            ?>
            <div class="container">
                <div class="jumbotron">
                    <h1>Let's music! </h1>
                    <p>With our K artists</p>
                </div>
            </div>
            <div class="container">
            <h2 class="section-header">MUSIC</h2>
            <br><br>
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                        <a href="productdetails.php?page_name=<?php echo "THE WAR"; ?>">
                                <img src="images/THE WAR.PHP" alt="THE WAR">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>THE WAR</h3>
                                    <p>Price: Rs. 2500.00</p>
                                    <p>studio album by South Korean-Chinese boy band EXO
                                    
                                      </p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(1)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=1" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                    
                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                        <a href="productdetails.php?page_name=<?php echo "KILL THIS LOVE"; ?>">
                                <img src="images/KILL THIS LOVE.PHP" alt="KILL THIS LOVE">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>KILL THIS LOVE</h3>
                                    <p>Price: Rs. 4000.00</p>
                                    <p>Album by South KOrean Girl Group<br>
                                        YG Entertainment<br>  
                                        members:Jisoo,Jennie,Rose,Lisa<br>
                                        Genres:k-pop  EDM  hip hop
                                    </p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(2)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=2" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                        <a href="productdetails.php?page_name=<?php echo "THE ALBUM"; ?>">
                                <img src="images/THE ALBUM.PHP" alt="ALBUM">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>THE ALBUM</h3>
                                    <p>Price: Rs. 5000.00</p>
                                    <p>Album by South Korean Girl Group<br>
                                        YG Entertainment<br>
                                    </p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(3)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=3" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                        <a href="productdetails.php?page_name=<?php echo "EXODUS"; ?>">
                                <img src="images/EXODUS.PHP" alt="Exodus">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>EXODUS</h3>
                                    <p>Price: Rs. 8000.00</p>
                                    <p>South Korean-Chinese boy band EXO
                                      </p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(4)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=4" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                </div>
                <br><br>
                <h2 class="section-header">BEST SOLD</h2>
                <br><br>
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                        <a href="productdetails.php?page_name=<?php echo "LOVE YOUR SELF"; ?>">
                                <img src="images/LOVE YOUR SELF.PHP" alt="Love Your Self">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>LOVE YOUR SELF</h3>
                                    <p>Price: Rs. 3000.00</p>
                                    <p>EP by BTS<br>
                                       Genre:pop,R&B,hip hop</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(5)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=5" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                    
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                        <a href="productdetails.php?page_name=<?php echo "MOTS7"; ?>">
                                <img src="images/MOTS7.PHP" alt="MOts7">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>MOTS7</h3>
                                    <p>Price: Rs. 3000.00</p>
                                     <p>MAP OF SOUL 7
                                     By BTS<br>
                                     Genre:Pop,EDM,R&B</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(6)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=6" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                        <a href="productdetails.php?page_name=<?php echo "MUSTER"; ?>">
                                <img src="images/MUSTER.PHP" alt="MUSTER">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>MUSTER</h3>
                                    <p>Price: Rs. 1800.00</p>
                                    <p>Magic Shop was 5th Muster fan club event
                                        BY BTS
                                    </p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(7)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=7" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                        <a href="productdetails.php?page_name=<?php echo "OBSESSION"; ?>">
                                <img src="images/OBSESSION.PHP" alt="OBSESSION">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>OBSESSION</h3>
                                    <p>Price: Rs. 1800.00</p>
                                    <p>studio album by South Korean-Chinese boy band EXO<br>
                                    
                                      </p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(8)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=8" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                </div>
                <br><br>
                <h2 class="section-header">FEATURED PRODUCTS</h2>
                <br><br>
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                        <a href="productdetails.php?page_name=<?php echo "EX'CT"; ?>">
                                <img src="images/EX'CT.PHP" alt="EX'CT">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>EX'CT</h3>
                                    <p>Price: Rs. 1500.00</p>
                                    <p>studio album by South Korean-Chinese boy band EXO<br>
                                         SM Entertainment
                                      </p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(9)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=9" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                        <a href="productdetails.php?page_name=<?php echo "PERSONA"; ?>">
                                <img src="images/PERSONA.PHP" alt="PERSONA">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>PERSONA</h3>
                                    <p>Price: Rs. 4000.00</p>
                                    <p>EP by BTS<br>
                                    Genre:pop,R&B,raprock</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(10)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=10" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                        <a href="productdetails.php?page_name=<?php echo "WINGS"; ?>">
                                <img src="images/WINGS.PHP" alt="WINGS">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>WINGS</h3>
                                    <p>Price: Rs. 2900.00</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(11)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=11" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                </div>
            </div>
            <br><br><br><br><br><br><br><br><br><br>
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
    </body>
</html>
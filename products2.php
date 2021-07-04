<?php
session_start();
require 'check_if_added.php';
?>
<!DOCTYPE html>
<html>

<head>
    <link rel="shortcut icon" href="img/lifestyleStore.png" />
    <title>WATCH</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
    <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body>
    <div>
        <?php
        require 'header.php';
        ?>
        <div class="container">
            <div class="jumbotron">
                <h1 style="text-align: center;">FASTRACK</h1>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">

                        <img src="img/1.jpg" alt="fastrack" style="height: 300px; width: 300px;">

                        <center>
                            <div class="caption">
                                <h3>FASTRACK modal-501</h3>
                                <p>Price: Rs. 5500.00</p>
                                <?php if (!isset($_SESSION['email'])) {  ?>
                                    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                    <?php
                                } else {
                                    if (check_if_added_to_cart(13)) {
                                        echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                    } else {
                                    ?>
                                        <a href="cart_add2.php?id=13" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>

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

                        <img src="img/2.jpg" alt="fastrack" style="height: 300px; width: 300px;">

                        <center>
                            <div class="caption">
                                <h3>FASTRACK modal-502</h3>
                                <p>Price: Rs. 6500.00</p>
                                <?php if (!isset($_SESSION['email'])) {  ?>
                                    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                    <?php
                                } else {
                                    if (check_if_added_to_cart(14)) {
                                        echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                    } else {
                                    ?>
                                        <a href="cart_add2.php?id=14" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
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

                        <img src="img/3.jpeg" alt="fastrack" style="height: 300px; width: 300px;">

                        <center>
                            <div class="caption">
                                <h3>FASTRACK modal-503</h3>
                                <p>Price: Rs. 4000.00</p>
                                <?php if (!isset($_SESSION['email'])) {  ?>
                                    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                    <?php
                                } else {
                                    if (check_if_added_to_cart(15)) {
                                        echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                    } else {
                                    ?>
                                        <a href="cart_add2.php?id=15" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
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

                        <img src="img/4.jpeg" alt="fastrack" style="height: 300px; width: 300px;">

                        <center>
                            <div class="caption">
                                <h3>FASTRACK modal-504</h3>
                                <p>Price: Rs. 3000.00</p>
                                <?php if (!isset($_SESSION['email'])) {  ?>
                                    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                    <?php
                                } else {
                                    if (check_if_added_to_cart(16)) {
                                        echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                    } else {
                                    ?>
                                        <a href="cart_add2.php?id=16" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                <?php
                                    }
                                }
                                ?>

                            </div>
                        </center>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">

                        <img src="img/5.jpg" alt="fastrack" style="height: 300px; width: 300px;">

                        <center>
                            <div class="caption">
                                <h3>FASTRACK modal-505</h3>
                                <p>Price: Rs. 5000.00</p>
                                <?php if (!isset($_SESSION['email'])) {  ?>
                                    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                    <?php
                                } else {
                                    if (check_if_added_to_cart(17)) {
                                        echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                    } else {
                                    ?>
                                        <a href="cart_add2.php?id=17" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
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

                        <img src="img/6.jpeg" alt="fastrack" style="height: 300px; width: 300px;">

                        <center>
                            <div class="caption">
                                <h3>FASTRACK modal-506</h3>
                                <p>Price: Rs. 2500.00</p>
                                <?php if (!isset($_SESSION['email'])) {  ?>
                                    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                    <?php
                                } else {
                                    if (check_if_added_to_cart(18)) {
                                        echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                    } else {
                                    ?>
                                        <a href="cart_add2.php?id=18" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
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

                        <img src="img/7.jpeg" alt="fastrack" style="height: 300px; width: 300px;">

                        <center>
                            <div class="caption">
                                <h3>FASTRACK modal-507</h3>
                                <p>Price: Rs. 7500.00</p>
                                <?php if (!isset($_SESSION['email'])) {  ?>
                                    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                    <?php
                                } else {
                                    if (check_if_added_to_cart(19)) {
                                        echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                    } else {
                                    ?>
                                        <a href="cart_add2.php?id=19" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
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

                        <img src="img/8.jpg" alt="fastrack" style="height: 300px; width: 300px;">

                        <center>
                            <div class="caption">
                                <h3>FASTRACK modal-508</h3>
                                <p>Price: Rs. 8600.00</p>
                                <?php if (!isset($_SESSION['email'])) {  ?>
                                    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                    <?php
                                } else {
                                    if (check_if_added_to_cart(20)) {
                                        echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                    } else {
                                    ?>
                                        <a href="cart_add2.php?id=20" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                <?php
                                    }
                                }
                                ?>

                            </div>
                        </center>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">

                        <img src="img/9.jpg" alt="fastrack" style="height: 300px; width: 300px;">

                        <center>
                            <div class="caption">
                                <h3>FASTRACK modal-509</h3>
                                <p>Price: Rs. 2900.00</p>
                                <?php if (!isset($_SESSION['email'])) {  ?>
                                    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                    <?php
                                } else {
                                    if (check_if_added_to_cart(21)) {
                                        echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                    } else {
                                    ?>
                                        <a href="cart_add2.php?id=21" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
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

                        <img src="img/10.jpg" alt="fastrack" style="height: 300px; width: 300px;">

                        <center>
                            <div class="caption">
                                <h3>FASTRACK modal-510</h3>
                                <p>Price: Rs. 5300.00</p>
                                <?php if (!isset($_SESSION['email'])) {  ?>
                                    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                    <?php
                                } else {
                                    if (check_if_added_to_cart(22)) {
                                        echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                    } else {
                                    ?>
                                        <a href="cart_add2.php?id=22" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
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

                        <img src="img/11.jpg" alt="fastrack" style="height: 300px; width: 300px;">

                        <center>
                            <div class="caption">
                                <h3>FASTRACK modal-511</h3>
                                <p>Price: Rs. 5600.00</p>
                                <?php if (!isset($_SESSION['email'])) {  ?>
                                    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                    <?php
                                } else {
                                    if (check_if_added_to_cart(23)) {
                                        echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                    } else {
                                    ?>
                                        <a href="cart_add2.php?id=23" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
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

                        <img src="img/12.jpg" alt="fastrack" style="height: 300px; width: 300px;">

                        <center>
                            <div class="caption">
                                <h3>FASTRACK modal-512</h3>
                                <p>Price: Rs. 7000.00</p>
                                <?php if (!isset($_SESSION['email'])) {  ?>
                                    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                    <?php
                                } else {
                                    if (check_if_added_to_cart(24)) {
                                        echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                    } else {
                                    ?>
                                        <a href="cart_add2.php?id=24" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
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
        <br><br><br><br><br><br><br><br>
        <footer class="footer">
            <div class="container">
                <center>
                    <p>Copyright &copy <a href="index.php">WATCH</a> Store. All Rights Reserved.</p>
                </center>
            </div>
        </footer>
    </div>
</body>

</html>
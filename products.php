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
                <h1 style="text-align: center;">TITAN</h1>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">

                        <img src="img/titan2.jpg" alt="titan" style="height: 300px; width: 300px;">

                        <center>
                            <div class="caption">
                                <h3>TITAN modal-501</h3>
                                <p>Price: Rs. 10000.00</p>
                                <?php if (!isset($_SESSION['email'])) {  ?>
                                    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                    <?php
                                } else {
                                    if (check_if_added_to_cart(1)) {
                                        echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                    } else {
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

                        <img src="img/favreleuba.jpg" alt="titan" style="height: 300px; width: 300px;">

                        <center>
                            <div class="caption">
                                <h3>TITAN favreleuba</h3>
                                <p>Price: Rs. 4000.00</p>
                                <?php if (!isset($_SESSION['email'])) {  ?>
                                    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                    <?php
                                } else {
                                    if (check_if_added_to_cart(2)) {
                                        echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                    } else {
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

                        <img src="img/golden-black.jpg" alt="titan" style="height: 300px; width: 300px;">

                        <center>
                            <div class="caption">
                                <h3>TITAN golden-black</h3>
                                <p>Price: Rs. 7000.00</p>
                                <?php if (!isset($_SESSION['email'])) {  ?>
                                    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                    <?php
                                } else {
                                    if (check_if_added_to_cart(3)) {
                                        echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                    } else {
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

                        <img src="img/black open heart.jpg" alt="titan" style="height: 300px; width: 300px;">

                        <center>
                            <div class="caption">
                                <h3>TITAN black open heart</h3>
                                <p>Price: Rs. 8000.00</p>
                                <?php if (!isset($_SESSION['email'])) {  ?>
                                    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                    <?php
                                } else {
                                    if (check_if_added_to_cart(4)) {
                                        echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                    } else {
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
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">

                        <img src="img/titan301.jpg" alt="Titan 301" style="height: 300px; width: 300px;">

                        <center>
                            <div class="caption">
                                <h3>TITAN Model-301</h3>
                                <p>Price: Rs. 13000.00</p>
                                <?php if (!isset($_SESSION['email'])) {  ?>
                                    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                    <?php
                                } else {
                                    if (check_if_added_to_cart(5)) {
                                        echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                    } else {
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

                        <img src="img/titan201.jpg" alt="Titan 201" style="height: 300px; width: 300px;">

                        <center>
                            <div class="caption">
                                <h3>TITAN Model-252</h3>
                                <p>Price: Rs. 4500.00</p>
                                <?php if (!isset($_SESSION['email'])) {  ?>
                                    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                    <?php
                                } else {
                                    if (check_if_added_to_cart(6)) {
                                        echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                    } else {
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

                        <img src="img/titan3.jpg" alt="titan" style="height: 300px; width: 300px;">

                        <center>
                            <div class="caption">
                                <h3>TITAN brown analog</h3>
                                <p>Price: Rs. 8000.00</p>
                                <?php if (!isset($_SESSION['email'])) {  ?>
                                    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                    <?php
                                } else {
                                    if (check_if_added_to_cart(7)) {
                                        echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                    } else {
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

                        <img src="img/skeleton.jpg" alt="titan" style="height: 300px; width: 300px;">

                        <center>
                            <div class="caption">
                                <h3>TITAN skeleton</h3>
                                <p>Price: Rs. 18000.00</p>
                                <?php if (!isset($_SESSION['email'])) {  ?>
                                    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                    <?php
                                } else {
                                    if (check_if_added_to_cart(8)) {
                                        echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                    } else {
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
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">

                        <img src="img/titan4.jpg" alt="titan" style="height: 300px; width: 300px;">

                        <center>
                            <div class="caption">
                                <h3>TITAN modal-403</h3>
                                <p>Price: Rs. 5500.00</p>
                                <?php if (!isset($_SESSION['email'])) {  ?>
                                    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                    <?php
                                } else {
                                    if (check_if_added_to_cart(9)) {
                                        echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                    } else {
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

                        <img src="img/titan5.jpg" alt="titan" style="height: 300px; width: 300px;">

                        <center>
                            <div class="caption">
                                <h3>TITAN modal-550</h3>
                                <p>Price: Rs. 3500.00</p>
                                <?php if (!isset($_SESSION['email'])) {  ?>
                                    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                    <?php
                                } else {
                                    if (check_if_added_to_cart(10)) {
                                        echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                    } else {
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

                        <img src="img/titan6.jpg" alt="titan" style="height: 300px; width: 300px;">

                        <center>
                            <div class="caption">
                                <h3>TITAN modal-613</h3>
                                <p>Price: Rs. 9000.00</p>
                                <?php if (!isset($_SESSION['email'])) {  ?>
                                    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                    <?php
                                } else {
                                    if (check_if_added_to_cart(11)) {
                                        echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                    } else {
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
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">

                        <img src="img/titan7.jpg" alt="titan" style="height: 300px; width: 300px;">

                        <center>
                            <div class="caption">
                                <h3>TITAN modal-736</h3>
                                <p>Price: Rs. 7500.00</p>
                                <?php if (!isset($_SESSION['email'])) {  ?>
                                    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                    <?php
                                } else {
                                    if (check_if_added_to_cart(12)) {
                                        echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                    } else {
                                    ?>
                                        <a href="cart_add.php?id=12" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
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
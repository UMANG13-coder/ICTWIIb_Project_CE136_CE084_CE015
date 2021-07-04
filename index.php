<?php
session_start();
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
        <div id="bannerImage">
            <div class="container">
                <center>
                    <div id="bannerContent">
                        <h1>Welcome to our Shop...</h1>
                        <p>We have the best watches for you. No need to hunt around, we have all in one place.</p>
                    </div>
                </center>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xs-4">
                    <div class="thumbnail">
                            <img src="img/titan1.jpg" alt="titan" style="height: 250px; width: 300px;">
                        <center>
                            <div class="caption">
                                <p id="autoResize">TITAN</p>
                                <p>Choose among the best available in the world.</p><br>
                                <a href="products.php" class="btn btn-danger">Shop Now</a>
                            </div>
                        </center>
                    </div>
                </div>
                <div class="col-xs-4">
                    <div class="thumbnail">
                            <img src="img/Fastrack.png" alt="fastrack" style="height: 250px; width: 300px;">
                        <center>
                            <div class="caption">
                                <p id="autoResize">FASTRACK</p>
                                <p>Original Fastrack watches.</p><br>
                                <a href="products2.php" class="btn btn-danger">Shop Now</a>
                            </div>
                        </center>
                    </div>
                </div>
                <div class="col-xs-4">
                    <div class="thumbnail">
                            <img src="img/rolex.jpg" alt="rolex" style="height: 250px; width: 300px;">
                        <center>
                            <div class="caption">
                                <p id="autoResize">ROLEX</p>
                                <p>Our exquisite collection of ROLEX.</p><br>
                                <a href="products3.php" class="btn btn-danger">Shop Now</a>
                            </div>
                        </center>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br><br><br><br><br>
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
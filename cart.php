<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="styles.css" />
    <meta charset="UTF-8">
    <title>The Fishing Den</title>
</head>
<body>
<div class="overlay"></div>
<div id = website>
    <p class="log" align="right">
        <button  type="button"><a href="login.php">Log In/Sign Up</a></button>
    </p>
    <div class="cart-wrap">
        <a href="cart.php" aria-label="Cart" title="Cart" data-lid="hdr_carticon">
            <img src="http://www.graphicsbeam.com/wp-content/uploads/2012/04/Shopping-Cart-Icon-with-PSD-and-PNG-Format.png" alt="Cart" style="width:42px;height:42px;border:0" align="right">
        </a>

    </div>
    <div id="info">
        <div id="header">
            <p style="color: #FAF9F8">The Fishing Den</p>
        </div>
        <div id="content">
            <div id="nav">
                <!-- Nav stuff -->
                <ul class="nav">
                    <li><a href="mainpage.html"  style="color: #FAF9F8">Back to the Main Page</a></li>
                </ul>
            </div>
            <div id="main">
                <!-- Main -->
                <button type="button" style="text-align: center;"><a href="checkout.php">Proceed to Checkout</a></button>
            </div>
        </div>
    </div>
</div>
</body>
</html>

<?php

include('connection.php');

$query = $handler->query('SELECT * FROM products');

while($r = $query->fetch()) {
    echo $r['productname'], '<br>';
    echo $r['productquantity'], '<br>';
    echo $r['productprice'], '<br>';

}



?>




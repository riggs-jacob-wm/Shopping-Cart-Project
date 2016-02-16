<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="styles.css" />
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<div class="overlay"></div>
<div id = website style="text-align: center">
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
                    <li><a href="products.html"  style="color: #FAF9F8">Back to the Products Page</a></li>
                </ul>
            </div>
            <div id="main" style="color: #FAF9F8">
                <!-- Main -->
                <img src="https://unclejimswormfarm.com/wp-content/uploads/2014/09/bait1.png" style="width: 395px; height: 295px;">
                <h2>Price: $57 .99</h2>
                <form>
                    <form action="bait.php" method="post">
                        <input type="hidden" name="productname" id="productname" value="bait"><br>
                        Quantity <input type="number" name="productquantity">
                        <input type="hidden" name="productprice" value="57.99"<br>
                        <input type="submit" name="submit" value="Add To Cart">
                    </form>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>

<?php
if(isset($_POST['submit']))
{

    try {
        $handler = new PDO('mysql:host=127.0.0.1;dbname=mydb', 'root', 'root');
        $handler->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $e)
    {
        echo $e->getMessage();
        die();
    }
    $productname = $_POST['productname'];
    $productquantity = $_POST['productquantity'];
    $productprice = $_POST['productprice'];

    $pdoQuery = "INSERT INTO `products` (`productname`, `productquantity`, `productprice`)
                 VALUES ('$productname','$productquantity', '$productprice')";

    $pdoResult= $handler->prepare($handler);

    $pdoExec = $pdoResult->execute(array(":$productname"=>$productname,"$productquantity"=>$productquantity, "$productprice"=>$productprice));

    if($pdoExec)
    {
        echo 'Data Inserted';
    }else{
        echo 'Data Not Inserted';
    }


}
?>

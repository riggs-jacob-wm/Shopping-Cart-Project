<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="loginstyle.css" />
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
                <h2 style="text-align: center; color: #FAF9F8">Sign Up</h2>
                <form>
                    First name:<br>
                    <input type="text" name="firstname"><br>
                    Last name:<br>
                    <input type="text" name="lastname"><br>
                    Email<br>
                    <input type="text" name="email"><br>
                    <input type="submit" value="Submit">
                </form>

            </div>
        </div>
    </div>
</div>
</body>
</html>

<?php
$servername = "127.0.0.1";
$username = "root";
$password = "root";

try {
    $dbh = new PDO("mysql:host=$servername;dbname=mydb", $username, $password);
    // set the PDO error mode to exception
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e)
{
    echo "Connection failed: " . $e->getMessage();
}
?>
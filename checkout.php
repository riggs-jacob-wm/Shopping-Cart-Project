<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="checkstyle.css" />
    <meta charset="UTF-8">
    <title>The Fishing Den</title>
</head>
<body>
<div class="overlay"></div>
<div id = website>
    <p class="log" align="right">
    </p>
    <div class="cart-wrap">
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
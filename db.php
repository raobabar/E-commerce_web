<?php

define('servername','127.0.0.1:3301');
define('username','root');
define('password','');
define('db','ecomm');

// Create connection
$con = mysqli_connect(servername, username, password,db);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}


?>
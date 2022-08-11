<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'central365_user');
define('DB_PASSWORD', '*e2d-~MneSdr');
define('DB_NAME', 'central365_phpcrud');
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>
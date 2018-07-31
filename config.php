<?php

$server = "localhost";
$user = "root";
$password = "";
$nama_database = "testing";

$db = mysqli_connect($server, $user, $password, $nama_database);

if( !$db ){
    die("Unable to connect Database" . mysqli_connect_error());
}

?>

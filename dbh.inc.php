<?php

$serverName = "localhost";
$dBUsernam = "root";
$dBPassword = "";
$dBName = "website";

$conn = mysqli_connect($serverName, $dBUsernam, $dBPassword, $dBName);

if (!$conn){
    die("Connection failed:". mysqli_connect_error());
}
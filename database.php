<?php

$servername="localhost";
$username="root";
$password="";
$dbname="mygym";

$conn=mysqli_connect($servername,$username,$password,$dbname);

if(!$conn)
{
    die("not connect");
}
echo "connected sucessfully";
?>
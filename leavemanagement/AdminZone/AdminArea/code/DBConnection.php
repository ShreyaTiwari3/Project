<?php

$conn=mysqli_connect("localhost","root","","leave");
if(!$conn)
{
    die("Connection Failed - ".mysqli_connect_error());
}

require("config.php");

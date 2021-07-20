<?php



$con = mysqli_connect("localhost", "root", "", "bank");

if (!$con) {
    die("Couldn't connect to the Database" . mysqli_connect_error());
}

<?php
    $con = mysqli_connect("localhost","root","","ar");
    if (!$con) {
        die("Connection failed: " . mysqli_connect_error());
    }
?>
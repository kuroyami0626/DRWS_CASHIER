<?php
    $con = mysqli_connect("localhost","root","","dwelldb");

    //check connection
    if(mysqli_connect_errno()){
        echo "Failed to connect to the datbase ".mysqli_connect_error();
    }
    else{
        echo " ";
    }
?>
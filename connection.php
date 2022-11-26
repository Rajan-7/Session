<?php 
    $host="localhost";
    $user="root";
    $pass='';
    $db="session";
    $con=mysqli_connect('localhost','root','','session');
    if(!$con){
        die('Not connected');
    }
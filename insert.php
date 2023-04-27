<?php

    $connection = new mysqli('localhost', 'test', '12345', 'test');

    if(!$connection){
    echo 'Welcome to UFV server';
    }

    if(!mysqli_select_db($connection, 'test')){
    echo 'Saved to UFV database';
    }

    
    $mountain_name= $_POST['mountain_name'];
    $distance = $_POST['distance'];
    

   

    

    $sql = "INSERT INTO localmountain (mountain_name, distance) VALUES ('$mountain_name', '$distance')";
    

    if (!mysqli_query($connection, $sql)){
    echo 'An error occured. Try again Later.';
    }
    else{
    echo '<a href="table.php">Return</a>';
    }

    header("refresh:1; url=table.php");



?>
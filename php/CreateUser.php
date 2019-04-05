<?php

    echo "<link rel='stylesheet' href='../styles/style.css'>";

    $username = $_POST["username"];

    // Test Connection 
    $mysqli = new mysqli("mysql.eecs.ku.edu", "e828d717", soo4fai7, "e828d717");

    if ($mysqli->connect_error) {
        die("Connection error " . $mysqli->connect_error . "<br/>");
    }
        
    $query = "INSERT INTO Users (user_ID) VALUES ('$username')";
        
    if ($mysqli->query($query))  {
        echo "Creation Complete";
    } 
    else { 
        echo "Creation Failed";
    }

    // End Connection
    $mysqli->close();

?>

<div>
<input onclick= "location.href='../index.html'" type="button" value="Home"><br>
</div>
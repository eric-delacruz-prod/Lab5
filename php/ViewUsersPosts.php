<?php

    echo "<link rel='stylesheet' href='../styles/style.css'>";

    $username = $_POST["username"];
    

    // Test Connection 
    $mysqli = new mysqli("mysql.eecs.ku.edu", "e828d717", soo4fai7, "e828d717");
        
    if ($mysqli->connect_error) {
        die("Connection error " . $mysqli->connect_error . "<br/>");
    }
    
    $query = "SELECT * FROM Users";
    $table = $mysqli->query($query);
        
    echo "<div>";

    if ($table)  {
        while ($row = $table->fetch_assoc()) { 
            $Post_id = $row["post_ID"];
            $Content = $row["content"];
            echo "Post Title: " . $post_ID . "<br>";
            echo "Content: " . $content . "<br>";
        }
    } 

    echo "</div>";

    // End Connection
    $mysqli->close();

?>

<div>
<input onclick= "location.href='../index.html'" type="button" value="Home"><br>
</div>
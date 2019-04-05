<?php

    echo "<link rel='stylesheet' href='../styles/style.css'>";

    $post = $_POST["title"];
    $content = $_POST["content"];
    $author = $_POST["author"];

    // Test Connection 
    $mysqli = new mysqli("mysql.eecs.ku.edu", "e828d717", soo4fai7, "e828d717");

    if ($mysqli->connect_error) {
        die("Connection error " . $mysqli->connect_error . "<br/>");
    }
        
    $user = "SELECT * FROM Users WHERE user_ID = '$author'";
    $check = $mysqli->query($user);
        
    if ($check->num_rows > 0) {
        $query = "INSERT INTO Posts (post_ID, content, author_ID) VALUES ('$post', '$content', '$author')";
        if ($mysqli->query($query)) {
            echo "Posted!";
        }
        else {
            echo "Post Failed to Publish";
        }
    } 
    else { 
        echo "User does not exist";
    }

    // End Connection
    $mysqli->close();

?>

<div>
<input onclick= "location.href='../index.html'" type="button" value="Home"><br>
</div>
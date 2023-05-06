<?php

$is_invalid = false;

if ($_SERVER["REQUEST_METHOD"] === "POST"){

    $mysqli = require __DIR__ . "/database.php";
    
    $sql = sprintf ( "SELECT * FROM users
            WHERE username = '%s'",
            $mysqli->real_escape_string($_POST['username']));
    
    $result = $mysqli->query($sql);

    $user = $result->fetch_assoc();

    if ( $user ){

        if (password_verify($_POST['password'], $user["password_hash"])){

            session_start();
            
            session_regenerate_id();

            $_SESSION["user_id"] = $user["id"];

			$_SESSION["username"] = $user["username"];
			
			$name = $user["username"];

            header("location: index.html?username=" . urlencode($name));
            exit;

        }

    }
    $is_invalid = true;

}
?>
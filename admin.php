<?php
//$password_hash = password_hash($_POST["password"], PASSWORD_DEFAULT);

$mysqli = require __DIR__ . "/dtbs.php";

$sql = "INSERT INTO schools (Sname, Location, Rinfo )
        VALUES (?, ?, ?)";

$stmt = $mysqli->stmt_init();

if (! $stmt->prepare($sql)){
    die("SQL Error: " . $mysqli->error);
}

$stmt->bind_param("sss",
                    $_POST["stationName"],
                    $_POST["location"],
                    $_POST["description"]);

if ( $stmt->execute()){                 
    
    //header("Location: login.html");
    exit;

} else {

    if ( $mysqli->errno === 1062){
    
        die("Email already taken!!");

    } else {

        die($mysqli->error . " " . $mysqli->errno);
        
    }
}

?>



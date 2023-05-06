<?php

    session_start();

    session_destroy();

    //header("Location: index.html");
    //exit;

?>
<!DOCTYPE html>
<html>
<head>
	<title>Tackio || Logout</title>
	<style>
		body {
			background-color: #f1f1f1;
			font-family: Arial, sans-serif;
			text-align: center;
			padding-top: 100px;
		}

		h1 {
			font-size: 2.5rem;
			margin-bottom: 20px;
		}

		p {
			font-size: 1.2rem;
			margin-bottom: 30px;
		}

		button {
			padding: 12px 20px;
			background-color: #4CAF50;
			color: #fff;
			border: none;
			border-radius: 5px;
			cursor: pointer;
			font-size: 1.2rem;
		}

		button:hover {
			background-color: #3e8e41;
		}
	</style>
</head>
<body>
	<h1>Logged Out Successfully</h1>
	<p>You have been logged out of your account.</p>
	<button onclick="location.href='login.html'">Log In Again</button>
</body>
</html>
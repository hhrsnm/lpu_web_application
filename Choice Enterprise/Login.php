<?php

include 'process/db_connection.php';
$conn = OpenCon();
$sql = "SELECT * FROM `user_accounttbl`;";
$result = $conn->query($sql);

if ($_SERVER['REQUEST_METHOD'] == "POST") {
	$user = $_POST['user'];
	$pass = $_POST['password'];
	$sql = "SELECT COUNT(*) AS count
    FROM user_accounttbl
    WHERE username = '$user' AND password = '$pass';
    ";
	$result = mysqli_fetch_assoc($conn->query($sql));

	if ($result['count'] > 0 && $user != "" && $pass != "") {
		$sql = "SELECT * FROM user_accounttbl WHERE username = '$user' AND password = '$pass';";
		$result = mysqli_fetch_assoc($conn->query($sql));
		session_start();
		$_SESSION['privilege'] = $result['privilege'];
		$_SESSION['username'] = $result['username'];
		$_SESSION['employee_no'] = $result['employee_no'];
		
		if($_SESSION['privilege'] == 1){
			header("Refresh:0; url=adminpage.php");
		}elseif($_SESSION['privilege'] == 2){
			header("Refresh:0; url=Payroll.php");
		}elseif($_SESSION['privilege'] == 3){
			header("Refresh:0; url=Cellphone.php");
		}
		
		exit();
	} else {
		echo "<script>";
		echo "alert('Invalid credentials!');";
		echo "</script>";
	}
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
    <title>Login Page</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            text-align: center;
        }

        .container {
            width: 300px;
            margin: auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 3px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #007BFF;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body style="background-image: url('css/bgsite.jpg');">
    <div class="container" style="margin-top:15%; background-image: url('https://static.vecteezy.com/system/resources/previews/009/924/607/original/cute-brown-aesthetic-abstract-minimal-background-perfect-for-wallpaper-backdrop-postcard-background-vector.jpg'); background-repeat:no-repeat; background-attachment: fixed">
        <img src="https://clipart-library.com/img/1695766.png" alt="Coffee" width="25%" height="25%">
        <h2 style="color:blue;">SDE Web Application</h2>
        <form class="validate-form" method="post">
            <div class="validate-input" data-validate="Enter username" >
                <input type="text" placeholder="Username" name="user">
            </div>
            <div class="validate-input" data-validate="Enter password">
                <input type="password" placeholder="Password" name="password">
            </div>
                <div class="buttons" style=margin-top:10px;>
                <button type="submit" class="login-button" style="height: 40px; width:100px; background-color:lightskyblue; font-size:15px;">Login</button>
                </div>
            
        </form>
    </div>
</body>

</html>
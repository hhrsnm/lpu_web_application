<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
        <form action="adminpage.php" method="post">
                <input type="text" placeholder="Username">
                <input type="password" placeholder="Password">
                <div class="buttons" style=margin-top:10px;>
                <button type="submit" class="login-button" style="height: 40px; width:100px; background-color:lightskyblue; font-size:15px;">Login</button>
                </div>
            
        </form>
    </div>
</body>

</html>
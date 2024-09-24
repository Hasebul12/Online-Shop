<!DOCTYPE html>
<?php

if (isset($_POST['signup'])) {
    $sellerid = $_POST['sellerid'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    if (empty($sellerid) || empty($name) || empty($email) || empty($pass)) {
        echo "Please fill up the form first";
    } else {
        $serverName = "localhost";
        $userName = "root";
        $password = "";
        $dbName = "oshop";
        $conn = new mysqli($serverName, $userName, $password, $dbName);
        $sql = "Insert into seller values('$sellerid','$name','$email','$pass')";
        $res = mysqli_query($conn, $sql);
        if ($res) {
            echo "Signup successfully";
        }
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Sign Up</title>
    <style>
        body {
            font-family: Verdana;
            background-color: #f9f9f9;
            margin: 0;
            padding: 20px;
        }

        h1 {
            color: #333;
            text-align: center;
        }

        form {
            width: 100%;
            max-width: 300px;
            margin: 20px auto;
            padding: 10px;
        }

        input {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button {
            width: 100%;
            background-color: #4CAF50;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin: 5px 0;
        }

        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <h1>Enter your information</h1>
    <form method="post">
        Seller ID: <input type="text" name="sellerid"><br>
        Seller Name: <input type="text" name="name"><br>
        Email: <input type="text" name="email"><br>
        Password: <input type="password" name="pass"><br>
        <button name="signup">Sign Up</button>
    </form>

    <form action="../Controllers/loginController.php">
        <button name="login">Login</button>
    </form>
</body>
</html>

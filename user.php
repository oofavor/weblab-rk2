<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Page</title>
    <?php include("db.php") ?>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f8f8;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .user-container {
            background-color: #fff;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        h2 {
            color: #333;
        }

        p {
            color: #666;
        }
    </style>
</head>

<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = $_POST["email"];
        $username = $_POST["username"];
        $password = $_POST["password"];
        if ($email != null) {
            registerUser($email, $username, $password);
        } else {
            loginUser($username, $password);
        }
    } else if (!isLoggedIn()) {
        header("location: login.html");
        die();
    }

    ?>

    <div class="user-container">
        <h2>Welcome, John Doe!</h2>
        <p>Email:
            <?php echo $_SESSION["password"] ?>
        </p>
        <p>Username:
            <?php echo $_SESSION["username"] ?>
        </p>
        <p>Role: Member</p>
    </div>

</body>

</html>
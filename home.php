<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Beautiful Website</title>
    <link rel="stylesheet" href="styles/home.css">
    <?php include("db.php") ?>
</head>

<body>
    <nav>
        <a href="#">Home</a>
        <a href="#">Products</a>
        <a href="#">About</a>
        <div class="user-tab">
            <a href="
                <?php
                echo isLoggedIn() ? "user.php" : "login.html";
                ?>
            ">
                <?php
                echo isLoggedIn() ? $_SESSION['username'] : "Login";
                ?>
            </a>
        </div>
    </nav>
</body>

</html>
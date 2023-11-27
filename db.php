<?php
define('DB_HOST', 'std-mysql.ist.mospolytech.ru'); //Адрес
define('DB_PORT', 3306); //Имя пользователя
define('DB_USER', 'std_2169_rk2'); //Имя 
define('DB_PASSWORD', '12345678'); //Пароль
define('DB_NAME', 'std_2169_rk2'); //Имя БД
function logg($message)
{
    $message = date("H:i:s") . " - $message - " . PHP_EOL;
    print($message);
    flush();
    ob_flush();
}

try {
    $mysql = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME, DB_PORT);
} catch (Exception $e) {
    header("Location: 503.html");
    die();
}

session_start();

function loginUser($username_, $password_)
{
    global $mysql;
    $hash = crypt($password_, PASSWORD_DEFAULT);

    $query = "SELECT * FROM Users WHERE username='$username_' AND password='$hash'";

    $result = mysqli_query($mysql, $query);
    if ($result == false) {
        header("location: login.html");
        die();
    }

    while ($row = mysqli_fetch_assoc($result)) {
        $_SESSION['userid'] = $row['id'];
        $_SESSION['username'] = $row['username'];
    }
}

function registerUser($email, $username_, $password_)
{
    global $mysql;
    $hash = crypt($password_, PASSWORD_DEFAULT);
    $query = "INSERT INTO Users (username, email, password) VALUES ('$username_', '$email', '$hash')";

    $result = mysqli_query($mysql, $query);
    if ($result == false) {
        header("location: register.html");
        die();
    }

    loginUser($username_, $password_);
}
function isLoggedIn()
{
    if ($_SESSION['username'] == null || $_SESSION['userid'] == null)
        return false;
    return true;
}
?>
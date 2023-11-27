<?php
define('DB_HOST', 'std-mysql.ist.mospolytech.ru'); //Адрес
define('DB_PORT', 3306); //Имя пользователя
define('DB_USER', 'std_2169_rk2'); //Имя 
define('DB_PASSWORD', '12345678'); //Пароль
define('DB_NAME', 'std_2169_rk2'); //Имя БД

try {
    $mysql = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME, DB_PORT);
} catch (Exception $e) {
    header("Location: 503.html");
    die();
}

session_start();
function registerUser($email, $username_, $password_)
{
    global $mysql;
    $hash = password_hash($password_, PASSWORD_DEFAULT);
    $query = "INSERT INTO Users (username, email, password) VALUES ('$username_', '$username_', '$hash')";

    $result = mysqli_query($mysql, $query);
    if ($result == false) {
        header("location: register.html");
        die();
    }

    $_SESSION['username'] = $username_;
    $_SESSION['password'] = $hash;
}
function loginUser($username_, $password_)
{
    global $mysql;
    $hash = password_hash($password_, PASSWORD_DEFAULT);
    $query = "SELECT * FROM Users WHERE username=$username_ AND password=$hash)";

    $result = mysqli_query($mysql, $query);
    if ($result == false) {
        header("location: login.html");
        die();
    }

    $_SESSION['username'] = $username_;
    $_SESSION['password'] = $hash;
}

function isLoggedIn()
{
    if ($_SESSION['username'] == null || $_SESSION['password'] == null)
        return false;
    return true;
}
?>
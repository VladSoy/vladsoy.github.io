<?php 
$login = $_POST['login'];
$password = $_POST['password'];

$connection = mysqli_connect('127.0.0.1','root','','Admin');

$result = mysqli_query($connection, "SELECT * FROM users WHERE Login = '$login' AND Pass = '$password'");
$user = mysqli_fetch_assoc($result);

if(empty($user) == false){
    header("Location: Credit.html");
}

setcookie('login', $user['login'], time() + 3600, "/");
setcookie('id', $user['Id'], time() + 3600, "/" )

?>
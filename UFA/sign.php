<?php 
$fam = $_POST['fam'];
$login = $_POST['login'];
$password = $_POST['password'];

$connection = mysqli_connect('127.0.0.1','root','','Admin');

if ($connection == false)
{
    echo "Не удалось подключиться к бд";
    echo mysqli_connect_error();
    exit();
}
$insert = mysqli_query($connection, "INSERT INTO `users` ( `FIO`, `Login`, `Pass`) VALUES ('$fam', '$login', '$password')");
if($insert == true){
    echo "Вы зарегистрировались";
}
mysqli_close($connection);
?>
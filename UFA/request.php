<?php 
$fam = $_POST['Lastname'];
$pass = $_POST['Passport'];
$summ = $_POST['Summ'];

$connection = mysqli_connect('127.0.0.1','root','','Admin');

$insert = mysqli_query($connection, "INSERT INTO `CreditRequest` ( `fam`, `pasport`, `summ`) VALUES ( '$fam' , '$pass', '$summ')");

if($insert == true){
    echo "Заявка оставлена";
}
mysqli_close($connection);
?>
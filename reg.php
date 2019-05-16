<?php //создание пользователя
$connect = mysqli_connect('127.0.0.1','root','','marsel_pn_10');
$query = mysqli_query($connect, "INSERT INTO insta (email,name,username,password) VALUES ('" .$_POST['email'] . "','" . $_POST['name'] . "','" . $_POST['username'] . "','" . $_POST['password'] ."')" );
header('Location: http://Marselny/insta/auto.php');
 ?>
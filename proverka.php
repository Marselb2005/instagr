<?php $connect = mysqli_connect('127.0.0.1', 'root', '', 'marsel_pn_10');
$query = mysqli_query($connect, "SELECT * FROM insta WHERE email = '" . $_POST['email'] ."' AND password = '". $_POST['password'] . "'");
$result = $query->fetch_assoc();
if ($query->num_rows == 0) {
	header('Location: http://Marselny/insta/auto.php?nety=Нету такого пользователя');
} else{
	header('Location: http://Marselny/insta/post.php?id=' . $result['id']);
}
 ?>

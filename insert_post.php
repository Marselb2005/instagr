<?php 
$connect = mysqli_connect('127.0.0.1', 'root', '', 'marsel_pn_10');
$query = mysqli_query($connect,"INSERT INTO post (text_post,img) VALUES ('". $_POST['header'] . "','img/" . $_FILES['img']['name'] . "')");
move_uploaded_file($_FILES['img']['tmp_name'], 'img/'.$_FILES['img']['name']);
header("Location: http://marselny/insta/post.php?id=" . $_POST['id']);
 ?>
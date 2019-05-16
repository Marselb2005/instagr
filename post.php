<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<?php 
 $connect = mysqli_connect('127.0.0.1','root','','marsel_pn_10');
 $query = mysqli_query($connect,"SELECT * FROM insta WHERE id=" . $_GET['id']);
 $result = $query->fetch_assoc();
 echo '<img src="' . $result['avatar'] . '">'; 
 echo $result['name'] . ' ';
  echo $result['username'];
 ?>
	<form method="POST" action="insert_post.php" enctype="multipart/form-data">
		<input placeholder="Текст" type="" name="header">
		<input type="file" name="img">
		<button>ДОБАВИТЬ</button>
	</form>
<?php 
 $connect = mysqli_connect('127.0.0.1','root','','marsel_pn_10');
 $query = mysqli_query($connect,"SELECT * FROM post");
for($i=0; $i < $query->num_rows; $i++){
	$result = $query->fetch_assoc();
	 echo '<img src="' . $result['img'] .'">'; ?>
	<h2><?php echo $result['text_post']; ?></h2>
<?php } ?>
<?php 
 $connect = mysqli_connect('127.0.0.1','root','','marsel_pn_10');
 $query = mysqli_query($connect,"SELECT * FROM insta AND post ");
 ?>
</body>
</html>

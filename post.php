<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
	<meta charset="utf-8">
	<title>Posts</title>
</head>
<body class="bg-light">
	<div class="col-6 mx-auto bg-white">
		<?php 
		 $connect = mysqli_connect('127.0.0.1','root','','marsel_pn_10');
		 $query = mysqli_query($connect,"SELECT * FROM insta  WHERE id=" . $_GET['id']);
		 $result = $query->fetch_assoc();
		 echo '<img src="' . $result['avatar'] . '">'; 
		 echo $result['name'] . ' ';
		  echo $result['username'];
		 ?>
			<form method="POST" action="insert_post.php" enctype="multipart/form-data">
				<input placeholder="Текст" type="" name="header">
				<input type="file" name="img">
				<?php 
				echo '<input type="hidden" name="id" value="'. $_GET['id'] . '">';
				 ?>
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
	</div>
</body>
</html>

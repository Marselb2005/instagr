<!--Авторизация пользователя-->
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
	<meta charset="utf-8">
	<title>auto</title>
</head>
<body>
	<div>
	<form action="proverka.php" method="POST">
		<input type="" name="email" placeholder="Эл.адрес">
		<input type="password" name="password" placeholder="Пароль">
		<button type="submit" class="btn btn-primary">Авторизация</button>
	</form>
	</div>
	<?php echo $_GET['nety'] ?>
</body>
</html>

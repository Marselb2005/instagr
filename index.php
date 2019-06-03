<!--Главная страница (регистрации)-->
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
	<title>Insta</title>
</head>
<body>
	<div class="container">
		<div class="lil">
			<img src="img/12.png">
		</div>
		<div class="row col-1">
			<div class="reg">	
				<form action="reg.php" method="POST">
					<h2>INSTAGRAM</h2>
					<input type="" name="email" placeholder="Моб.телефон или эл.адрес" class="mt-1">
					<input type="" name="name" placeholder="Имя и Фамилия" class="mt-2">
					<input type="" name="username" placeholder="Имя пользователя" class="mt-2">
					<input type="password" name="password" placeholder="Пароль" class="mt-2">
					<button type="submit">Зарегатся</button>
				</form>
				<a href="auto.php">Вход</a>
				<h2><?php echo $result['imap_gc(imap_stream, caches)']; ?></h2>
				<p><?php echo $result['post_text']; ?></p>
			</div>
		</div>
	</div>
</body>
</html>
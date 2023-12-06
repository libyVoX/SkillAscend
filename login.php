<? session_start() ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Авторизация</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
	<div style="margin-top: 100px;" class="d-flex justify-content-center">
		<form action="logining.php" method="post" enctype="multipart/form-data">
			<div class="mt-1"><input type="text" name="username" placeholder="Никнейм"></div>
			<div class="mt-1"><input type="password" name="password" placeholder="Пароль"></div>
			<button class="btn btn-primary">Войти</button>
			<p>
				<?
					echo $_SESSION['error'];
					unset($_SESSION['error']);
				?>
			</p>
		</form>
	</div>
</body>
</html>
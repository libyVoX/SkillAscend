<? session_start() ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Регистрация</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
	<div style="margin-top: 100px;" class="d-flex justify-content-center">
		<form action="registration.php" method="post" enctype="multipart/form-data">
			<div class="mt-1"><input type="text" name="username" placeholder="Никнейм"></div>
			<div class="mt-1"><input type="text" name="last-name" placeholder="Фамилия"></div>
			<div class="mt-1"><input type="text" name="first-name" placeholder="Имя"></div>
			<div class="d-flex">
				<p>Кто ты?</p>
				<select name="acc_type" class="ms-3">
				   	<option value="member">Участник</option>
				   	<option value="company">Компания</option>
				</select>
			</div>
			<div class="mt-1"><input type="date" name="date-of-b"></div>
			<div class="mt-1"><input type="text" name="email" placeholder="Электронная почта"></div>
			<div class="mt-1"><input type="password" name="password" placeholder="Пароль"></div>
			<div class="mt-1"><input type="password" name="password-confirm" placeholder="Повторите пароль"></div>
			<button class="btn btn-primary">Зарегестрироваться</button>
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
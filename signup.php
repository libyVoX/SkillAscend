<? session_start() ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Регистрация</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body style="background: linear-gradient(to bottom right, rgba(15, 11, 23, 0.7) 700px, rgba(97, 119, 255, 50%)), url(images/auth_bg.png); background-attachment: fixed; background-size: 100%; display: flex;">
	<div style="background: #1E1E1E;" class="col-xxl-3 col-lg-6 col-10 my-auto mx-auto text-center d-flex">
		<div class="col-10 mx-auto my-auto">
			<p style="color: white; font-size: 200%;" class="mt-2">SkillAscend</p>
			<p style="color: #C4CBE3; scale: 0.9;" class="mt-2">Зарегестрируйтесь на сайте</p>
			<form action="registration.php" method="post" enctype="multipart/form-data">
				<input class="border rounded-0 mt-2 w-100" name="username" placeholder="Логин" style="background: none; height: 50px; color: white; font-size: 150%;">
				<input class="border rounded-0 mt-2 w-100" name="last-name" placeholder="Фамилия" style="background: none; height: 50px; color: white; font-size: 150%;">
				<input class="border rounded-0 mt-2 w-100" name="first-name" placeholder="Имя" style="background: none; height: 50px; color: white; font-size: 150%;">
				<input class="border rounded-0 mt-2 w-100 asdasd" type="date" name="date-of-b" style="background: none; height: 50px; color: white; font-size: 150%; webkit-calendar-picker-indicator;">
				<input class="border rounded-0 mt-2 w-100" name="email" placeholder="Почта" style="background: none; height: 50px; color: white; font-size: 150%;">
				<input class="border rounded-0 mt-2 w-100" type="password" name="password" placeholder="Пароль" style="background: none; height: 50px; color: white; font-size: 150%;">
				<input class="border rounded-0 mt-2 w-100" type="password" name="password-confirm" placeholder="Повторите пароль" style="background: none; height: 50px; color: white; font-size: 150%;">
				<div class="d-flex mt-2">
					<p style="color: white; font-size: 150%;" class="my-auto">Кто ты?</p>
					<select name="acc_type" class="ms-3 my-auto form-select rounded-0" style="height: 50px; width: auto; font-size: 150%;">
					   	<option value="member">Участник</option>
					   	<option value="company">Компания</option>
					</select>
				</div>
				<button class="btn w-100 rounded-0 d-flex mt-5" style="height: 50px; background: white;">
					<p class="my-auto mx-auto" style="font-size: 150%; color: black;">Зарегестрироваться</p>
				</button>
			</form>
			<p>
				<?
					echo $_SESSION['error'];
					unset($_SESSION['error']);
				?>
			</p>
		</div>
	</div>

	<script>
		function forever() {
			document.body.style.height = document.documentElement.clientHeight + 'px'
		}
		setInterval(forever, 1)
	</script>



	<!--<div style="margin-top: 100px;" class="d-flex justify-content-center">
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
					//echo $_SESSION['error'];
					//unset($_SESSION['error']);
				?>
			</p>
		</form>
	</div>-->
</body>
</html>
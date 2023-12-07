<? session_start() ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Авторизация</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body style="background: linear-gradient(to bottom right, rgba(15, 11, 23, 0.7) 700px, rgba(97, 119, 255, 50%)), url(images/auth_bg.png); background-attachment: fixed; background-size: 100%; display: flex;">
	<div style="background: #1E1E1E;" class="col-xxl-3 col-lg-6 col-10 my-auto mx-auto text-center d-flex">|
		<div class="col-10 mx-auto my-auto">
			<p style="color: white; font-size: 200%;" class="mt-2">SkillAscend</p>
			<p style="color: #C4CBE3; scale: 0.9;" class="mt-2">Войдите на сайт или зарегестрируйтесь</p>
			<div class="d-flex border" style="height: 50px;">
				<button class="btn col-6 d-flex rounded-0 login" style="background: rgba(255,255,255,0.5);">
					<p class="my-auto mx-auto" style="font-size: 150%; color: white;">Логин</p>
				</button>
				<button class="btn col-6 d-flex border-0 rounded-0 email" style="background: none">
					<p class="my-auto mx-auto" style="font-size: 150%; color: white;">Почта</p>
				</button>
			</div>


			<form action="logining.php" method="post" enctype="multipart/form-data">
				<input class="border rounded-0 mt-2 w-100 input_log" name="username" placeholder="Логин" style="background: none; height: 50px; color: white; font-size: 150%;">
				<input class="border rounded-0 mt-2 w-100" type="password" name="password" placeholder="Пароль" style="background: none; height: 50px; color: white; font-size: 150%;">
				<button class="btn w-100 rounded-0 d-flex mt-5" style="height: 50px; background: white;">
					<p class="my-auto mx-auto" style="font-size: 150%; color: black;">Войти</p>
				</button>
			</form>


			<a href="signup.php" class="btn w-100 rounded-0 d-flex mt-2 border" style="height: 50px;">
				<p class="my-auto mx-auto" style="font-size: 150%; color: white;">Регистрация</p>
			</a>
			<p class="mt-5" style="color: red; font-size: 80%;">
				<?
					echo $_SESSION['error'];
					unset($_SESSION['error']);
				?>
			</p>
		</div>
	</div>

	<script>
		let login = document.querySelector('.login')
		let email = document.querySelector('.email')
		let input_log = document.querySelector('.input_log')
		let password = document.querySelector('.password')
		login.onclick = function(){
			email.style.background = 'none'
			login.style.background = 'rgba(255,255,255,0.5)'
			
			input_log.name = 'username'
			input_log.placeholder = 'Логин'
		}
		email.onclick = function(){
			login.style.background = 'none'
			email.style.background = 'rgba(255,255,255,0.5)'

			input_log.name = 'email'
			input_log.placeholder = 'Почта'
		}
		function forever() {
			document.body.style.height = document.documentElement.clientHeight + 'px'
		}
		setInterval(forever, 1)
	</script>
</body>
</html>
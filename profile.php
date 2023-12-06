<? session_start() ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Профиль</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
	<div style="margin-top: 100px;" class="d-flex justify-content-center">
		<div>
			<h1>
				<? echo $_SESSION['user_data']['username']; ?>
			</h1>
			<h2>
				<? echo $_SESSION['user_data']['type']; ?>
			</h2>
			<?
				echo '<form action="dashboard.php" method="post" enctype="multipart/form-data"><button class="btn btn-primary">Добавить задание</button></form>';
				if($_SESSION['user_data']['type'] == 'company'){
					echo '<form action="dashboard.php" method="post" enctype="multipart/form-data"><button class="btn btn-primary">Добавить задание</button></form>';
				}
			?>
			<form action="tasks.php" method="post" enctype="multipart/form-data"><button class="btn btn-primary">Задания</button></form>
		</div>
	</div>
</body>
</html>
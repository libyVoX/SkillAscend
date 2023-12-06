<? 
	session_start();
	$user_data = $_SESSION['user_data'];
?>
<!DOCTYPE html>
<?
	/*if($_SESSION['user_data']['type'] == 'member'){
		header('Location: profile.php');
	}*/
?>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Dashboard</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
	<div style="margin-top: 100px;" class="d-flex justify-content-center">
		<form action="task-add.php" method="post" enctype="multipart/form-data">
			<div class="d-flex">
				<p>Тип задачи</p>
				<select name="type" class="ms-3">
				   	<option value="test">Тест</option>
				   	<option value="task">Задание</option>
				   	<option value="project">Проект</option>
				</select>
			</div>
			<div class="mt-1"><input type="text" name="question" placeholder="Описание задачи"></div>
			<div class="d-flex">
				<input class="difficulity" name="difficulity" value="1" readonly>
				<button class="increase" type="button">+</button>
				<button class="decrease" type="button">-</button>
			</div>
			<div class="d-flex">
				<p>Направление</p>
				<select name="direction" class="ms-3">
				   	<option value="Python">Python</option>
				   	<option value="JavaScript">JavaScript</option>
				   	<option value="C#">C#</option>
				   	<option value="HTML">HTML</option>
				</select>
			</div>
			<button class="btn btn-primary">Добавить задачу</button>
			<p>
				<?
					echo $_SESSION['error'];
					unset($_SESSION['error']);
				?>
			</p>
		</form>
	</div>
	<script>
		let diff = document.querySelector('.difficulity')
		document.querySelector('.increase').onclick = function(){
			diff.value = Number(diff.value) + 1
		}
		document.querySelector('.decrease').onclick = function(){
			if(diff.value == 1){
				//ok
			}else{
				diff.value = Number(diff.value) - 1
			}
		}
	</script>
</body>
</html>
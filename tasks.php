<?
	session_start();
	$con = mysqli_connect('localhost', 'root', '', 'SkillAscend');
	$query = mysqli_query($con, "SELECT * FROM tasks");
	$data = mysqli_fetch_all($query);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Задания</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
	<div class="card">
		<div class="card-body">
			<h3>
				<? echo $data[0]['type']; ?>
			</h3>
		</div>
	</div>
</body>
</html>
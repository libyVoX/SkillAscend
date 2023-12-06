<?
	session_start();
	$con = mysqli_connect('localhost', 'root', '', 'SkillAscend');
	$type = $_POST['type'];
	$direction = $_POST['direction'];
	$diff = $_POST['difficulity'];
	$question = $_POST['question'];
	$user_data = $_SESSION['user_data']["username"];
	
	mysqli_query($con, "INSERT INTO tasks VALUES ('$type', '$direction', '$diff', '$question', '$user_data')");
	if($type == 'test'){
		file_put_contents('tests/task' . (string) mysqli_num_rows(mysqli_query($con, "SELECT * FROM tasks WHERE type = 'test'"))  . '.txt', 'Ваш превосходный текст');
		$_SESSION['error'] = 'Задача добавлена!';
		header('Location: /dashboard.php');
	}
?>
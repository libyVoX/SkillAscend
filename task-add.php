<?
	session_start();
	$con = mysqli_connect('localhost', 'root', '', 'SkillAscend');
	$title = $_POST['title'];
	$type = $_POST['type'];
	$direction = $_POST['direction'];
	$diff = $_POST['difficulity'];
	$question = $_POST['question'];
	$user_data = $_SESSION['user_data']["username"];
	$file = $_FILES['file']['tmp_name'];
	$asd = 'tasks/' . $_FILES['file']['name'];
	
	mysqli_query($con, "INSERT INTO tasks VALUES (NULL, '$title', '$type', '$direction', '$diff', '$question', '$user_data', '$asd')");
	move_uploaded_file($file, 'tasks/' . $_FILES['file']['name']);
	if($type == 'test'){
		$_SESSION['error'] = 'Задача добавлена!';
		header('Location: /dashboard.php');
	}
?>
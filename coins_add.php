<?
	session_start();
	$con = mysqli_connect('localhost', 'root', '', 'SkillAscend');
	$rating = $_POST['rate'];
	$accuracy = $_POST['accuracy'];
	$reward = round($rating * ($accuracy / 5), 0);
	$_SESSION['reward'] = $reward;
	$username = $_SESSION['user_data']['username'];
	$user = mysqli_query($con, "UPDATE users SET accelcoins = '$reward' WHERE username = '$username'");
	header('Location: completed_task.php');
?>
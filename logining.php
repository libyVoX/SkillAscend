<?
	session_start();
	$con = mysqli_connect('localhost', 'root', '', 'SkillAscend');

	$username = $_POST['username'];
	$password = $_POST['password'];

	$user_info = mysqli_query($con, "SELECT * FROM users WHERE username = '$username'");
	if(mysqli_num_rows($user_info) > 0){
		$user_data = mysqli_fetch_assoc($user_info);
		if($_POST['password'] === $user_data['password']){
			$_SESSION['user_data'] = $user_data;
			header('Location: profile.php');
		}else{
			$_SESSION['error'] = 'Неверный пароль!';
			header('Location: login.php');
			}
	}else{
		$_SESSION['error'] = 'Пользователя с таким никнеймом не существует!';
		header('Location: login.php');
	}
?>
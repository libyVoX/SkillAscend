<?
	session_start();
	$con = mysqli_connect('localhost', 'root', '', 'SkillAscend');

	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	if($username){
		$user_info = mysqli_query($con, "SELECT * FROM users WHERE username = '$username'");
	}else{
		$user_info = mysqli_query($con, "SELECT * FROM users WHERE email = '$email'");
	}
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
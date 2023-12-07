<?
	session_start();
	$con = mysqli_connect('localhost', 'root', '', 'SkillAscend');

	$password = $_POST['password'];
	$confirm = $_POST['password-confirm'];

	if($password !== $confirm){
		$_SESSION['error'] = 'Пароли не совпадают';
		header('Location: signup.php');
	}else{
		$user_info = mysqli_query($con, "SELECT * FROM users WHERE username = '$username'");
		$user_email = mysqli_query($con, "SELECT * FROM users WHERE email = '$email'");

		if(mysqli_num_rows($user_info) > 0){
			$_SESSION['error'] = 'Такой пользователь уже существует';
			header('Location: signup.php');
		}
		else if(mysqli_num_rows($user_email) > 0){
			$_SESSION['error'] = 'Такая почта уже используется';
			header('Location: signup.php');
		}else{
			$username = $_POST['username'];
			$last_name = $_POST['last-name'];
			$first_name = $_POST['first-name'];
			$acc_type = $_POST['acc_type'];
			$date_of_b = $_POST['date-of-b'];
			$email = $_POST['email'];
			mysqli_query($con, "INSERT INTO users (username, last_name, first_name, type, date_of_b, email, password) VALUES ('$username', '$last_name', '$first_name', '$acc_type', '$date_of_b', '$email', '$password')");
			header('Location: /index.html');
		}
	}
?>
<?php
	session_start();
	require_once 'connect.php';
	$login = $_POST['login'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$password_confirm = $_POST['password_confirm'];

	if ($password === $password_confirm) {
		
	} else {
		$_SESSION['message'] = 'Пароли не совпадают';
		header(string: 'Location:../registr.php')
	}

?>
<pre>
	
</pre>

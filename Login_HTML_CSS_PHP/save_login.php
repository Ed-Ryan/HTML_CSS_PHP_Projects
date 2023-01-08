<?php
	if(isset($_POST['username']) && isset($_POST['password'])) {
		$username = $_POST['username'];
		$password = $_POST['password'];
		$fileName = 'users/'.$username.'.txt';
		$file = fopen($fileName, 'w');
        $username.PHP_EOL=$password;
		fwrite($file, $username);
		fclose($file);
	}
?>
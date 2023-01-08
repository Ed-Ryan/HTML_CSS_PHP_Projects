<?php
    $username = $_POST['username'];
    $password = $_POST['password'];
    $filename = $username.'.txt';
    if(file_exist($filename)){
        $file = fopen($filename,"r");
        $lines = file($filename);
        $user = $lines[0];
        $word = $lines[1];
        fclose($file);
        if($user==$username && $word==$password){
            //Successful Authentication
        }
        else{
            //Unsuccessful
        }
    }
?>
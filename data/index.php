<?php
    $conn = new mysqli('lsky_mysql', 'root', '123456');
    if($conn){
        echo 'success';
    }else{
        echo 'error';
    }
	phpinfo();
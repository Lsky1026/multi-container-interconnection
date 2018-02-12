<?php
    $conn = new mysqli('lsky_mysql', 'root', '123456');
    if($conn){
        echo 'Database connection is successful';
        $conn->close();
    }else{
        echo 'Unable to connect to the database';
    }

    echo '<br />';

    $redis = new Redis();
    $redis->connect('lsky_redis', 6379);
    echo "redis server is running: " . $redis->ping();
	phpinfo();
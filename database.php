<?php

    define('HOST', 'localhost');
    define('DB_NAME','phishing');
    define('USER','');
    define('PASS','');

    try{
        $db = new PDO("mysql:host=" . HOST . ";dbname=" . DB_NAME, USER, PASS);
        $db->setAttribute(PDO::ATTR_ERMODE, PDO::ERRMODE8EXCEPTION);
        echo "connect > OK!";
    } catch(PDOException $e){
        echo $e;
    }
<?php

    define('HOST', ' ');
    define('DB_NAME',' ');
    define('USER',' ');
    define('PASS',' ');
    $username = "username";
    $password = "password";

    try{
        //connect
        $db = new PDO("mysql:host=" . HOST . ";dbname=" . DB_NAME, USER, PASS);
        $db->setAttribute(PDO::ATTR_ERMODE, PDO::ERRMODE_EXCEPTION);
    
    
        $sth = $db->prepare("
            INSERT INTO form(username, password)
            VALUES(:username :password)");
        $sth->bindParam(':username',$username);
        $sth->bindParam(':password',$password);
        $sth->execute();
        
        header("Location:it-work.html");
    }
    catch(PDOException $e){
        echo 'Impossible de traiter les données. Erreur : '.$e->getMessage();
    }
?>

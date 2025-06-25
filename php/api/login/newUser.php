<?php

require_once("{$_SERVER['DOCUMENT_ROOT']}/php/Class/User.php");
require_once("{$_SERVER['DOCUMENT_ROOT']}/php/Class/PasswordHash.php");
include "{$_SERVER['DOCUMENT_ROOT']}/php/api/conn.php";


    $passw = new PasswordHash(8,"TRUE");

    if($_SERVER['REQUEST_METHOD'] === 'POST'){

        if(!empty($_POST))
        {
            $user = new User();

            $password = $_POST['password'];

            $password = $passw->HashPassword($password);

            if($user->setUser($conn,$_POST,$password)){

                echo "true";

            }else{

                echo "false";
            }
        }
    }


    /*if($passw->CheckPassword("4480644Mon",$y)){

        echo "TRUE";
    }*/


?>
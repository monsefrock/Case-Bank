<?php

use App\Models\UserModel;
require_once("{$_SERVER['DOCUMENT_ROOT']}/php/bootstrap.php");
require_once("{$_SERVER['DOCUMENT_ROOT']}/php/Class/PasswordHash.php");


    $passw = new PasswordHash(8,"TRUE");

    if($_SERVER['REQUEST_METHOD'] === 'POST'){

        if(!empty($_POST))
        {
            $password = $passw->HashPassword($_POST['password']);

            $user = UserModel::create([
                'name' => $_POST['name'],
                'email' => $_POST['email'],
                'password' => $password,
                'state' => 1
            ]);

            if($user){
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
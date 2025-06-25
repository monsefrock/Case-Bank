<?php
require_once("{$_SERVER['DOCUMENT_ROOT']}/php/Class/User.php");
include "{$_SERVER['DOCUMENT_ROOT']}/php/api/conn.php";

if($_SERVER['REQUEST_METHOD'] === 'POST'){

    if(!empty($_POST))
    {
        $user = new User();

        $count =  $user->getCount($conn);

        foreach ($count as $cn){
            $number = $cn['nm'];
        }

        if ($number > 1){

            $result = $user->deletUser($conn,$_POST["user"]);
            echo $result;

        }else{

            echo "nm0";
        }

    }
}
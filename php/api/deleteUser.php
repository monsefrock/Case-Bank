<?php
use App\Models\UserModel;
require_once("{$_SERVER['DOCUMENT_ROOT']}/php/bootstrap.php");

if($_SERVER['REQUEST_METHOD'] === 'POST'){

    if(!empty($_POST))
    {
        $number = UserModel::count();

        if ($number > 1){

            $result = UserModel::destroy($_POST["user"]);
            echo $result ? "1" : "0";

        }else{

            echo "nm0";
        }

    }
}
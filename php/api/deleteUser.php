<?php
require_once("{$_SERVER['DOCUMENT_ROOT']}/php/bootstrap.php");
include "{$_SERVER['DOCUMENT_ROOT']}/php/api/conn.php";
use App\Models\UserModel;

if($_SERVER['REQUEST_METHOD'] === 'POST'){

    if(!empty($_POST))
    {
        $number = UserModel::count();
        if ($number > 1){
            $result = UserModel::where('id', $_POST["user"])->delete();
            echo $result;
        }else{
            echo "nm0";
        }

    }
}
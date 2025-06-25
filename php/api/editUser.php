<?php

require_once("{$_SERVER['DOCUMENT_ROOT']}/php/bootstrap.php");
require_once("{$_SERVER['DOCUMENT_ROOT']}/php/Class/PasswordHash.php");
include "{$_SERVER['DOCUMENT_ROOT']}/php/api/conn.php";
use App\Models\UserModel;


$passw = new PasswordHash(8,"TRUE");

if($_SERVER['REQUEST_METHOD'] === 'POST'){

    if(!empty($_POST))
    {
        $update = [
            'name' => $_POST['name'],
            'state' => $_POST['state']
        ];

        if (empty($_POST['password'])){
            $result = UserModel::where('id', $_POST['id'])->update($update);
            if($result){
                echo "نجحة عملة تحيث البيانات.";
            }else{
                echo "هناك مشكلة في عملية تحديث البيانات.";
            }
        }
        else{
            if (strlen($_POST['password']) > 8){
                $update['password'] = $passw->HashPassword($_POST['password']);
                $result = UserModel::where('id', $_POST['id'])->update($update);
                if($result){
                    echo "تم تحديث كلمة المرور بنجاح.";
                }else{
                    echo "هناك خطء في عملية تحديث كلمة المرور.";
                }
            }else{
                echo "كلمة المرور يجب أن تكون تحتوي على 8 خانات أو أكبر.";
            }
        }
    }
}


/*if($passw->CheckPassword("4480644Mon",$y)){

    echo "TRUE";
}*/


?>
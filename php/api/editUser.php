<?php

use App\Models\UserModel;
require_once("{$_SERVER['DOCUMENT_ROOT']}/php/bootstrap.php");
require_once("{$_SERVER['DOCUMENT_ROOT']}/php/Class/PasswordHash.php");


$passw = new PasswordHash(8,"TRUE");

if($_SERVER['REQUEST_METHOD'] === 'POST'){

    if(!empty($_POST))
    {
        $user = UserModel::find($_POST['id']);
        if($user){
            $user->name = $_POST['name'];
            $user->state = $_POST['state'];

            if (!empty($_POST['password'])){
                if (strlen($_POST['password']) > 8){
                    $password = $passw->HashPassword($_POST['password']);
                    $user->password = $password;
                }else{
                    echo "كلمة المرور يجب أن تكون تحتوي على 8 خانات أو أكبر.";
                    return;
                }
            }

            if($user->save()){
                if (!empty($_POST['password'])){
                    echo "تم تحديث كلمة المرور بنجاح.";
                }else{
                    echo "نجحة عملة تحيث البيانات.";
                }
            }else{
                echo "هناك مشكلة في عملية تحديث البيانات.";
            }
        }
    }
}


/*if($passw->CheckPassword("4480644Mon",$y)){

    echo "TRUE";
}*/


?>
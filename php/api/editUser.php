<?php

require_once("{$_SERVER['DOCUMENT_ROOT']}\php\Class\User.php");
require_once("{$_SERVER['DOCUMENT_ROOT']}\php\Class\PasswordHash.php");
include "{$_SERVER['DOCUMENT_ROOT']}\php\api\conn.php";


$passw = new PasswordHash(8,"TRUE");

if($_SERVER['REQUEST_METHOD'] === 'POST'){

    if(!empty($_POST))
    {
        $user = new User();
        if (empty($_POST['password'])){

            if($user->editUser($conn,$_POST)){

                echo "نجحة عملة تحيث البيانات.";

            }else{

                echo "هناك مشكلة في عملية تحديث البيانات.";
            }

        }
        else{
            if (strlen($_POST['password']) > 8){

                $password = $_POST['password'];

                $password = $passw->HashPassword($password);

                if($user->editPass($conn,$_POST,$password)){

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
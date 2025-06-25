<?php
    require_once("{$_SERVER['DOCUMENT_ROOT']}/php/Class/Case_.php");
    include "{$_SERVER['DOCUMENT_ROOT']}/php/api/conn.php";
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        if(!empty($_POST)) {

            $cases = new Case_();

            if($cases->setNewCase($conn,$_POST)){

               echo "true";

            }else{

                echo "false";
            }

        }else{

            echo "<h3 class='text-center text-danger' dir='rtl'>حدث خطء في إرسال البيانات</h3>";
        }
    } else {
        header('Location: /error');
        exit();
    }
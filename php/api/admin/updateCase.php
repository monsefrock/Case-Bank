<?php
require_once("{$_SERVER['DOCUMENT_ROOT']}/php/bootstrap.php");
use App\Models\CaseModel;

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    if(!empty($_POST))
    {
        $result = CaseModel::updateCaseData($_POST);
        if ($result){
            if(!empty($_POST["content_case"])){
                $content = CaseModel::getContent($_POST['case_id']);
                if(empty($content)){
                    $result = CaseModel::setContent($_POST);
                    if ($result){
                        echo "1";
                    }
                    else
                    {
                        echo "0";
                    }
                }
                else
                {
                    $result = CaseModel::updateContent($_POST);
                    if ($result){
                        echo "1";
                    }
                    else
                    {
                        echo "0";
                    }
                }
            }else{
                echo '1';
            }
        }
        else
        {
            echo "0";
        }
    }
}

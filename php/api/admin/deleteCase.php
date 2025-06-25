<?php
require_once("{$_SERVER['DOCUMENT_ROOT']}/php/bootstrap.php");
use App\Models\CaseModel;

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    if(!empty($_POST))
    {
        $caseId = $_POST['case_id'];
        $result2 = CaseModel::deleteContent($caseId);
        $result1 = CaseModel::deletePointWithCase($caseId);
        $result = CaseModel::deleteCaseById($caseId);
        if($result && $result1 && $result2){
            echo $result;
        }else{
            echo '0';
        }
    }
}

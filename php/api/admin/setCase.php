<?php
require_once("{$_SERVER['DOCUMENT_ROOT']}/php/bootstrap.php");
include "{$_SERVER['DOCUMENT_ROOT']}/php/api/conn.php";

use App\Models\CaseModel;

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    if(!empty($_POST)) {
        $case = CaseModel::create([
            'case_text' => $_POST['case_text'] ?? '',
            'case_m_cat' => $_POST['cat'] ?? '',
            'case_s_cat' => $_POST['sub'] ?? '',
            'case_type' => $_POST['type'] ?? '',
            'case_difficulty' => $_POST['difficulty'] ?? ''
        ]);
        if($case){
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

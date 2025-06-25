<?php
require_once("{$_SERVER['DOCUMENT_ROOT']}/php/bootstrap.php");
use App\Models\CaseModel;

$file_path = "{$_SERVER['DOCUMENT_ROOT']}/php/_files/data.csv";
$handle = fopen($file_path, "r");
$lineNumber = 1;
while (($raw_string = fgets($handle)) !== false) {
    $row = str_getcsv($raw_string);
    CaseModel::create([
        'case_text' => $row[0],
        'case_type' => $row[1],
        'case_m_cat' => $row[2],
        'case_s_cat' => $row[3],
        'case_difficulty' => $row[4]
    ]);
    echo 'Done' . '<br>';
    $lineNumber++;
}
fclose($handle);
?>

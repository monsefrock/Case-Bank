<?php
    require_once($_SERVER['DOCUMENT_ROOT'] . '/php/Class/Case_.php');
    include "conn.php";

    $cases = new Case_();


    $file_path = $_SERVER['DOCUMENT_ROOT'] . '/php/_files/data.csv';
    // Read a CSV file
    $handle = fopen($file_path, "r");

    // Optionally, you can keep the number of the line where
    // the loop its currently iterating over
    $lineNumber = 1;

    // Iterate over every line of the file
    while (($raw_string = fgets($handle)) !== false) {
        // Parse the raw csv string: "1, a, b, c"
        $row = str_getcsv($raw_string);

        // into an array: ['1', 'a', 'b', 'c']
        // And do what you need to do with every line
         /*var_dump($row);*/

        $cases->case_text = $row[0];
        $cases->case_type = $row[1];
        $cases->case_m_cat = $row[2];
        $cases->case_s_cat = $row[3];
        $cases->case_difficulty = $row[4];

        $cases->setCase($conn);
        echo 'Done' . '<br>';
        /*print_r($row[0]);
        echo "<br>";*/

        // Increase the current line
        $lineNumber++;
        /*if ($lineNumber == 25){
            return false;
        }*/
    }

    fclose($handle);



?>
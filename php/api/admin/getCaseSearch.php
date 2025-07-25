<?php
    require_once($_SERVER['DOCUMENT_ROOT'] . '/php/Class/Case_.php');
    include $_SERVER['DOCUMENT_ROOT'] . '/php/api/conn.php';

    if($_SERVER['REQUEST_METHOD'] === 'POST'){

        if(!empty($_POST))
        {
            $cases = new Case_();

            $result = $cases->getCasesAllSearch($conn,$_POST["search"]);

            if(!empty($result)){
                foreach ($result as $mainCat) {

                    $color = $mainCat["case_type"];

                    if($color == 'قيم') {

                        $css = 'border-primary';
                    }
                    elseif ($color == 'سياسات'){

                        $css = 'border-success';
                    }
                    elseif ($color == 'مساندة'){

                        $css = 'border-warning';
                    }
                    elseif ($color == 'ندم وتفضيل'){

                        $css = 'border-secondary';
                    }
                    elseif ($color == 'خاصة'){

                        $css = 'border-danger';
                    }
                    else{

                        $css = 'border-primary';
                    }

                    echo '<div class="col-12 border-end border-3 '.$css.'">
                                <div class="row">
                                    <div class="col-12 p-2 pb-0 mb-1">
                                        <p class="text-justify">
                                            '.$mainCat["case_text"].'
                                        </p>
                                        <div class="d-flex justify-content-end mt-2">
                                            <span class="badge bg-primary bg-opacity-50 ms-3">'.$mainCat["case_m_cat"].'</span >
                                            <span class="badge bg-primary bg-opacity-50">'.$mainCat["case_s_cat"].'</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row border-bottom border-1">
                                    <div  class="d-flex justify-content-evenly overflow-auto bg-light">
                                        <button data-id="'.$mainCat["id"].'" class="edit btn-font btn btn-light btn-sm me-1 ">
                                            <i class="bi bi-pencil-square"></i>
                                        </button>
                                        <button data-id="'.$mainCat["id"].'" class="delete btn-font btn btn-light btn-sm me-1 ">
                                            <i class="bi bi-trash"></i>
                                        </button>
                                        <button data-id="'.$mainCat["id"].'" class="show btn-font btn btn-light btn-sm">
                                            <i class="bi bi-easel2-fill"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>';
                }
            }else{
                echo "<h3 class='text-center text-danger' dir='rtl'>لا توجد بيانات لعرضها.</h3>";
            }
        }else{

            echo "<h3 class='text-center text-danger' dir='rtl'>لا توجد بيانات لعرضها.</h3>";
        }

    }else{
        header('Location: /error');
    }
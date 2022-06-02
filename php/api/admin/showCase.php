<?php
    require_once("{$_SERVER['DOCUMENT_ROOT']}\php\Class\Case_.php");
    include "{$_SERVER['DOCUMENT_ROOT']}\php\api\conn.php";

    $cases = new Case_();

    $result = $cases->getEditCases($conn,$_POST);

    if(!empty($result)){
        foreach ($result as $case) {

            $color = $case["case_type"];

            if ($color == 'قيم') {

                $css = 'bg-primary';
            } elseif ($color == 'سياسات') {

                $css = 'bg-success';
            } elseif ($color == 'مساندة') {

                $css = 'bg-warning';
            } elseif ($color == 'ندم وتفضيل') {

                $css = 'bg-secondary';
            } elseif ($color == 'خاصة') {

                $css = 'bg-danger';
            } else {

                $css = 'bg-primary';
            }
        }
    }

?>
<div class="p-3 bg-light w-100">
    <div class="row align-items-lg-baseline">
        <div class="col-6">
            <p class="<?php echo $css;?> w-50 text-white p-3 text-center rounded-3"><?php echo $case["case_type"];?></p>
        </div>
        <div class="col-6 d-flex justify-content-end">
            <p class="w-25 bg-orange p-1 rounded-1 text-white text-center me-2"><?php echo $case["case_m_cat"];?></p>
            <p class="w-25 bg-orange p-1 rounded-1 text-white text-center me-2"><?php echo $case["case_s_cat"];?></p>
            <p class="w-25 border shadow p-1 rounded-1 text-center"><?php echo $case["case_difficulty"];?></p>
        </div>
    </div>
</div>
<div class="p-3 bg-white w-100">
    <div class="case-hover border-secondary border-start rounded border-5">
        <h4 class="lh-base text-justify p-2 pt-0 text-wrap"><?php echo $case["case_text"];?></h4>
    </div>
</div>
<div class="p-3 bg-white w-100">
    <p class="text-justify lh-base">
        <?php
        $result1 = $cases->getContent($conn,$_POST);
        if(!empty($result1)){
            foreach ($result1 as $content) {
                echo $content["content"];
            }
        }
        ?>
    </p>
</div>
<div class="p-3 bg-white w-100 mb-4">
    <ul class="nav nav-tabs mb-3" id="pills-tab" role="tablist">
    <li class="nav-item" role="presentation">
    <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">حجج موالاة</button>
    </li>
    <li class="nav-item" role="presentation">
    <button class="nav-link " id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">حجج معارضة</button>
    </li>
    </ul>
    <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">

            <div class="accordion" id="accordionExample">
                <?php
                $result3 = $cases->getPoints($conn,$_POST);
                if(!empty($result3)){
                    $i = 1;
                    foreach ($result3 as $pointes) {

                        if($pointes["type"] == 0){
                            echo '<div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne'.$i.'">
                                        <button class="accordion-button collapsed text-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne'.$i.'" aria-expanded="false" aria-controls="collapseOne'.$i.'">
                                            '.$pointes["titel"].'
                                        </button>
                                    </h2>
                                    <div id="collapseOne'.$i.'" class="accordion-collapse collapse" aria-labelledby="headingOne'.$i.'" data-bs-parent="#accordionExample">
                                        <div class="accordion-body text-justify lh-base">
                                            '.$pointes["discription"].'
                                        </div>
                                    </div>
                                 </div>';
                            $i++;
                        }
                    }
                }
                ?>
            </div>

        </div>
        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">

            <div class="accordion" id="accordionExample1">
                <?php
                if(!empty($result3)){
                    $i = 20;
                    foreach ($result3 as $pointes) {

                        if($pointes["type"] == 1){
                            echo '<div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne'.$i.'">
                                        <button class="accordion-button collapsed text-danger" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne'.$i.'" aria-expanded="false" aria-controls="collapseOne'.$i.'">
                                           '.$pointes["titel"].'
                                        </button>
                                    </h2>
                                    <div id="collapseOne'.$i.'" class="accordion-collapse collapse" aria-labelledby="headingOne'.$i.'" data-bs-parent="#accordionExample1">
                                        <div class="accordion-body text-justify lh-base">
                                            '.$pointes["discription"].'
                                        </div>
                                    </div>
                                 </div>';
                            $i++;
                        }
                    }
                }
                ?>
            </div>

        </div>
    </div>
</div>
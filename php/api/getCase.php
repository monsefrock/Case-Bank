<?php
    require_once("{$_SERVER['DOCUMENT_ROOT']}\php\Class\Case_.php");
    include "conn.php";

    if(!empty($_POST)){
        $difficulty= $_POST['difficulty'];
        $cat= $_POST['cat'];
        $sub= $_POST['sub'];
        $type= $_POST['type'];

        if($difficulty == 'option1')
        {
            $difficulty = 'عادي';
        }
        elseif ($difficulty == 'option2'){
            $difficulty = 'متوسط';
        }
        elseif ($difficulty == 'option3'){
            $difficulty = 'متقدم';
        }

        $cases = new Case_();

        $result = $cases->getCase($conn,$type,$difficulty,$cat,$sub);
        if(!empty($result)){

            $color = $result['case_difficulty'];

            if($color == 'عادي')
            {
                $icon = 'bg-primary';
                $css = '#97abc6';
            }
            elseif ($color == 'متوسط'){

                $icon = 'bg-secondary';
                $css = '#4f5050';
            }
            elseif ($color == 'متقدم'){

                $icon = 'bg-danger';
                $css = '#bb2d3b';
            }

            echo '<div class="col-12">
                        <div class="row pt-3 pb-3 border-bottom">
                            <div class="col-3 border-start d-flex justify-content-center align-self-center p-3">
                                <div class="w-100 p-5 bg-primary '.$icon.' bg-opacity-25 rounded">
                                    <i class="bi-chat-left-quote-fill d-flex justify-content-center icon" style="color: '.$css.' ;"></i>
                                </div>
                            </div>
                            <div class="col-9 p-3">
                                <h2>
                                    '.$result['case_text'].'
                                </h2>
                                <div>
                                    <a href="#" tabindex="-1" class="btn btn-sm btn-primary disabled placeholder mt-4" aria-hidden="true">'.$result['case_type'].'</a>
                                    <a href="#" tabindex="-1" class="btn btn-sm btn-warning disabled placeholder mt-4" aria-hidden="true">'.$result['case_m_cat'].'</a>
                                    <a href="#" tabindex="-1" class="btn btn-sm btn-info disabled placeholder mt-4" aria-hidden="true">'.$result['case_s_cat'].'</a>
                                </div>
                            </div>
                        </div>
                  </div>';
        }else{

            $result = $cases->getCaseRand($conn,$type,$difficulty);
            if(!empty($result))
            {
                $color = $result['case_difficulty'];

                if($color == 'عادي')
                {
                    $icon = 'bg-primary';
                    $css = '#97abc6';
                }
                elseif ($color == 'متوسط'){

                    $icon = 'bg-secondary';
                    $css = '#4f5050';
                }
                elseif ($color == 'متقدم'){

                    $icon = 'bg-danger';
                    $css = '#bb2d3b';
                }
                echo '<div class="col-12">
                    <div class="alert alert-warning text-center" role="alert">
                        للأسف لايجد تطابق مع الفلترة الخاصة بك. يمكنك تغيير بعض الإختيارات حتى تتمكن من الحصول على أفضل نتيجة
                    </div>
                  </div>';
                echo '<div class="col-12">
                        <div class="row pt-3 pb-3 border-bottom">
                            <div class="col-3 border-start d-flex justify-content-center align-self-center p-3">
                                <div class="w-100 p-5 bg-primary '.$icon.' bg-opacity-25 rounded">
                                    <i class="bi-chat-left-quote-fill d-flex justify-content-center icon" style="color: '.$css.' ;"></i>
                                </div>
                            </div>
                            <div class="col-9 p-3">
                                <h2>
                                    '.$result['case_text'].'
                                </h2>
                                <div>
                                    <a href="#" tabindex="-1" class="btn btn-sm btn-primary disabled placeholder mt-4" aria-hidden="true">'.$result['case_type'].'</a>
                                </div>
                            </div>
                        </div>
                  </div>';
            }else{
                echo '<div class="col-12">
                    <div class="alert alert-danger text-center" role="alert">
                        للأسف لايجد تطابق مع الفلترة الخاصة بك. يمكنك تغيير بعض الإختيارات حتى تتمكن من الحصول على أفضل نتيجة
                    </div>
                  </div>';
            }

        }

        /*while($row = $result->fetch_assoc()) {
            echo $row['case_text'].'<br>';
        }*/

    }

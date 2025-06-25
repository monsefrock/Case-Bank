<?php
    require_once("{$_SERVER['DOCUMENT_ROOT']}/php/Class/Case_.php");
    include "conn.php";

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        if(!empty($_POST)){

            if(isset($_POST['difficulty'])){

                $difficulty= $_POST['difficulty'];

                if($difficulty == 'option1') {

                    $difficulty = 'عادي';
                }
                elseif ($difficulty == 'option2'){

                    $difficulty = 'متوسط';
                }
                elseif ($difficulty == 'option3'){

                    $difficulty = 'متقدم';

                }
            }
            if(isset($_POST['cat'])){

                $cat= $_POST['cat'];
            }
            if(isset($_POST['sub'])){

                $sub= $_POST['sub'];
            }
            if(isset($_POST['type'])){

                $type= $_POST['type'];
            }

            if($cat == 'disabled' and $sub == 'disabled'){

                getFirst($conn ,$type, $difficulty);

            }
            elseif ($cat != 'disabled' and $sub == 'disabled'){

                getSacand($conn ,$type, $cat, $difficulty);

            }
            elseif ($cat != 'disabled' and $sub != 'disabled'){

                geTarthe($conn ,$type, $cat, $sub, $difficulty);

            }
            elseif ($cat != 'disabled' and $sub != 'disabled' and $difficulty != 'disabled'){

                getAll($conn ,$type, $cat, $sub, $difficulty);

            }
            else{

                echo '<div class="col-12">
                        <div class="alert alert-danger text-center" role="alert">
                            للأسف لايجد تطابق مع الفلترة الخاصة بك. يمكنك تغيير بعض الإختيارات حتى تتمكن من الحصول على نتائج أفضل
                        </div>
                      </div>';

            }



        } else {
            header('Location: /error');
            exit();
        }

    } else {
        header('Location: /error');
        exit();
    }

    function getFirst($conn, $type, $difficulty){

        $icon = 'bg-primary';
        $css = '#97abc6';

        $cases = new Case_();

        $result = $cases->getCaseRand($conn,$type,$difficulty);

        if(!empty($result))
        {
            $color = $result['case_difficulty'];

            if($color == 'عادي') {

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
            echo '<div class="col-12 sssd">
                        <div class="row pt-3 pb-3 border-bottom">
                            <div class="col-12 col-sm-3  d-flex justify-content-center align-self-center p-3">
                                <div class="w-100 p-5 bg-primary '.$icon.' bg-opacity-25 rounded">
                                    <i class="bi-chat-left-quote-fill d-flex justify-content-center icon" style="color: '.$css.' ;"></i>
                                    <p class="text-center">دولاب القضايا</p>
                                </div>
                            </div>
                            <div class="col-12 col-sm-9 p-3">
                                <h2 id="text_copy">
                                    '.$result['case_text'].'
                                </h2>
                                <div>
                                    <a href="#" tabindex="-1" class="btn btn-sm btn-primary disabled placeholder mt-4" aria-hidden="true">'.$result['case_type'].'</a>
                                    <a href="#" tabindex="-1" class="btn btn-sm btn-info disabled placeholder mt-4" aria-hidden="true">'.$result['case_m_cat'].'</a>
                                    <a href="#" tabindex="-1" class="btn btn-sm btn-warning disabled placeholder mt-4" aria-hidden="true">'.$result['case_s_cat'].'</a>
                                </div>
                                <div class="mt-2">
                                    <button id="liveToastBtn_mon" class="btn btn-sm btn-outline-primary" onclick="copyToClipboard('."'#text_copy'".')">
                                        نسخ المقولة
                                        <i class="bi bi-clipboard me-2"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                  </div>';
        }
        else{

            echo '<div class="col-12">
                    <div class="alert alert-danger text-center" role="alert">
                        للأسف لايجد تطابق مع الفلترة الخاصة بك. يمكنك تغيير بعض الإختيارات حتى تتمكن من الحصول على أفضل نتيجة
                    </div>
                  </div>';

        }
    }

    function getSacand($conn, $type, $cat, $difficulty){

        $icon = 'bg-primary';
        $css = '#97abc6';

        $cases = new Case_();

        $result = $cases->getCaseM($conn,$type,$cat,$difficulty);

        if(!empty($result))
        {
            $color = $result['case_difficulty'];

            if($color == 'عادي') {

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
                            <div class="col-12 col-sm-3  d-flex justify-content-center align-self-center p-3">
                                <div class="w-100 p-5 bg-primary '.$icon.' bg-opacity-25 rounded">
                                    <i class="bi-chat-left-quote-fill d-flex justify-content-center icon" style="color: '.$css.' ;"></i>
                                    <p class="text-center">دولاب القضايا</p>
                                </div>
                            </div>
                            <div class="col-12 col-sm-9 p-3">
                                <h2 id="text_copy">
                                    '.$result['case_text'].'
                                </h2>
                                <div>
                                    <a href="#" tabindex="-1" class="btn btn-sm btn-primary disabled placeholder mt-4" aria-hidden="true">'.$result['case_type'].'</a>
                                    <a href="#" tabindex="-1" class="btn btn-sm btn-info disabled placeholder mt-4" aria-hidden="true">'.$result['case_m_cat'].'</a>
                                    <a href="#" tabindex="-1" class="btn btn-sm btn-warning disabled placeholder mt-4" aria-hidden="true">'.$result['case_s_cat'].'</a>
                                </div>
                                <div class="mt-2">
                                    <button id="liveToastBtn_mon" class="btn btn-sm btn-outline-primary" onclick="copyToClipboard('."'#text_copy'".')">
                                        نسخ المقولة
                                        <i class="bi bi-clipboard me-2"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                  </div>';
        }
        else{

            echo '<div class="col-12">
                    <div class="alert alert-danger text-center" role="alert">
                        للأسف لايجد تطابق مع الفلترة الخاصة بك. يمكنك تغيير بعض الإختيارات حتى تتمكن من الحصول على أفضل نتيجة
                    </div>
                  </div>';

        }

    }

    function geTarthe($conn, $type, $cat, $sub, $difficulty){

        $icon = 'bg-primary';
        $css = '#97abc6';

        $cases = new Case_();

        $result = $cases->getCaseS($conn, $type, $cat, $sub,$difficulty);

        if(!empty($result))
        {
            $color = $result['case_difficulty'];

            if($color == 'عادي') {

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
                            <div class="col-12 col-sm-3  d-flex justify-content-center align-self-center p-3">
                                <div class="w-100 p-5 bg-primary '.$icon.' bg-opacity-25 rounded">
                                    <i class="bi-chat-left-quote-fill d-flex justify-content-center icon" style="color: '.$css.' ;"></i>
                                    <p class="text-center">دولاب القضايا</p>
                                </div>
                            </div>
                            <div class="col-12 col-sm-9 p-3">
                                <h2 id="text_copy">
                                    '.$result['case_text'].'
                                </h2>
                                <div>
                                    <a href="#" tabindex="-1" class="btn btn-sm btn-primary disabled placeholder mt-4" aria-hidden="true">'.$result['case_type'].'</a>
                                    <a href="#" tabindex="-1" class="btn btn-sm btn-info disabled placeholder mt-4" aria-hidden="true">'.$result['case_m_cat'].'</a>
                                    <a href="#" tabindex="-1" class="btn btn-sm btn-warning disabled placeholder mt-4" aria-hidden="true">'.$result['case_s_cat'].'</a>
                                </div>
                                <div class="mt-2">
                                    <button id="liveToastBtn_mon" class="btn btn-sm btn-outline-primary" onclick="copyToClipboard('."'#text_copy'".')">
                                        نسخ المقولة
                                        <i class="bi bi-clipboard me-2"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                  </div>';
        }
        else{

            echo '<div class="col-12">
                    <div class="alert alert-danger text-center" role="alert">
                        للأسف لايجد تطابق مع الفلترة الخاصة بك. يمكنك تغيير بعض الإختيارات حتى تتمكن من الحصول على أفضل نتيجة
                    </div>
                  </div>';

        }

    }

    function getAll($conn, $type, $cat, $sub, $difficulty){

        $icon = 'bg-primary';
        $css = '#97abc6';

        $cases = new Case_();

        $result = $cases->getAll($conn, $type, $cat, $sub, $difficulty);

        if(!empty($result))
        {
            $color = $result['case_difficulty'];

            if($color == 'عادي') {

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
                            <div class="col-12 col-sm-3  d-flex justify-content-center align-self-center p-3">
                                <div class="w-100 p-5 bg-primary '.$icon.' bg-opacity-25 rounded">
                                    <i class="bi-chat-left-quote-fill d-flex justify-content-center icon" style="color: '.$css.' ;"></i>
                                    <p class="text-center">دولاب القضايا</p>
                                </div>
                            </div>
                            <div class="col-12 col-sm-9 p-3">
                                <h2 id="text_copy">
                                    '.$result['case_text'].'
                                </h2>
                                <div>
                                    <a href="#" tabindex="-1" class="btn btn-sm btn-primary disabled placeholder mt-4" aria-hidden="true">'.$result['case_type'].'</a>
                                    <a href="#" tabindex="-1" class="btn btn-sm btn-info disabled placeholder mt-4" aria-hidden="true">'.$result['case_m_cat'].'</a>
                                    <a href="#" tabindex="-1" class="btn btn-sm btn-warning disabled placeholder mt-4" aria-hidden="true">'.$result['case_s_cat'].'</a>
                                </div>
                                <div class="mt-2">
                                    <button id="liveToastBtn_mon" class="btn btn-sm btn-outline-primary" onclick="copyToClipboard('."'#text_copy'".')">
                                        نسخ المقولة
                                        <i class="bi bi-clipboard me-2"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                  </div>';
        }
        else{

            echo '<div class="col-12">
                    <div class="alert alert-danger text-center" role="alert">
                        للأسف لايجد تطابق مع الفلترة الخاصة بك. يمكنك تغيير بعض الإختيارات حتى تتمكن من الحصول على أفضل نتيجة
                    </div>
                  </div>';

        }

    }


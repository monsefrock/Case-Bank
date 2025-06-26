<?php
    require_once("{$_SERVER['DOCUMENT_ROOT']}/php/bootstrap.php");
    use App\Models\CaseModel;

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

                getFirst($type, $difficulty);

            }
            elseif ($cat != 'disabled' and $sub == 'disabled'){

                getSacand($type, $cat, $difficulty);

            }
            elseif ($cat != 'disabled' and $sub != 'disabled'){

                geTarthe($type, $cat, $sub, $difficulty);

            }
            elseif ($cat != 'disabled' and $sub != 'disabled' and $difficulty != 'disabled'){

                getAll($type, $cat, $sub, $difficulty);

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

    function getFirst($type, $difficulty){

        $icon = 'bg-primary';
        $css = '#97abc6';


        $result = CaseModel::getCaseRand($type, $difficulty);

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
            renderCase($result, $icon, $css);
        }
        else{

            echo '<div class="col-12">
                    <div class="alert alert-danger text-center" role="alert">
                        للأسف لايجد تطابق مع الفلترة الخاصة بك. يمكنك تغيير بعض الإختيارات حتى تتمكن من الحصول على أفضل نتيجة
                    </div>
                  </div>';

        }
    }

    function getSacand($type, $cat, $difficulty){

        $icon = 'bg-primary';
        $css = '#97abc6';


        $result = CaseModel::getCaseM($type, $cat, $difficulty);

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
            renderCase($result, $icon, $css);
        }
        else{

            echo '<div class="col-12">
                    <div class="alert alert-danger text-center" role="alert">
                        للأسف لايجد تطابق مع الفلترة الخاصة بك. يمكنك تغيير بعض الإختيارات حتى تتمكن من الحصول على أفضل نتيجة
                    </div>
                  </div>';

        }

    }

    function geTarthe($type, $cat, $sub, $difficulty){

        $icon = 'bg-primary';
        $css = '#97abc6';


        $result = CaseModel::getCaseS($type, $cat, $sub, $difficulty);

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
            renderCase($result, $icon, $css);
        }
        else{

            echo '<div class="col-12">
                    <div class="alert alert-danger text-center" role="alert">
                        للأسف لايجد تطابق مع الفلترة الخاصة بك. يمكنك تغيير بعض الإختيارات حتى تتمكن من الحصول على أفضل نتيجة
                    </div>
                  </div>';

        }

    }

    function getAll($type, $cat, $sub, $difficulty){

        $icon = 'bg-primary';
        $css = '#97abc6';


        $result = CaseModel::getAllCases($type, $cat, $sub, $difficulty);

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
            renderCase($result, $icon, $css);
        }
        else{

            echo '<div class="col-12">
                    <div class="alert alert-danger text-center" role="alert">
                        للأسف لايجد تطابق مع الفلترة الخاصة بك. يمكنك تغيير بعض الإختيارات حتى تتمكن من الحصول على أفضل نتيجة
                    </div>
                  </div>';

        }

    }

    function renderCase($result, $icon, $css){
        $html = <<<HTML
<div class="glass p-6 space-y-4">
    <div class="flex gap-4 items-start">
        <div class="p-4 {$icon} bg-opacity-30 rounded-full">
            <i class="bi-chat-left-quote-fill text-3xl" style="color: {$css};"></i>
        </div>
        <div class="flex-1">
            <p id="text_copy" class="text-lg font-semibold mb-2">{$result['case_text']}</p>
            <div class="flex flex-wrap gap-2">
                <span class="px-2 py-1 bg-blue-600 text-white rounded text-sm">{$result['case_type']}</span>
                <span class="px-2 py-1 bg-indigo-600 text-white rounded text-sm">{$result['case_m_cat']}</span>
                <span class="px-2 py-1 bg-purple-600 text-white rounded text-sm">{$result['case_s_cat']}</span>
            </div>
            <button id="liveToastBtn_mon" class="mt-2 text-blue-600 hover:text-blue-800" onclick="copyToClipboard('#text_copy')">
                نسخ المقولة <i class="bi bi-clipboard ms-1"></i>
            </button>
        </div>
    </div>
</div>
HTML;
        echo $html;
    }


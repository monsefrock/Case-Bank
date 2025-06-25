<?php
    require_once("{$_SERVER['DOCUMENT_ROOT']}/php/bootstrap.php");
    use App\Models\CaseModel;
?>
<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>بنك القضايا | الرئيسية </title>
    <link rel="stylesheet" href="../../assets/main.css">
    <link href="../../assets/signin.css" rel="stylesheet">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <!--<link href="../../assets/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <script src="../../assets/bootstrap/dist/js/bootstrap.bundle.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="../../assets/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>-->
</head>
<body class="bio" dir="rtl">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">

            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <i class="bi bi-three-dots-vertical"></i>
            </button>

            <a class="navbar-brand" href="/">
                <img src="../../assets/img/og1logo.png" alt="dda logo">
            </a>


            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="https://dda.ly">
                            <i class="bi bi-house ms-2"></i>
                            الموقع الرسمي
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="https://timer.dda.ly">
                            <i class="bi bi-stopwatch ms-2"></i>
                            المؤقت
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="https://blog.dda.ly">
                            <i class="bi bi-quote ms-2"></i>
                            االمدونة
                        </a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>
    <div class="toast-container top-0 end-0 p-3 position-absolute">
        <div dir="ltr" id="clipbords" class="toast align-items-center bg-success border" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="d-flex">
                <div class="toast-body text-white" dir="rtl">
                    تم نسخ المقولة بنجاح.
                </div>
                <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
        </div>
    </div>
    <div class="container glass border mb-5 mt-3 p-4">
        <div class="row " id="message">
            <!--<div class="col-12">
                <div class="row pt-3 pb-3 border-bottom">
                    <div class="col-12 col-sm-3 d-flex justify-content-center align-self-center p-3">
                        <div class="w-100 p-5 bg-primary bg-gradient bg-opacity-25 rounded">
                            <i class="bi-chat-left-quote-fill d-flex justify-content-center icon"></i>
                        </div>
                    </div>
                    <div class="col-12 col-sm-9 p-3">
                        <h2 id="text_copy">
                            يعتقد هذا المجلس أن العقوبات الاقتصادية فعالة في إجبار الدول الأجنبية على الالتزام بالمعايير الدولية لحقوق الإنسان.
                        </h2>
                        <div>
                            <a href="#" tabindex="-1" class="btn btn-sm btn-primary disabled placeholder mt-4" aria-hidden="true">قيم</a>
                            <a href="#" tabindex="-1" class="btn btn-sm btn-warning disabled placeholder mt-4" aria-hidden="true">اقتصاد</a>
                            <a href="#" tabindex="-1" class="btn btn-sm btn-info disabled placeholder mt-4" aria-hidden="true">دولي</a>
                        </div>
                        <div class="mt-2">
                            <button id="liveToastBtn" class="btn btn-sm btn-outline-primary" onclick="copyToClipboard("#text_copy")">
                                نسخ المقولة
                                <i class="bi bi-clipboard me-2"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>-->
        </div>
        <form dir="ltr" class="row mb-4 text-center row-cols-lg-auto d-flex justify-content-between pb-0 pt-3 p-5">
                <span class="position-absolute top-95 start-50 translate-middle-x badge">
                <button type="reset" class="btn btn-primary rounded">
                    <i class="bi bi-arrow-clockwise me-2"></i>
                    إعادة تعيين المرشح
                </button>
                <a id="getCase" class="btn btn-dda text-white rounded">
                    <i class="bi bi-search me-2"></i>
                    ابحث عن القضية
                </a>
            </span>
            <div class="col-12 col-md-6 row">
                <label for="difficulty" class="form-label">مستوى القضية</label>
                <div class="col-12 d-flex justify-content-between">
                    <div class="form-check">
                        <input class="form-check-input group1" type="radio" name="difficulty" id="exampleRadios3" value="option3">
                        <label class="form-check-label" for="exampleRadios3">
                            متقدم
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input group1" type="radio" name="difficulty" id="exampleRadios2" value="option2">
                        <label class="form-check-label" for="exampleRadios2">
                            متوسط
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input group1" type="radio" name="difficulty" id="exampleRadios1" value="option1">
                        <label class="form-check-label" for="exampleRadios1">
                            عادي
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input group1" type="radio" name="difficulty" id="exampleRadios0" value="disabled"  checked>
                        <label class="form-check-label" for="exampleRadios0">
                            -
                        </label>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <label for="sub" class="form-label">الموضوع الفرعي للقضية</label>
                <select id="sub" name="sub" class="form-select group1" >
                    <option value="disabled">-</option>
                    <?php
                    $result = CaseModel::getSubCat();
                    foreach ($result as $mainCat) {
                        echo '<option value="'.$mainCat['case_s_cat'].'">'.$mainCat['case_s_cat'].'</option>';
                    }
                    ?>
                </select>
            </div>
            <div class="col-12 col-md-6">
                <label for="cat" class="form-label">موضوع القضية</label>
                <select id="cat" name="cat" class="form-select group1" >
                    <option value="disabled">-</option>
                    <?php
                    $result = CaseModel::getMainCat();
                    foreach ($result as $mainCat) {
                        echo '<option value="'.$mainCat['case_m_cat'].'">'.$mainCat['case_m_cat'].'</option>';
                    }
                    ?>
                </select>
            </div>
            <div class="col-12 col-md-6 ">
                <label for="type" class="form-label">نوع القضية</label>
                <select id="type" name="type" class="form-select">
                    <?php
                    $result = CaseModel::getTypeCat();
                    foreach ($result as $mainCat) {
                        echo '<option value="'.$mainCat['case_type'].'">'.$mainCat['case_type'].'</option>';
                    }
                    ?>
                </select>
            </div>
        </form>

    </div>
    <script>

        $(document).on('click',"#liveToastBtn_mon", function (){

            var difficulty = $("[name='difficulty']:enabled").val();
            if(difficulty){
                var diff = $("[name='difficulty']:checked").val();
            }
            var type = $("[name='type']:enabled").val();
            var cat = $("[name='cat']:enabled").val();
            var sub = $("[name='sub']:enabled").val();

            $.post("/logCase",{
                difficulty: diff,
                cat: cat,
                sub: sub,
                type: type
            },function (data,status) {

                const toastLiveExample = document.getElementById('clipbords');
                const toast = new bootstrap.Toast(toastLiveExample);
                toast.show();

            })


        });

        function copyToClipboard(element) {

            $(element).text().replace(/^\s+|\s+$/g, '');
            x = $(element).text().concat(" | ", "جميع الحقوق محفوظة مؤسسة الحوار والمناظرة");
            x.replace(/^\s+|\s+$/g, '');
            var sampleTextarea = document.createElement("textarea");
            document.body.appendChild(sampleTextarea);
            sampleTextarea.value = x; //save main text in it
            console.log(sampleTextarea.value);
            sampleTextarea.select(); //select textarea contenrs
            document.execCommand("copy");
            document.body.removeChild(sampleTextarea);
        }


        $(document).on('click',"#getCase", function ()
        {
            var difficulty = $("[name='difficulty']:enabled").val();

            if(difficulty){
                var diff = $("[name='difficulty']:checked").val();
            }

            var type = $("[name='type']:enabled").val();
            var cat = $("[name='cat']:enabled").val();
            var sub = $("[name='sub']:enabled").val();

            $.post("/getCase",{
                difficulty: diff,
                cat: cat,
                sub: sub,
                type: type
            },function (data,status) {

                $("#message").html(data);

            })

        });
    </script>


</body>
</html>
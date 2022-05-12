<?php
    require_once("{$_SERVER['DOCUMENT_ROOT']}\php\Class\Case_.php");
    require_once ("{$_SERVER['DOCUMENT_ROOT']}\php\api\conn.php");

    $cases = new Case_();
?>
<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>بنك القضايا | الرئيسية </title>
    <link rel="stylesheet" href="../../assets/main.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
</head>
<body class="bio" dir="rtl">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="../../assets/img/og1logo.png" alt="dda logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarToggleExternalContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="/">
                            <i class="bi bi-house ms-2"></i>
                            الموقع الرسمي
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="/">
                            <i class="bi bi-stopwatch ms-2"></i>
                            المؤقت
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="/">
                            <i class="bi bi-quote ms-2"></i>
                            االمدونة
                        </a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>
    <!--<div id="message" class="container text-center"></div>-->
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
                        <h2>
                            يعتقد هذا المجلس أن العقوبات الاقتصادية فعالة في إجبار الدول الأجنبية على الالتزام بالمعايير الدولية لحقوق الإنسان.
                        </h2>
                        <div>
                            <a href="#" tabindex="-1" class="btn btn-sm btn-primary disabled placeholder mt-4" aria-hidden="true">قيم</a>
                            <a href="#" tabindex="-1" class="btn btn-sm btn-warning disabled placeholder mt-4" aria-hidden="true">اقتصاد</a>
                            <a href="#" tabindex="-1" class="btn btn-sm btn-info disabled placeholder mt-4" aria-hidden="true">دولي</a>
                        </div>
                    </div>
                </div>
            </div>-->
        </div>
        <form dir="ltr" class="row mb-4 text-center row-cols-lg-auto d-flex justify-content-between pb-0 pt-3 p-5">
                <span class="position-absolute top-95 start-50 translate-middle-x badge">
                <button type="reset" class="btn btn-warning rounded">
                    <i class="bi bi-arrow-clockwise me-2"></i>
                    إعادة تعيين المرشح
                </button>
                <a id="getCase" class="btn btn-primary rounded">
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
                    $result = $cases->getSubCat($conn);
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
                    $result = $cases->getMainCat($conn);
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
                    $result = $cases->getTypeCat($conn);
                    foreach ($result as $mainCat) {
                        echo '<option value="'.$mainCat['case_type'].'">'.$mainCat['case_type'].'</option>';
                    }
                    ?>
                </select>
            </div>
        </form>

    </div>
    <script>

        /*$(function() {
            enable_cb();
            $("#group1").click(enable_cb);
        });

        function enable_cb() {

            if (this.checked) {
                $(".group1").removeAttr("disabled");
            } else {
                $(".group1").attr("disabled", true);
            }
        }*/

        $(document).on('click',"#getCase", function ()
        {
            var difficulty = $("[name='difficulty']:enabled").val();

            if(difficulty){
                var diff = $("[name='difficulty']:checked").val();
            }

            var type = $("[name='type']:enabled").val();
            var cat = $("[name='cat']:enabled").val();
            var sub = $("[name='sub']:enabled").val();
            // var type = $("#type").val();

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
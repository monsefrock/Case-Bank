<!DOCTYPE html>
<html lang="ar">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <title>لوحة التحكم | دولاب المناظرة</title>
    <link rel="stylesheet" href="../../assets/main.css">
    <link href="../../assets/signin.css" rel="stylesheet">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.rtl.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.0/css/jquery.dataTables.css">
    <!-- JavaScript Bundle with Popper -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css" rel="stylesheet"> </link>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.0/js/jquery.dataTables.js"></script>
</head>
<body class="bio" dir="rtl">

    <div class="d-xl-none">
        <nav class="navbar navbar-expand-lg bg-light border-bottom">
            <div class="container-fluid">

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <div class="p-1">
                        <div class="dropdown">
                            <div class="" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                منصف الإدريسي
                            </div>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <li>
                                    <a class="dropdown-item" href="#">
                                        <i class="bi bi-box-arrow-right"></i>
                                        تسجيل الخروج
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <ul class="navbar-nav">
                        <li class="nav-item p-2">
                            <a class="nav-link" aria-current="page" href="#">المستخدمين</a>
                        </li>
                        <li class="nav-item p-2 ">
                            <a id="getCasesbtn" class="nav-link" href="/dashboard">القضايا</a>
                        </li>
                        <li class="nav-item p-2">
                            <a class="nav-link" href="#">الإحصائيات</a>
                        </li>
                    </ul>
                </div>
                <a class="navbar-brand" href="/dashboard"><img class="img-fluid"  src="../../assets/img/og1logo.png" alt="dda logo"/></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </nav>
    </div>

    <section class="container-fluid">
        <div class="row">
            <div class="col-2 d-none d-xl-block d-xxl-none border-end bg-white align-content-between">

                <div class="p-2 d-flex justify-content-center">
                    <a href="/dashboard" class="w-100">
                        <img class="img-fluid"  src="../../assets/img/og1logo.png" alt="dda logo"/>
                    </a>
                </div>

                <div class="p-2 rounded-2 bg-light border border-light mt-2 d-flex justify-content-between align-items-center">

                    <div class="p-1">
                        <div class="dropdown">
                            <div class="" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                منصف الإدريسي
                            </div>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <li>
                                    <a class="dropdown-item" href="#">
                                        <i class="bi bi-box-arrow-right"></i>
                                        تسجيل الخروج
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="border-start" style="font-size: 20px; color: #0d6efd">
                        <i class="bi bi-person-fill p-3"></i>
                    </div>

                </div>

                <div class="mt-5 w-100">
                    <div class="navbar-nav" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item p-2 border-bottom">
                                <a class="nav-link" aria-current="page" href="#">المستخدمين</a>
                            </li>
                            <li class="nav-item p-2 border-bottom">
                                <a id="getCasesbtn" class="nav-link" href="/dashboard">القضايا</a>
                            </li>
                            <li class="nav-item p-2">
                                <a class="nav-link" href="#">الإحصائيات</a>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
            <div class="col-xl-3 col-4  bg-white border-end">
                <div class="row pt-3 pb-1 border-bottom">
                    <div class="input-group mb-3">
                        <input name="search" type="text" class="form-control search-bar border-end-0" placeholder="البحث عن القضايا">
                        <span class="input-group-text bg-white">
                            <i class="icon-orange bi bi-search"></i>
                        </span>
                    </div>
                </div>
                <div class="row pt-3 pb-3 border-bottom">
                    <div class="d-flex justify-content-between p-1 overflow-auto">
                        <button data-text="قيم" class="btn filter btn-sm btn-primary">
                            قيمة
                        </button>
                        <button data-text="سياسات" class="btn filter btn-sm btn-success">
                            سياسة
                        </button>
                        <button data-text="خاصة" class="btn filter btn-sm btn-danger">
                            خاصة
                        </button>
                        <button data-text="مساندة" class="btn filter btn-sm btn-warning">
                            مساندة
                        </button>
                        <button data-text="ندم وتفضيل" class="btn filter btn-sm btn-secondary">
                            ندم وتفضيل
                        </button>
                    </div>
                </div>
                <div dir="ltr" class="row ex3" id="cases_get">
                    <!--<div class="col-12 border-end border-3 border-primary">
                        <div class="row">
                            <div class="col-12 p-2 pb-0 mb-1">
                                <p class="text-justify">
                                    يعتقد هذا المجلس أن العقوبات الاقتصادية فعالة في إجبار الدول الأجنبية على الالتزام بالمعايير الدولية لحقوق الإنسان.
                                </p>
                                <div class="d-flex justify-content-end mt-2">
                                    <span class="badge bg-primary bg-opacity-50 ms-3">اقتصاد</span >
                                    <span class="badge bg-primary bg-opacity-50">دولي</span>
                                </div>
                            </div>
                        </div>
                        <div class="row border-bottom border-1">
                            <div  class="d-flex justify-content-evenly overflow-auto bg-light">
                                <button style="font-size: 1.1rem; color: #6e6e6e" class="btn btn-light btn-sm me-1 ">
                                    <i class="bi bi-pencil-square"></i>
                                </button>
                                <button style="font-size: 1.1rem; color: #6e6e6e" class="btn btn-light btn-sm me-1 ">
                                    <i class="bi bi-trash"></i>
                                </button>
                                <button style="font-size: 1.1rem; color: #6e6e6e" class="btn btn-light btn-sm">
                                    <i class="bi bi-easel2-fill"></i>
                                </button>
                            </div>
                        </div>
                    </div>-->
                </div>
            </div>
            <div class="col-8 col-xl-7 container-fluid p-0 bg-white">
                <div class="p-3 bg-light w-100">
                    <div class="row align-items-lg-baseline">
                        <div class="col-8">
                            <p class="bg-primary w-25 text-white p-3 text-center rounded-3">قيمة</p>
                        </div>
                        <div class="col-4 d-flex justify-content-end">
                            <p class="w-25 bg-orange p-1 rounded-1 text-white text-center me-2">دولي</p>
                            <p class="w-25 bg-orange p-1 rounded-1 text-white text-center me-2">سياسة</p>
                            <p class="w-25 bg-light shadow p-1 rounded-1 text-center">متقدم</p>
                        </div>
                    </div>
                </div>
                <div class="p-3 bg-white w-100">
                    <div class="case-hover border-secondary border-start rounded border-5">
                        <h4 class="lh-base text-justify p-2 pt-0 text-wrap">يرى هذا المجلس أن الحرب الروسية على أوكرانيا مبررة.</h4>
                    </div>
                </div>
                <div class="p-3 bg-white w-100">
                    <p class="text-justify lh-base">
                        هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها. ولذلك يتم استخدام طريقة لوريم إيبسوم لأنها تعطي توزيعاَ طبيعياَ -إلى حد ما- للأحرف عوضاً عن استخدام "هنا يوجد محتوى نصي، هنا يوجد محتوى نصي" فتجعلها تبدو (أي الأحرف) وكأنها نص مقروء. العديد من برامح النشر المكتبي وبرامح تحرير صفحات الويب تستخدم لوريم إيبسوم بشكل إفتراضي كنموذج عن النص، وإذا قمت بإدخال "lorem ipsum" في أي محرك بحث ستظهر العديد من المواقع الحديثة العهد في نتائج البحث. على مدى السنين ظهرت نسخ جديدة ومختلفة من نص لوريم إيبسوم، أحياناً عن طريق الصدفة، وأحياناً عن عمد كإدخال بعض العبارات الفكاهية إليها.
                    </p>
                </div>
                <div class="p-3 bg-white w-100">
                    <ul class="nav nav-tabs mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">نقاط مع المقولة</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link " id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">نقاط ضد المقولة</button>
                        </li>
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">

                            <div class="accordion" id="accordionExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                            Accordion Item #2
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            Accordion Item #2
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            Accordion Item #3
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--<section class="container glass border mb-3 p-4" style="margin-top: 150px">
        <h2 class="border-bottom pb-2">معلومات سريعة</h2>
        <div class="row p-3">
            <div class="col-12 col-lg-4 p-2">
                <div class="w-100 p-5 bg-purple bg-gradient bg-opacity-25 rounded d-flex justify-content-between align-items-center">
                    <h6 class="d-flex justify-content-center icon icon-purple mb-0">
                        320
                    </h6>
                    <div class="position-absolute" style="z-index: 0; font-size: 80px">
                        <i class="bi bi-sunrise-fill"></i>
                    </div>
                    <h5 class="text-center mb-0 text-white">زائر</h5>
                </div>
            </div>
            <div class="col-12 col-lg-4 p-2">
                <div class="w-100 p-5 bg-blue bg-gradient bg-opacity-25 rounded d-flex justify-content-between align-items-center">
                    <h6 class="d-flex justify-content-center icon icon-blue mb-0">
                        30
                    </h6>
                    <h5 class="text-center mb-0 text-white">طلب تسجيل</h5>
                </div>
            </div>
            <div class="col-12 col-lg-4 p-2">
                <div class="w-100 p-5 bg-orange bg-gradient bg-opacity-25 rounded d-flex justify-content-between align-items-center">
                    <h6 class="d-flex justify-content-center icon icon-orange mb-0">
                        190
                    </h6>
                    <h5 class="text-center mb-0 text-white">مقولة مفعلة</h5>
                </div>
            </div>
        </div>
    </section>
    <section class="container glass mb-5 border p-4">
        <h2 class="border-bottom pb-2">معلومات سريعة</h2>
        <div dir="rtl" class="row p-3">
            <div class="col-12">
                <table id="files_list" class="table table-striped dt-responsive  " style="width:100%">
                    <thead class="thead_dark">
                    <tr>
                        <th class="th_text">اسم المستخدم</th>
                        <th class="th_text">دور المستخدم</th>
                        <th class="th_text">الرقم الوظيفي</th>
                        <th class="th_text">تاريخ الالتحاق</th>
                        <th class="th_text">الادارة</th>
                        <th class="th_text">رابط الملف</th>
                        <th class="th_text">تحميل الملف</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>نزار المرزوقي</td>
                        <td>مصمم واب</td>
                        <td>456</td>
                        <td>11/09/2019</td>
                        <td>ادارة الانتاج</td>
                        <td>htp://www.devinshi.com</td>
                        <td>
                            <button class="btn btn-sm btn-download btn-info "> <i class="fas fa-arrow-circle-down"></i> </button>
                        </td>
                    </tr>
                    <tr>
                        <td>محدمد بن  المهدي</td>
                        <td>مبرمج</td>
                        <td>300</td>
                        <td>11/05/2017</td>
                        <td>ادارة الانتاج</td>
                        <td>htp://www.devinshi.com</td>
                        <td>
                            <button class="btn btn-sm btn-download btn-info "> <i class="fas fa-arrow-circle-down"></i> </button>
                        </td>
                    </tr>
                    <tr>
                        <td>نزار المرزوقي</td>
                        <td>مصمم واب</td>
                        <td>456</td>
                        <td>11/09/2019</td>
                        <td>ادارة الانتاج</td>
                        <td>htp://www.devinshi.com</td>
                        <td>
                            <button class="btn btn-sm btn-download btn-info "> <i class="fas fa-arrow-circle-down"></i> </button>
                        </td>
                    </tr>
                    <tr>
                        <td>دافنشي</td>
                        <td>محلل فني</td>
                        <td>406</td>
                        <td>11/09/2019</td>
                        <td>ادارة الانتاج</td>
                        <td>htp://www.devinshi.com</td>
                        <td>
                            <button class="btn btn-sm btn-download btn-info "> <i class="fas fa-arrow-circle-down"></i> </button>
                        </td>
                    </tr>
                    <tr>
                        <td>علي احمد</td>
                        <td>مدير</td>
                        <td>366</td>
                        <td>04/25/2015</td>
                        <td>ادارة الموارد البشرية</td>
                        <td>htp://www.devinshi.com</td>
                        <td>
                            <button class="btn btn-sm btn-download btn-info "> <i class="fas fa-arrow-circle-down"></i> </button>
                        </td>
                    </tr>
                    <tr>
                        <td>محمد السيد</td>
                        <td>مسوق</td>
                        <td>426</td>
                        <td>11/09/2019</td>
                        <td>ادارة التسويق</td>
                        <td>htp://www.devinshi.com</td>
                        <td>
                            <button class="btn btn-sm btn-download btn-info "> <i class="fas fa-arrow-circle-down"></i> </button>
                        </td>
                    </tr>
                    <tr>
                        <td>مالك جابر</td>
                        <td>خدمة العملاء</td>
                        <td>416</td>
                        <td>11/09/2019</td>
                        <td>ادارة الشحن</td>
                        <td>htp://www.devinshi.com</td>
                        <td>
                            <button class="btn btn-sm btn-download btn-info "> <i class="fas fa-arrow-circle-down"></i> </button>
                        </td>
                    </tr>
                    <tr>
                        <td>نزار المرزوقي</td>
                        <td>مصمم واب</td>
                        <td>456</td>
                        <td>11/09/2019</td>
                        <td>ادارة الانتاج</td>
                        <td>htp://www.devinshi.com</td>
                        <td>
                            <button class="btn btn-sm btn-download btn-info "> <i class="fas fa-arrow-circle-down"></i> </button>
                        </td>
                    </tr>
                    <tr>
                        <td>نزار المرزوقي</td>
                        <td>مصمم واب</td>
                        <td>456</td>
                        <td>11/09/2019</td>
                        <td>ادارة الانتاج</td>
                        <td>htp://www.devinshi.com</td>
                        <td>
                            <button class="btn btn-sm btn-download btn-info "> <i class="fas fa-arrow-circle-down"></i> </button>
                        </td>
                    </tr>
                    <tr>
                        <td>نزار المرزوقي</td>
                        <td>مصمم واب</td>
                        <td>456</td>
                        <td>11/09/2019</td>
                        <td>ادارة الانتاج</td>
                        <td>htp://www.devinshi.com</td>
                        <td>
                            <button class="btn btn-sm btn-download btn-info "> <i class="fas fa-arrow-circle-down"></i> </button>
                        </td>
                    </tr>
                    <tr>
                        <td>نزار المرزوقي</td>
                        <td>مصمم واب</td>
                        <td>456</td>
                        <td>11/09/2019</td>
                        <td>ادارة الانتاج</td>
                        <td>htp://www.devinshi.com</td>
                        <td>
                            <button class="btn btn-sm btn-download btn-info "> <i class="fas fa-arrow-circle-down"></i> </button>
                        </td>
                    </tr>
                    <tr>
                        <td>نزار المرزوقي</td>
                        <td>مصمم واب</td>
                        <td>456</td>
                        <td>11/09/2019</td>
                        <td>ادارة الانتاج</td>
                        <td>htp://www.devinshi.com</td>
                        <td>
                            <button class="btn btn-sm btn-download btn-info "> <i class="fas fa-arrow-circle-down"></i> </button>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
            <script src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap.min.js"></script>
            </div>
        </div>
    </section>-->


<script>
    $( document ).ready(function() {

        $.get("/admin/getCase",{},function (data,status) {

            $("#cases_get").html(data);

        })

    });

    $('.filter').on('click',function (){

        var type = $(this).data('text')

        $.post("/admin/getCaseFilter",{
            typr: type
        },function (data,status) {

            $("#cases_get").html(data);

        })
    });

    $( ".search-bar" ).change(function() {

         var search = $("[name='search']").val();

        $.post("/admin/getCaseSearch",{
            search: search
        },function (data,status) {

            $("#cases_get").html(data);

        })
    });

</script>
</body>
</html>
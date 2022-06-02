<?php
require_once("{$_SERVER['DOCUMENT_ROOT']}\php\Class\Case_.php");
require_once ("{$_SERVER['DOCUMENT_ROOT']}\php\api\conn.php");

$cases = new Case_();
?>
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
    <!--<link href="../../assets/bootstrap/dist/css/bootstrap.rtl.min.css" rel="stylesheet">-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.0/css/jquery.dataTables.css">
    <!-- JavaScript Bundle with Popper -->
    <script src="../../assets/jquery.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <!--<script src="../../assets/bootstrap/dist/js/bootstrap.bundle.min.js"></script>-->
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.0/js/jquery.dataTables.js"></script>
</head>
<body class="bio" dir="rtl">

<div class="d-xl-none d-xxl-none">
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
        <div class="col-2 d-none d-xl-block d-xxl-block border-end bg-white align-content-between">

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


            <div class="row ex3">
                <div class="col-12 ps-5 pe-5 border-bottom">
                    <div class="show row" data-id="">
                        <div class="col-12 ps-0 p-3 mb-0 mt-0 d-flex justify-content-between align-items-center">
                            <span class="p-3 me-5 ms-0 rounded-1 bg-blue" style="font-size: 3rem; color: #ffffff;">
                                <i class="bi bi-person-badge-fill"></i>
                            </span>
                            <div class=" w-100 ps-2 pe-4 pt-1" >
                                <p class="">
                                    علي خالد الزعيليك
                                </p>

                                <div  class="d-flex justify-content-between align-items-baseline">
                                    <p class="badge bg-orange text-end">
                                        مفعل
                                    </p>
                                    <button data-id="" class="edit-btn btn-font btn btn-light btn-sm me-1">
                                        <i class="bi bi-pencil-square"></i>
                                    </button>
                                    <button data-id="" class="delete btn-font btn btn-light btn-sm me-1">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 ps-5 pe-5 border-bottom">
                    <div class="show row" data-id="">
                        <div class="col-12 ps-0 p-3 mb-0 mt-0 d-flex justify-content-between align-items-center">
                            <span class="p-3 me-5 ms-0 rounded-pill bg-blue" style="font-size: 3rem; color: #ffffff;">
                                <i class="bi bi-person-badge-fill"></i>
                            </span>
                            <div class=" w-100 ps-2 pe-4 pt-1" >
                                <p class="">
                                    منصف الإدريسي
                                </p>

                                <div  class="d-flex justify-content-between align-items-baseline">
                                    <p class="badge bg-orange text-end">
                                        مفعل
                                    </p>
                                    <button data-id="" class="edit-btn btn-font btn btn-light btn-sm me-1">
                                        <i class="bi bi-pencil-square"></i>
                                    </button>
                                    <button data-id="" class="delete btn-font btn btn-light btn-sm me-1">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-8 col-xl-7 container-fluid p-0 bg-white">
            <div class="dash-mess"></div>
            <div class="dash-body"></div>
        </div>
    </div>
</section>

<button class="float btn btn-sm btn-primary rounded- add-new-user">
    إضافة مستخدم جديدة
</button>

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script>

    $( document ).ready(function() {

        console.log("Page Open...");

    });


    function clearSpase(){

        $(".dash-body").html("");
    }

    $('.add-new-case').on('click',function (){

        $.get("/admin/add-new-user",{},function (data,status) {

            $(".dash-body").html(data);

        })
    });

</script>

</body>
</html>
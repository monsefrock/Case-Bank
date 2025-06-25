<div class="w-100">
    <h3 class="bg-light mb-0 p-3 pb-0">تعديل القضية</h3>
    <form class="needs-validation mt-0" novalidate>
        <div class="d-flex justify-content-between border-bottom p-3 pb-0 bg-light align-items-baseline">
            <div class="">
                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">البيانات الرئيسية</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link " id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">البياتات المتقدمة</button>
                    </li>
                </ul>
            </div>
            <button class="btn btn-warning w-25 add-new-case" type="submit">تعديل البيانات</button>
        </div>

        <?php
            require_once("{$_SERVER['DOCUMENT_ROOT']}/php/Class/Case_.php");
            include "{$_SERVER['DOCUMENT_ROOT']}/php/api/conn.php";

            if($_SERVER['REQUEST_METHOD'] === 'POST')
            {

                $cases = new Case_();

                $result = $cases->getEditCases($conn,$_POST);

                foreach ($result as $get_result) {
                    $id = $get_result["id"];
                    $titel = $get_result["case_text"];
                    $cat = $get_result["case_m_cat"];
                    $sub = $get_result["case_s_cat"];
                    $diff = $get_result["case_difficulty"];
                    $type = $get_result["case_type"];

                    if($diff == 'عادي'){
                        $script = "$('#defic1').attr('checked','checked');";
                    }elseif ($diff == 'متوسط'){
                        $script = "$('#defic2').attr('checked','checked');";
                    }elseif ($diff == 'متقدم'){
                        $script = "$('#defic3').attr('checked','checked');";
                    }else{
                        $script = "";
                    }
                }

            }else{
                die("<h3 class='text-center text-danger' dir='rtl'>لا توجد بيانات لعرضها.</h3>");
            }

        ?>
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
                <div class="bg-white p-4">
                    <input type="hidden" name="case_id" id="id_case" value="<?php echo $id;?>">
                    <div class="mb-3">
                        <label for="case-text" class="form-label">نص القضية</label>
                        <textarea required name="case_text" class="form-control" id="case-text" minlength="25"><?php echo $titel;?></textarea>
                        <div class="invalid-feedback">
                            الرجاء إختيار أحد الخيارة
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="type" class="form-label">نوع القضية</label>
                        <select id="type" required name="type" class="form-select">
                            <?php
                            if(empty($type)){
                                echo "<option selected disabled value=''>الرجاء إختيار نوع القضية</option>";
                            }
                            ?>
                            <option value="خاصة">خاصة</option>
                            <option value="سياسات">سياسات</option>
                            <option value="قيم">قيم</option>
                            <option value="مساندة">مساندة</option>
                            <option value="ندم وتفضيل">ندم وتفضيل</option>
                        </select>
                        <div class="invalid-feedback">
                            الرجاء إختيار أحد الخيارة
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="cat" class="form-label">موضوع القضية</label>
                        <select id="cat" required name="cat" class="form-select group1">
                            <?php
                            if(empty($cat)){
                                echo "<option selected disabled value=''>الرجاء إختيار نوع القضية</option>";
                            }
                            ?>
                            <option value="اقتصاد">اقتصاد</option>
                            <option value="بيئة">بيئة</option>
                            <option value="تعليم">تعليم</option>
                            <option value="ثقافة">ثقافة</option>
                            <option value="حقوق وحريات">حقوق وحريات</option>
                            <option value="رياضة">رياضة</option>
                            <option value="سياسة">سياسة</option>
                            <option value="صحة">صحة</option>
                            <option value="فلسفة">فلسفة</option>
                            <option value="مجتمع">مجتمع</option>
                        </select>
                        <div class="invalid-feedback">
                            الرجاء إختيار أحد الخيارة
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="sub" class="form-label">موضوع القضية</label>
                        <select id="sub" name="sub" class="form-select group1">
                            <?php
                            if(empty($sub)){
                                echo "<option selected disabled value=''>الرجاء إختيار نوع القضية</option>";
                            }
                            ?>
                            <option value="اقتصاد">اقتصاد</option>
                            <option value="بيئة">بيئة</option>
                            <option value="تعليم">تعليم</option>
                            <option value="ثقافة">ثقافة</option>
                            <option value="حقوق وحريات">حقوق وحريات</option>
                            <option value="رياضة">رياضة</option>
                            <option value="سياسة">سياسة</option>
                            <option value="صحة">صحة</option>
                            <option value="فلسفة">فلسفة</option>
                            <option value="مجتمع">مجتمع</option>
                        </select>
                        <div class="invalid-feedback">
                            الرجاء إختيار أحد الخيارة
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label mb-3">مستوى القضية</label>
                        <div class="col-12 d-flex justify-content-between">
                            <div class="form-check">
                                <input required class="form-check-input group1" type="radio" name="difficulty" id="defic1" value="عادي">
                                <label class="form-check-label" for="defic1">
                                    عادي
                                </label>
                            </div>
                            <div class="form-check">
                                <input required class="form-check-input group1" type="radio" name="difficulty" id="defic2" value="متوسط">
                                <label class="form-check-label" for="defic2">
                                    متوسط
                                </label>
                            </div>
                            <div class="form-check">
                                <input required class="form-check-input group1" type="radio" name="difficulty" id="defic3" value="متقدم">
                                <label class="form-check-label" for="defic3">
                                    متقدم
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">
                <div class="bg-white p-2">
                    <?php
                        $result1 = $cases->getContent($conn,$_POST);

                        foreach ($result1 as $get_result1) {

                            $content = $get_result1["content"];
                            $flage = false;
                        }
                        if(empty($content)){
                            $flage = true;
                            $content = "لاتوجد بيانات في التمهيد.";
                        }
                    ?>
                    <div class="card p-2 pt-0 border-0 rounded-0 border-bottom">
                        <div class="d-flex justify-content-between p-3 pb-0 align-items-baseline">
                            <h4>تمهيد القضية</h4>
                        </div>
                        <div class="card-body">
                            <textarea rows="8" name="content_case" placeholder="<?php if($flage){ echo $content;} ?>" class="form-control"><?php if(!$flage){ echo $content;} ?></textarea>
                        </div>
                    </div>

                    <div class="card p-2 mt-2 border-0 rounded-0">
                        <div class="d-flex justify-content-between p-3 align-items-baseline">
                            <h4>جدول الحجج</h4>
                            <a class="btn btn-dda w-25 btn-sm add-new-advance" data-bs-toggle="modal" data-bs-target="#exampleModal">إضافة </a>
                        </div>

                        <div class="card-body">
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">العنوان</th>
                                    <th scope="col">النوع</th>
                                    <th scope="col">العملية</th>
                                </tr>
                                </thead>
                                <tbody class="table-group-divider" id="messgtable">
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </form>
</div>

<div class="modal fade" tabindex="-1" id="exampleModal">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">إضافة نقاط القضية</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="adv_form" novalidate>

                    <div id="setMess"></div>

                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">العنوان</label>
                        <div class="col-sm-10">
                            <input required type="text" name="titel_point" class="form-control" id="inputEmail3">
                            <div class="invalid-feedback">
                                الرجاء تعبئة الحقل
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputEmail4" class="col-sm-2 col-form-label">العنوان</label>
                        <div class="col-sm-10">
                            <select required id="inputEmail4" name="type_point" class="form-select">
                                <option selected disabled value=''>الرجاء إختيار نوع الحجة</option>
                                <option value="0">حجة موالاة</option>
                                <option value="1">حجة معارضة</option>
                            </select>
                            <div class="invalid-feedback">
                                الرجاء إختيار أحد الخيارة
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputContent" class="col-sm-2 col-form-label">المحتوى</label>
                        <div class="col-sm-10">
                            <textarea required class="form-control" name="conte_point" id="inputContent"></textarea>
                            <div class="invalid-feedback">
                               الرجاء تعبئة الحقل
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-success btn-sm mb-2 w-100">حفظ البيانات</button>
                </form>
                <div class="modal-footer">
                    <button type="button close-btn" class="btn btn-secondary" data-bs-dismiss="modal">إغلاق</button>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" tabindex="-1" id="exampleModal2">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">تعديل نقاط القضية</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div id="editPoint">

                </div>
                <div class="modal-footer">
                    <button type="button close-btn" class="btn btn-secondary" data-bs-dismiss="modal">إغلاق</button>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $( document ).ready(function() {

        $("#type option[value='<?php echo $type;?>']").attr("selected","selected");
        $("#cat option[value='<?php echo $cat;?>']").attr("selected","selected");
        $("#sub option[value='<?php echo $sub;?>']").attr("selected","selected");
        <?php echo $script;?>
        getadvnc();
    });

    function getadvnc(){

        var id = $("#id_case").val();

        $.post("/admin/getAdv",{
            case_id:id
        },function (data,status) {

            $("#messgtable").html(data);

        })

    }

    $('.needs-validation').submit(function (event) {
        event.preventDefault();
        if ($('.needs-validation')[0].checkValidity() === false) {
            event.stopPropagation();
        }
        else {

            var diff = $("[name='difficulty']:checked").val();
            var case_id = $("#id_case").val();
            var case_text = $("[name='case_text']:enabled").val();
            var type = $("[name='type']:enabled").val();
            var cat = $("[name='cat']:enabled").val();
            var sub = $("[name='sub']:enabled").val();
            var content_case = $("[name='content_case']:enabled").val();

            $.post("/admin/updateCase",{
                case_text:case_text,
                difficulty: diff,
                cat: cat,
                sub: sub,
                case_id: case_id,
                content_case: content_case,
                type: type
            },function (data,status) {

                if(data == "1"){

                    $(".dash-mess").html("<div class='alert alert-success alert-dismissible fade show rounded-0 mb-0' role='alert'>\n" +
                        "  <strong>نجاح </strong> عملية التحديث" +
                        "  <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>\n" +
                        "</div>");

                }else{
                    $(".dash-mess").html("<div class='alert alert-danger alert-dismissible fade show rounded-0 mb-0' role='alert'>\n" +
                        "  <strong>فشل </strong> عملية التحديث" +
                        "  <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>\n" +
                        "</div>");
                }

            })

        }
        $('.needs-validation').addClass('was-validated');
    });

    $('.adv_form').submit(function (event) {

            event.preventDefault();
            if ($('.adv_form')[0].checkValidity() === false) {
                event.stopPropagation();
            }
            else {

                var titel_point = $("[name='titel_point']:enabled").val();
                var type_point = $("[name='type_point']:enabled").val();
                var conte_point = $("[name='conte_point']:enabled").val();
                var id = $("#id_case").val();

                $.post("/admin/setPoint",{
                    titel_point:titel_point,
                    type_point: type_point,
                    conte_point: conte_point,
                    id: id
                },function (data,status) {

                    if (data == 'true'){

                        getadvnc();

                    }else {

                        $("#setMess").html("<div class='alert m-5 alert-danger alert-dismissible fade show' role='alert'>\n" +
                            "  <strong>فشل </strong> عملية الإدخال" +
                            "  <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>\n" +
                            "</div>");

                    }
                })

            }


        $('.adv_form').addClass('was-validated');
    });


</script>


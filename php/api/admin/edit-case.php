<div class="p-3 bg-light w-100 border-bottom">
    <h3>تعديل قضية</h3>
</div>
<div class="p-4 bg-white w-100">
    <div class="row align-items-lg-baseline">
        <form class="needs-validation" novalidate>
            <div class="mb-3">
                <label for="case-text" class="form-label">نص القضية</label>
                <textarea required name="case_text" class="form-control" id="case-text" minlength="25"></textarea>
            </div>

            <div class="mb-3">
                <label for="type" class="form-label">نوع القضية</label>
                <select id="type" required name="type" class="form-select">
                    <option selected disabled value="">الرجاء إختيار نوع القضية</option>
                    <option value="خاصة">خاصة</option>
                    <option value="سياسات">سياسات</option>
                    <option value="قيم">قيم</option>
                    <option value="مساندة">مساندة</option>
                    <option value="ندم وتفضيل">ندم وتفضيل</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="cat" class="form-label">موضوع القضية</label>
                <select id="cat" required name="cat" class="form-select group1">
                    <option selected disabled value="">الرجاء إختيار تصنيف للقضية رئيسي</option>
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
            </div>

            <div class="mb-3">
                <label for="sub" class="form-label">موضوع القضية</label>
                <select id="sub" name="sub" class="form-select group1">
                    <option selected disabled value="">الرجاء إختيار تصنيف للقضية فرعي</option>
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

            <button class="btn btn-dda w-75 add-new-case" type="submit">إرسال البيانات</button>
        </form>
    </div>
</div>

<script>

    /*$('.needs-validation').submit(function (event) {
        event.preventDefault();
        if ($('.needs-validation')[0].checkValidity() === false) {
            event.stopPropagation();
        } else {

            var diff = $("[name='difficulty']:checked").val();
            var case_text = $("[name='case_text']:enabled").val();
            var type = $("[name='type']:enabled").val();
            var cat = $("[name='cat']:enabled").val();
            var sub = $("[name='sub']:enabled").val();

            $.post("/admin/setCase",{
                case_text:case_text,
                difficulty: diff,
                cat: cat,
                sub: sub,
                type: type
            },function (data,status) {

                if(data == "true"){

                    $(".dash-body").html("<div class='alert m-5 alert-success alert-dismissible fade show' role='alert'>\n" +
                        "  <strong>نجاح </strong> عملية الإدخال" +
                        "  <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>\n" +
                        "</div>");

                }else {
                    $(".dash-body").html("<div class='alert m-5 alert-danger alert-dismissible fade show' role='alert'>\n" +
                        "  <strong>فشل </strong> عملية الإدخال" +
                        "  <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>\n" +
                        "</div>");
                }

            })

        }
        $('.needs-validation').addClass('was-validated');
    });*/
</script>


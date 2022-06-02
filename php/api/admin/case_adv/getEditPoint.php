<?php
    require_once("{$_SERVER['DOCUMENT_ROOT']}\php\Class\Case_.php");
    include "{$_SERVER['DOCUMENT_ROOT']}\php\api\conn.php";

    if($_SERVER['REQUEST_METHOD'] === 'POST')
    {
        $cases = new Case_();

        $result = $cases->getPoint($conn,$_POST);

        foreach ($result as $get_result) {
            $id = $get_result["id"];
            $titel = $get_result["titel"];
            $type = $get_result["type"];
            $content = $get_result["discription"];
        }

    }
?>
<form class="adv_form_update" novalidate>

    <div id="up_setMess"></div>
    <input type="hidden" name="u_point_id" value="<?php echo $id;?>">
    <div class="row mb-3">
        <label for="inputEmail3" class="col-sm-2 col-form-label">العنوان</label>
        <div class="col-sm-10">
            <input required type="text" name="u_titel_point" class="form-control" id="inputEmail3" value="<?php echo $titel;?>">
            <div class="invalid-feedback">
                الرجاء تعبئة الحقل
            </div>
        </div>
    </div>
    <div class="row mb-3">
        <label for="inputEmail4" class="col-sm-2 col-form-label">العنوان</label>
        <div class="col-sm-10">
            <select required id="inputEmail4" name="u_type_point" class="form-select">
                <?php
                if(empty($type)){
                    echo "<option selected disabled value=''>الرجاء إختيار نوع الحجة</option>";
                }
                ?>
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
            <textarea required class="form-control" name="u_conte_point" id="inputContent"><?php echo $content;?></textarea>
            <div class="invalid-feedback">
                الرجاء تعبئة الحقل
            </div>
        </div>
    </div>

    <button type="submit" class="btn btn-success btn-sm mb-2 w-100">حفظ البيانات</button>
</form>
<script>
    $( document ).ready(function() {

        $("#inputEmail4 option[value='<?php echo $type;?>']").attr("selected","selected");

    });

    $('.adv_form_update').submit(function (event) {
        event.preventDefault();
        if ($('.adv_form_update')[0].checkValidity() === false) {
            event.stopPropagation();
        }else {

            var id = $("[name='u_point_id']:enabled").val();
            var titel_point = $("[name='u_titel_point']:enabled").val();
            var type_point = $("[name='u_type_point']:enabled").val();
            var conte_point = $("[name='u_conte_point']:enabled").val();

            $.post("/admin/updatePoint",{
                titel_point:titel_point,
                type_point: type_point,
                conte_point: conte_point,
                point_id: id
            },function (data,status) {

                if (data == '1'){

                    getadvnc();
                    $("#up_setMess").html("<div class='alert alert-success alert-dismissible fade show' role='alert'>\n" +
                        "  <strong>تمت </strong> عملية التعديل" +
                        "  <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>\n" +
                        "</div>");

                }else {

                    $("#up_setMess").html("<div class='alert alert-danger alert-dismissible fade show' role='alert'>\n" +
                        "  <strong>فشل </strong> عملية التعديل" +
                        "  <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>\n" +
                        "</div>");

                }
            })
        }

        $('.adv_form_update').addClass('was-validated');
    });
</script>

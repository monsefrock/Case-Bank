<?php
require_once("{$_SERVER['DOCUMENT_ROOT']}/php/Class/User.php");
include "{$_SERVER['DOCUMENT_ROOT']}/php/api/conn.php";

if($_SERVER['REQUEST_METHOD'] === 'POST'){

    if(!empty($_POST))
    {
        $user = new User();

        $resulte = $user->getUser_($conn, $_POST["user_id"]);
        if (!empty($resulte)){

            foreach ($resulte as $use){

                $id = $use["id"];
                $name = $use["name"];
                $email = $use["email"];
                $state = $use["state"];
            }
        }else{
            echo "<h1>فارغ</h1>";
        }

    }
}
?>


<div class="w-100">
    <form class="needs-validation" novalidate>
        <div class="d-flex justify-content-between border-bottom p-3 bg-light">
            <h3>تحديث بيانات مستخدم</h3>
            <button class="btn btn-warning w-25 add-new-case" type="submit">تحديث البيانات</button>
        </div>
        <input type="hidden" name="user_id" value="<?php echo $id;?>">
        <div class="bg-white p-4">
            <div class="mb-3">
                <label for="user-name" class="form-label">اسم المستخدم</label>
                <input value="<?php echo $name;?>" required type="text" id="user-name" name="user-name" class="form-control" placeholder="يتكون الإسم من خانتان فقط مثال (محمد علي).">
            </div>
            <div class="mb-3">
                <label for="user-email" class="form-label">البريد الإلكتبوني</label>
                <input disabled value="<?php echo $email;?>" required type="email" id="user-email" name="user-email" class="form-control" placeholder="sample@dda.ly">
            </div>

            <div class="mb-3">
                <label for="state" class="form-label">حالة المستخدم</label>
                <select class="form-select" name="state" id="state">
                    <option value="1">مفعل</option>
                    <option value="0">غير مفعل</option>
                </select>
            </div>

            <label for="user-password" class="form-label text-danger">كلمة المرور الجديدة</label>
            <div class="input-group mb-3">
                <button class="btn btn-outline-secondary getNewPass" type="button" id="button-addon1">
                    <i class="bi bi-arrow-clockwise"></i>
                </button>
                <input type="text" id="user-password" name="user-password" class="form-control text-danger" rel="gp" data-size="12" data-character-set="0-9,a-z,A-Z">
            </div>
            <p>لا يمكن استرجاع كلمة المرور القديمة يمكنك اعادة تعيين كلمة مرور جديدة فقط.</p>
            <p>في حالة أردت تحديث البيانات فقط يرجى ترك خانة الرمز السري فارغة حتى تتمكن من تعديل البيانات. وفي حالة أردت تعديل الرمز السري تأكد من أن جميع الخانات معبئة.</p>
        </div>
    </form>
</div>

<script>
    $( document ).ready(function() {

        $("#state option[value='<?php echo $state;?>']").attr("selected","selected");
    });

    $('.needs-validation').submit(function (event) {
        event.preventDefault();
        if ($('.needs-validation')[0].checkValidity() === false) {
            event.stopPropagation();
        } else {

            var id = $("[name='user_id']:enabled").val();
            var name = $("[name='user-name']:enabled").val();
            var password = $("[name='user-password']:enabled").val();
            var state = $("[name='state']:enabled").val();

            $.post("/api/editUser",{
                state:state,
                id: id,
                name: name,
                password: password
            },function (data,status) {

                getUsers();
                $(".dash-mess").html("<div class='m-0 rounded-0 alert alert-info alert-dismissible fade show' role='alert'>" +
                    data +
                    "<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>" +
                    "</div>");


            })

        }
        $('.needs-validation').addClass('was-validated');
    });


    // Generate a password string
    function randString(id){

        var dataSet = $(id).attr('data-character-set').split(',');
        var possible = '';
        if($.inArray('a-z', dataSet) >= 0){
            possible += 'abcdefghijklmnopqrstuvwxyz';
        }
        if($.inArray('A-Z', dataSet) >= 0){
            possible += 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        }
        if($.inArray('0-9', dataSet) >= 0){
            possible += '0123456789';
        }
        if($.inArray('#', dataSet) >= 0){
            possible += '![]{}()%&*$#^<>~@|';
        }
        var text = '';
        for(var i=0; i < $(id).attr('data-size'); i++) {
            text += possible.charAt(Math.floor(Math.random() * possible.length));
        }
        return text;

    }

    // Create a new password
    $(".getNewPass").click(function(){
        var field = $(this).closest('div').find('input[rel="gp"]');
        field.val(randString(field));
    });

    // Auto Select Pass On Focus
    $('input[rel="gp"]').on("click", function () {
        $(this).select();
    });



</script>


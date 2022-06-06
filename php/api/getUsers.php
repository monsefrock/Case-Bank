<?php

if (isset($_SESSION['loggedin']) and $_SESSION['loggedin'] == TRUE){

    require_once("{$_SERVER['DOCUMENT_ROOT']}\php\Class\User.php");
    include "{$_SERVER['DOCUMENT_ROOT']}\php\api\conn.php";

    $user = new User();

    $result = $user->getUsers($conn);

    foreach ($result as $user_){
        if($user_["state"] == 1){
            $state = "مفعل";
        }else{
            $state = "غير مفعل";
        }
        echo '<div class="col-12 ps-5 pe-5 border-bottom">
                    <div class="show row " data-id="">
                        <div class="col-12 ps-0 p-3 mb-0 mt-0 d-flex justify-content-between align-items-center">
                            <span class="p-3 me-5 ms-0 rounded-1 bg-blue" style="font-size: 3rem; color: #ffffff;">
                                <i class="bi bi-person-badge-fill"></i>
                            </span>
                            <div class=" w-100 ps-2 pe-4 pt-1" >
                                <p class="">
                                    '.$user_["name"].'
                                </p>

                                <div  class="d-flex justify-content-between align-items-baseline">
                                    <p class="badge bg-orange text-end">
                                        '.$state.'
                                    </p>
                                    <button data-id="'.$user_["id"].'" class="edit-btn btn-font btn btn-light btn-sm me-1">
                                        <i class="bi bi-pencil-square"></i>
                                    </button>
                                    <button data-id="'.$user_["id"].'" class="delete-btn btn-font btn btn-light btn-sm me-1">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>';
    }

    echo '<script>
        $(".edit-btn").on("click",function (){
            
            var id = $(this).data("id");
            $.post("/admin/edit-user",
            {
                user_id:id
            },
            function (data,status) {

                $(".dash-body").html(data);

            })
        });
        
        $(".delete-btn").click(function (event) {

        var id = $(this).data("id");

        if (confirm("هل تريد حذف المستخدم بالفعل؟")) {

            $.post("/admin/deleteUser",{
                user:id
            },function (data,status) {
                
                if (data == "nm0"){
                    
                    alert("لا يمكن حذف أخر مستخدم في النظام.");
                    return;
                }
                
                if (data == "1"){
                    
                    getUsers();
                    alert("تمت عملية الحذف بنجاح");
                    clearSpase();

                }else {
                    alert("هناك خطء في عملية الحذف ....");
                }
                

            })



        } else {

            alert("لم تتم عملية الحذف .....");
        }


    });
        
    </script>';
}



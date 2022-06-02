<?php
    require_once("{$_SERVER['DOCUMENT_ROOT']}/php/Class/Case_.php");
    include "{$_SERVER['DOCUMENT_ROOT']}/php/api/conn.php";

    if($_SERVER['REQUEST_METHOD'] === 'POST'){

        if(!empty($_POST))
        {
            $cases = new Case_();

            $result = $cases->getPoints($conn,$_POST);

            if(!empty($result)){

                $i = 1;
                foreach ($result as $point)
                {
                    $id = $point['id'];
                    $case_id = $point['case_id'];
                    $titel = $point["titel"];
                    $type = $point["type"];

                    if ($type == 1){
                        $cont_c = "حجة موالاة";
                        $color = "bg-warning";
                    }else{
                        $cont_c = "حجة معارضة";
                        $color = "bg-primary";
                    }

                    echo '<tr>
                            <th scope="row">'.$i.'</th>
                            <td>
                               '.$titel.'
                            </td>
                            <td>
                                <p class="badge '.$color.' ">'.$cont_c.'</p>
                            </td>
                            <td>
                                <div class="d-flex justify-content-evenly overflow-auto">
                                    <a data-id="'.$id.'" class="edit-btn-adv btn-font btn btn-sm me-1 " data-bs-toggle="modal" data-bs-target="#exampleModal2">
                                        <i class="bi bi-pencil-square"></i>
                                    </a>
                                    <a data-id="'.$id.'" class="delete-btn-adv btn-font btn btn-sm me-1 ">
                                        <i class="bi bi-trash"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>';
                    $i++;
                }

            }else{

                echo "<h4>لا توجد بيانات ......</h4>";

            }
        }
    }else{

        die("مسار مسدود .......");
    }
?>
<script>
    $('.edit-btn-adv').click(function (event) {

        var id = $(this).data("id");

        $.post("/admin/getEditAdv",{
            point_id:id
        },function (data,status) {

            $("#editPoint").html(data);

        })

    });

    $('.delete-btn-adv').click(function (event) {

        var id = $(this).data("id");

        if (confirm('هل تريد حذف النقطة بالفعل؟')) {

            $.post("/admin/deletPoint",{
                point_id:id
            },function (data,status) {

                if (data == "1"){

                    alert('تمت عملية الحذف بنجاح');
                    getadvnc();

                }else {
                    $("#setMess").html(data);
                    alert('هناك خطء في عملية الحذف ....');
                }

            })



        } else {

            alert('لم تتم عملية الحذف .....');
        }


    });
</script>

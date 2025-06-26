<?php

require_once("{$_SERVER['DOCUMENT_ROOT']}/php/bootstrap.php");

use App\Models\CaseModel;

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: /error');
    exit();
}

if (empty($_POST)) {
    echo "<h3 class='text-center text-danger' dir='rtl'>لا توجد بيانات لعرضها.</h3>";
    return;
}

$type = $_POST['type'] ?? null;

if ($type === null) {
    echo "<h3 class='text-center text-danger' dir='rtl'>لا توجد بيانات للعرض.</h3>";
    return;
}

$results = CaseModel::getCasesAllFilter($type);

if (empty($results)) {
    echo "<h3 class='text-center text-danger' dir='rtl'>لا توجد بيانات لعرضها.</h3>";
    return;
}

foreach ($results as $case) {
    $color = $case['case_type'];

    $css = match ($color) {
        'قيم' => 'border-primary',
        'سياسات' => 'border-success',
        'مساندة' => 'border-warning',
        'ندم وتفضيل' => 'border-secondary',
        'خاصة' => 'border-danger',
        default => 'border-primary',
    };

    echo '
    <div class="col-12 border-end border-3 ' . $css . '">
        <div class="show row" data-id="' . $case["id"] . '">
            <div class="col-12 p-2 pb-0 mb-1">
                <p class="text-justify">' . $case["case_text"] . '</p>
                <div class="d-flex justify-content-end mt-2">
                    <span class="badge bg-primary bg-opacity-50 ms-3">' . $case["case_m_cat"] . '</span>
                    <span class="badge bg-primary bg-opacity-50">' . $case["case_s_cat"] . '</span>
                </div>
            </div>
        </div>
        <div class="row border-bottom border-1">
            <div class="d-flex justify-content-evenly overflow-auto bg-light">
                <button data-id="' . $case["id"] . '" class="edit-btn btn-font btn btn-light btn-sm me-1">
                    <i class="bi bi-pencil-square"></i>
                </button>
                <button data-id="' . $case["id"] . '" class="delete btn-font btn btn-light btn-sm me-1">
                    <i class="bi bi-trash"></i>
                </button>
            </div>
        </div>
    </div>';
}

echo <<<SCRIPT
<script>
    $(".edit-btn").on("click", function () {
        const id = $(this).data("id");
        $.post("/admin/edit-new-s", { case_id: id }, function (data) {
            $(".dash-body").html(data);
        });
    });

    $(".show").on("click", function () {
        const id = $(this).data("id");
        $.post("/admin/showCase", { case_id: id }, function (data) {
            $(".dash-body").html(data);
        });
    });

    $(".delete").click(function () {
        const id = $(this).data("id");
        if (confirm("هل تريد حذف النقطة بالفعل؟")) {
            $.post("/admin/deleteCase", { case_id: id }, function (data) {
                if (data == "1") {
                    getCases();
                    alert("تمت عملية الحذف بنجاح");
                    clearSpase();
                } else {
                    $("#dash-mess").html(data);
                    alert("هناك خطأ في عملية الحذف ....");
                }
            });
        } else {
            alert("لم تتم عملية الحذف .....");
        }
    });
</script>
SCRIPT;

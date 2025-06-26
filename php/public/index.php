<?php
    require_once("{$_SERVER['DOCUMENT_ROOT']}/php/bootstrap.php");
    use App\Models\CaseModel;
?>
<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>بنك القضايا | الرئيسية </title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="../../assets/main.css">
</head>
<body class="min-h-screen bg-gradient-to-br from-blue-50 to-purple-100 font-[Tajawal]" dir="rtl">
<?php include __DIR__.'/components/header.php'; ?>
<?php include __DIR__.'/components/toast.php'; ?>
<div class="max-w-4xl mx-auto bg-white shadow rounded mt-6 p-6 space-y-6">
    <?php include __DIR__.'/components/case-results.php'; ?>
    <?php include __DIR__.'/components/filter-form.php'; ?>
</div>
<?php include __DIR__.'/components/scripts.php'; ?>
</body>
</html>

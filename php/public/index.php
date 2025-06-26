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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@600&display=swap" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap' rel='stylesheet'>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
@keyframes spin-slow{from{transform:rotate(0deg);}to{transform:rotate(360deg);}}
.spin-slow{animation:spin-slow 20s linear infinite;}
    </style>
    <link rel="stylesheet" href="../../assets/main.css">
</head>
<body class="min-h-screen bg-gradient-to-br from-blue-50 to-purple-100 font-[Cairo]" dir="rtl">
<?php include __DIR__.'/components/header.php'; ?>
<?php include __DIR__.'/components/toast.php'; ?>
<section class='relative overflow-hidden text-center py-24'>
    <div aria-hidden='true' class='absolute -top-32 -left-32 w-96 h-96 bg-gradient-to-tr from-blue-200 to-purple-200 opacity-30 rounded-full filter blur-3xl'></div>
    <div aria-hidden='true' class='absolute bottom-0 right-0 w-96 h-96 bg-gradient-to-br from-purple-200 to-blue-200 opacity-30 rounded-full filter blur-3xl'></div>
    <div class='relative z-10 max-w-2xl mx-auto px-6 py-16 bg-white/30 backdrop-blur-md rounded-xl shadow-lg'>
        <img src='../../assets/img/og1logo.png' alt='Studio Logo' class='mx-auto w-28 md:w-36 mb-6 spin-slow'>
        <h1 class='text-4xl md:text-5xl font-bold text-gray-800 mb-2 font-['Montserrat',sans-serif]'>Unleash Motion</h1>
        <h2 class='text-3xl md:text-4xl font-bold text-gray-700 mb-6 font-['Cairo',sans-serif]'>أطلق الإبداع المتحرك</h2>
        <a href='#' class='inline-block px-8 py-3 rounded-full bg-blue-600 text-white hover:bg-blue-700 hover:shadow-lg transform hover:-translate-y-1 transition'>Start the Journey</a>
    </div>
    <div class='absolute bottom-4 left-1/2 -translate-x-1/2 animate-bounce text-gray-600'>
        <svg class='w-6 h-6' fill='none' stroke='currentColor' stroke-width='2' viewBox='0 0 24 24' xmlns='http://www.w3.org/2000/svg'><path stroke-linecap='round' stroke-linejoin='round' d='M19 9l-7 7-7-7'/></svg>
    </div>
</section>
<div class="max-w-4xl mx-auto bg-white shadow rounded mt-6 p-6 space-y-6">
    <?php include __DIR__.'/components/case-results.php'; ?>
    <?php include __DIR__.'/components/filter-form.php'; ?>
</div>
<?php include __DIR__.'/components/scripts.php'; ?>
</body>
</html>

<?php

require_once("{$_SERVER['DOCUMENT_ROOT']}/router.php");



get('/','php/public/index.php');
get('/login','php/public/login.html');

post('/getCase','php/api/getCase.php');
post('/logCase','php/api/logCase.php');
get('/csvSet' , 'php/api/csv_setCase.php');

get('/dashboard' , 'php/admin/home.html');
/*get('/login','auth/index.php');
get('/register','auth/register.php');


post('/api/login','auth/api/login.php');
post('/api/register','auth/api/register.php');
post('/api/email','auth/api/email.php');*/


// For GET or POST
// The 404.php which is inside the views folder will be called
// The 404.php has access to $_GET and $_POST
any('/404','error/404.html');
/*get('/not-authorized','error/not-authorized.html');*/

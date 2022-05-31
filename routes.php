<?php

require_once("{$_SERVER['DOCUMENT_ROOT']}/router.php");



get('/','php/public/index.php');
get('/login','php/public/login.html');

post('/getCase','php/api/getCase.php');
post('/logCase','php/api/logCase.php');
get('/csvSet' , 'php/api/csv_setCase.php');

get('/dashboard' , 'php/admin/home.php');
get('/admin/getCase' , 'php/api/admin/getCase.php');

get('/admin/add-new-case' , 'php/api/admin/add-new-case.html');
post('/admin/setCase' , 'php/api/admin/setCase.php');
post('/admin/updateCase' , 'php/api/admin/updateCase.php');

post('/admin/deleteCase' , 'php/api/admin/deleteCase.php');

post('/admin/showCase' , 'php/api/admin/showCase.php');

post('/admin/edit-new-s' , 'php/api/admin/edit-case.php');
post('/admin/getAdv' , 'php/api/admin/case_adv/getAdv.php');
post('/admin/setPoint' , 'php/api/admin/case_adv/setPoint.php');

post('/admin/getEditAdv' , 'php/api/admin/case_adv/getEditPoint.php');
post('/admin/deletPoint' , 'php/api/admin/case_adv/deletPoint.php');
post('/admin/updatePoint' , 'php/api/admin/case_adv/updatePoint.php');

post('/admin/getCaseFilter' , 'php/api/admin/getCaseFilter.php');
post('/admin/getCaseSearch' , 'php/api/admin/getCaseSearch.php');
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

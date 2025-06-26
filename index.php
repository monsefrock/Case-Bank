<?php

require_once("{$_SERVER['DOCUMENT_ROOT']}/router.php");



get('/','php/public/index.php');
get('/login','php/public/login.html');

post('/getCase','php/api/getCase.php');
post('/logCase','php/api/logCase.php');
get('/csvSet' , 'php/api/csv_setCase.php');

get('/dashboard' , 'php/admin/home.php');
get('/dashboard/users' , 'php/admin/users.php');

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

post('/admin/filterCases' , 'php/api/admin/filterCases.php');
post('/admin/getCaseSearch' , 'php/api/admin/getCaseSearch.php');

get('/admin/add-new-user' , 'php/api/login/new-user.html');
post('/admin/deleteUser' , 'php/api/deleteUser.php');
post('/admin/edit-user' , 'php/api/login/edit-user.php');
get('/admin/getUsers' , 'php/api/getUsers.php');
post('/api/editUser' , 'php/api/editUser.php');
post('/api/newUser' , 'php/api/login/newUser.php');
post('/api/login' , 'php/api/login/login.php');

get('/logout' , 'php/api/logout.php');

/*get('/login','auth/index.php');
get('/register','auth/register.php');


post('/api/login','auth/api/newUser.php');
post('/api/register','auth/api/register.php');
post('/api/email','auth/api/email.php');*/


// For GET or POST
// The 404.php which is inside the views folder will be called
// The 404.php has access to $_GET and $_POST
any('/404','error/404.html');
/*get('/not-authorized','error/not-authorized.html');*/

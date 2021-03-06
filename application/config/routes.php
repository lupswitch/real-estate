<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


// $appended_lang = "(?:[a-zA-Z]{2}/?)?"; 
// $prepended_lang = "(?:[a-zA-Z]{2}/)?"; 
// $route["$appended_lang"] = "home";
$route['default_controller'] = "home";


$route['404_override'] = '';








$route['admin'] = 'admin';
$route['admin/script'] = 'admin/script';
$route['admin/users'] = 'admin/users';
$route['admin/projects'] = 'admin/projects';
$route['admin/alert'] = 'admin/checkPropertyAlert';
$route['admin/content'] = 'admin/content';
$route['admin/social'] = 'admin/social';
$route['admin/offices'] = 'admin/offices';
$route['admin/offices/new'] = 'admin/newOffice';
$route['admin/content/new'] = 'admin/addContent';
$route['admin/deletecontent/(:any)'] = 'admin/deleteContent';
$route['admin/editcontent/(:any)'] = 'admin/editContent';

$route['admin/newsletter/create'] = 'admin/createNewsletter';

$route['admin/deleteprojectimage'] = 'admin/deleteprojectimage';
$route['admin/deletesociallink'] = 'admin/deletesociallink';
$route['admin/deleteunitimage'] = 'admin/deleteunitimage';
$route['admin/addprojectimage/(:any)'] = 'admin/addprojectimage';
$route['admin/addunitimage/(:any)'] = 'admin/addunitimage';
$route['admin/changelogo/(:any)'] = 'admin/changelogo';


$route['admin/sendall'] = 'admin/newsletterSend';


$route['admin/unitNameValidation'] = 'admin/unitNameValidation';
$route['admin/projectSelected'] = 'admin/projectSelected';




$route['admin/properties'] = 'admin/properties';
$route['admin/propertyalert'] = 'admin/propertyalert';
$route['admin/newsletter'] = 'admin/newsletter';
$route['admin/auctions'] = 'admin/auction';
$route['admin/courses'] = 'admin/courses';
$route['admin/courses/new'] = 'admin/newCourse';
$route['admin/units/new'] = 'admin/newUnit';
$route['admin/courses/(:any)'] = 'admin/showCourse';
$route['admin/offices/(:any)'] = 'admin/showOffice';
$route['admin/units/(:any)'] = 'admin/showUnit';

$route['admin/auctions/new'] = 'admin/NewAuction';
$route['admin/vacancies/new'] = 'admin/NewVacancy';
$route['admin/vacancies'] = 'admin/vacancies';
$route['admin/units'] = 'admin/units';
$route['admin/auctions/(:any)'] = 'admin/showAuction';
$route['admin/properties/(:any)'] = 'admin/showProperty';
$route['admin/vacancies/download/(:any)'] = 'admin/downloadcv';
$route['admin/vacancies/(:any)'] = 'admin/showVacancy';
$route['admin/projects/(:any)'] = 'admin/showProject';

$route['admin/users/new'] = 'admin/createUser';
$route['admin/projects/new'] = 'admin/createProject';
$route['admin/social/new'] = 'admin/addSocialLink';
$route['admin/editsocial/(:any)'] = 'admin/editSocialLink';
$route['admin/checkpasswordchange.php'] = 'admin/checkpasswordchange';
$route['admin/users/(:any)'] = "admin/userProfile";





$route['home'] = 'home';
$route['contact'] = 'home/contact';
$route['findyourhome'] = 'home/findyourhome';
$route['unit/(:any)'] = 'home/unit';
$route['project/(:any)'] = 'home/project';












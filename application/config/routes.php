<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//
//Admission Portal


$route['search'] = 'Page/search';
$route['save/(:any)'] = 'User/property';
$route['password'] = 'User/password';
$route['save-property'] = 'User/save_property';
$route['view/(:any)'] = 'Page/view/$1';
$route['profile'] = 'User/profile';
$route['setup'] = 'User/setup';
$route['logout'] = 'Page/logout';
$route['contact'] = 'Page/contact';
$route['login'] = 'Page/login';
$route['signup'] = 'Page/signup';
$route['dashboard'] = 'User/index';
$route['rent'] = 'Page/rent';
$route['sale'] = 'Page/sale';
$route['faq'] = 'Page/faqs';
$route['about'] = 'Page/about';
$route['default_controller'] = 'Page/index';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
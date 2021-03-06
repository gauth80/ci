<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//les posts
$route['posts/create'] ='posts/create';
$route['posts/update'] ='posts/update';
$route['posts/(:any)'] = 'posts/view/$1';
$route['posts'] ='posts/index';


$route['default_controller'] = 'pages/view';

//les categories
$route['categories'] = 'categories/index';
$route['categories/create'] = 'categories/create';
$route['(:any)'] = 'pages/view/$1';

//default
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

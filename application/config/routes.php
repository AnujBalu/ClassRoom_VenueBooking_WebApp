<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['Dashboard/open_listform/(:any)'] = "/Dashboard/open_listform/$1";
$route['Dashboard/room_type_data/(:any)'] = "/Dashboard/room_type_data/$1";
$route['Dashboard/academic_schedule/(:any)'] = "/Dashboard/academic_schedule/$a";
$route['default_controller'] = 'Dashboard';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['Dashboard/room_type_deletes/(:any)'] = "/Dashboard/room_type_deletes/$1";
$route['image-upload'] = 'DropzoneImageController';
$route['image-upload/post']['post'] = 'DropzoneImageController/imageUploadPost';

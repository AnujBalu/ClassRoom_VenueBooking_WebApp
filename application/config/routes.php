<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There area two reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router what URI segments to use if those provided
| in the URL cannot be matched to a valid route.
|
*/

$route['default_controller'] = "Login";
$route['deletes/(:any)'] = 'Dashboard/deletes/$1';
$route['room_type_deletes/(:any)'] = 'Dashboard/room_type_deletes/$1';
$route['room_type_edit/(:any)'] = 'Dashboard/room_type_edit/$1';
$route['Dashboard']='Dashboard';
$route['open_form'] = 'Dashboard/open_form';
$route['open_listform'] = 'Dashboard/open_listform';
$route['room_type_edit'] = 'Dashboard/room_type_edit';
$route['open_table'] = 'Dashboard/open_table';
$route['inserting_data']='Dashboard/inserting_data';
$route['room_type_data']='Dashboard/room_type_data';
$route['404_override'] = '';


/* End of file routes.php */
/* Location: ./application/config/routes.php */
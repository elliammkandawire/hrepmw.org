<?php
defined('BASEPATH') OR exit('No direct script access allowed');

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
|	https://codeigniter.com/userguide3/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['news-details/(:any)']='news/news_details/$1';
$route['event-details/(:any)']='Events/event_details/$1';
$route['programs/(:any)']='program/program_details/$1';
$route['vacancies/(:any)']='vacancies/vacancy_details/$1';
$route['announcement/(:any)']='announcements/announcements_details/$1';


$route['login'] = 'user';
$route['auth'] = 'user/login';
$route['dashboard'] = 'home/dashboard';
$route['logout'] = 'user/logout';

$route['update_company'] = 'home/update_company';
$route['update_slider'] = 'slider/update_slider';


$route['program_admin'] = 'program/admin_dashboard';
$route['team_admin'] = 'team/admin_dashboard';
$route['events_admin'] = 'events/admin_dashboard';
$route['partners_admin'] = 'partners/admin_dashboard';

$route['news_admin'] = 'news/news_admin';
$route['downloads_admin'] = 'downloads/admin';
$route['announcement_admin'] = 'announcements/admin';
$route['gallery_admin'] = 'gallery/admin';
$route['vacancies_admin'] = 'vacancies/admin';
$route['vacancies_addNew'] = 'vacancies/addNew';
$route['vacancies_EditExisting'] = 'vacancies/EditExisting';
$route['vacancy_details/(:any)'] = 'vacancies/get_vacancy_details/$1';
$route['vacancy_delete/(:any)'] = 'vacancies/delete/$1';

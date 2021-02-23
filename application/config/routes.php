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
|	https://codeigniter.com/user_guide/general/routing.html
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
$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

// admin rediect routes

$route['admin'] = 'adminController/index';
$route['admin-dashboard'] = 'adminController/adminDashboard';
$route['admin-homepagesettings'] = 'adminController/adminHomepagesettings';
$route['admin-aboutpagesettings'] = 'adminController/adminAboutpagesettings';
$route['admin-productspagesettings'] = 'adminController/adminProductspagesettings';
$route['admin-contactpagesettings'] = 'adminController/adminContactpagesettings';
$route['admin-vendors'] = 'adminController/adminVendors';
$route['admin-customers'] = 'adminController/adminCustomers';
$route['admin-orders'] = 'adminController/adminOrders';
$route['admin-products'] = 'adminController/adminProducts';
$route['admin-userprofile'] = 'adminController/adminUserprofile';
$route['admin-sitesettings'] = 'adminController/adminSitesettings';
$route['admin-database-tables'] = 'adminController/adminDatabaseTables';



// admin functionality routes
$route['admin-login'] = 'adminController/adminLogin';
$route['admin-user-basic-info-update'] = 'adminController/adminUserBasicInfoUpdate';
$route['admin-update-user-password'] = 'adminController/adminUpdateuserpassword';
$route['admin-update-user-address'] = 'adminController/adminUpdateuseraddress';
$route['admin-website-basic-info-update'] = 'adminController/adminWebsiteBasicInfoUpdate';
$route['admin-update-website-address'] = 'adminController/adminUpdatewebsiteaddress';
$route['admin-logout'] = 'adminController/adminLogout';





$route['admin-get-ajax-data/(:any)'] = 'adminController/adminGetajaxdata/$1/';
$route['admin-get-ajax-data-where/(:any)/(:any)/(:num)'] = 'adminController/adminGetajaxdatawhere/$1/$2/$3';
$route['admin-get-all-ajax-data-where/(:any)/(:any)/(:num)'] = 'adminController/adminGetallajaxdatawhere/$1/$2/$3';
$route['admin-check-user-pwd/(:any)'] = 'adminController/adminCheckuserpwd/$1';
$route['admin-get-user-ajax/(:num)'] = 'adminController/adminGetUserAjax/$1';
$route['admin-user-action/(:num)/(:num)'] = 'adminController/adminUserAction/$1/$2';